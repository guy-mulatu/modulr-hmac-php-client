<?php

namespace CrowdProperty\ModulrHmacPhpClient\Http\Middleware;

use Carbon\Carbon;
use Closure;
use CrowdProperty\ModulrHmacPhpClient\ModulrApi;
use Illuminate\Support\Facades\Storage;
use Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class VerifyModulrHmac
{


    protected function parseSignature($signature)
    {
        $return = [];
        $matches = [];

        preg_match_all('/\b(?:[^="]+)/', $signature, $matches);

        foreach (array_chunk($matches[0], 2) as $pair) {
            list($key, $value) = $pair;
            $return[$key] = $value;
        }

        return $return;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $client = new ModulrApi();

        $signatureArray = $this->parseSignature($request->header('Authorization'));
        $client->setApiKey($signatureArray['Signature keyId']);
        $client->setHmacSecret(md5(env('MODULR_HOOK_SECRET')));
        $client->setNonce($request->header('X-Mod-Nonce'));
        $client->setTimezone('GMT');

        if (env('APP_DEBUG')) {
            $client->setDate(new Carbon($request->header('Date')));
        }


        if(env('MODULR_LOG_HEADERS')) {
            $request->headers->all();
            $log = new Logger('name');
            $log->pushHandler(new StreamHandler(storage('logs/modulr/headers.log'), Logger::DEBUG));
            $log->info($client->authorisationString());
            $log->info($request->header('Authorization'));
            $log->info(print_r($request->headers->all(), true));
        }

        if ($client->authorisationString() != $request->header('Authorization')) {
            \App::abort(401, 'Not authenticated');
        } else {
            return $next($request);
        }
    }
}
