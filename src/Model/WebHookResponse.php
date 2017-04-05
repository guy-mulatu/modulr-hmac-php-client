<?php
/**
 * WebHookResponse.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swaagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Modulr API.
 *
 * Modulo API
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrowdProperty\ModulrHmacPhpClient\Model;

use ArrayAccess;

/**
 * WebHookResponse Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WebHookResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'WebHookResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bid'          => 'string',
        'customer_bid' => 'string',
        'event_name'   => 'string',
        'retry'        => 'bool',
        'status'       => 'string',
        'url'          => 'string',
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bid'          => 'bid',
        'customer_bid' => 'customerBid',
        'event_name'   => 'eventName',
        'retry'        => 'retry',
        'status'       => 'status',
        'url'          => 'url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'bid'          => 'setBid',
        'customer_bid' => 'setCustomerBid',
        'event_name'   => 'setEventName',
        'retry'        => 'setRetry',
        'status'       => 'setStatus',
        'url'          => 'setUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'bid'          => 'getBid',
        'customer_bid' => 'getCustomerBid',
        'event_name'   => 'getEventName',
        'retry'        => 'getRetry',
        'status'       => 'getStatus',
        'url'          => 'getUrl',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const EVENT_NAME_PAYIN = 'PAYIN';
    const EVENT_NAME_PAYOUT = 'PAYOUT';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_PAYIN,
            self::EVENT_NAME_PAYOUT,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['customer_bid'] = isset($data['customer_bid']) ? $data['customer_bid'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['bid'] === null) {
            $invalid_properties[] = "'bid' can't be null";
        }
        if ($this->container['customer_bid'] === null) {
            $invalid_properties[] = "'customer_bid' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalid_properties[] = "'event_name' can't be null";
        }
        $allowed_values = ['PAYIN'];
        if (!in_array($this->container['event_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'event_name', must be one of 'PAYIN', 'PAYOUT'.";
        }

        if ($this->container['retry'] === null) {
            $invalid_properties[] = "'retry' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ['ACTIVE', 'INACTIVE'];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'ACTIVE', 'INACTIVE'.";
        }

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if ($this->container['bid'] === null) {
            return false;
        }
        if ($this->container['customer_bid'] === null) {
            return false;
        }
        if ($this->container['event_name'] === null) {
            return false;
        }
        $allowed_values = ['PAYIN'];
        if (!in_array($this->container['event_name'], $allowed_values)) {
            return false;
        }
        if ($this->container['retry'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ['ACTIVE', 'INACTIVE'];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }

        return true;
    }

    /**
     * Gets bid.
     *
     * @return string
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid.
     *
     * @param string $bid Unique Identifier for the webhook.
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets customer_bid.
     *
     * @return string
     */
    public function getCustomerBid()
    {
        return $this->container['customer_bid'];
    }

    /**
     * Sets customer_bid.
     *
     * @param string $customer_bid Unique Identifier for the customer of this webhook.
     *
     * @return $this
     */
    public function setCustomerBid($customer_bid)
    {
        $this->container['customer_bid'] = $customer_bid;

        return $this;
    }

    /**
     * Gets event_name.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name.
     *
     * @param string $event_name Event which would trigger the webhook. Can be one of
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $allowed_values = $this->getEventNameAllowableValues();
        if ((!in_array($event_name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'event_name', must be one of 'PAYIN', 'PAYOUT");
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets retry.
     *
     * @return bool
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry.
     *
     * @param bool $retry Turn webhook retry mechanism on/off
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status Status of webhook.Can be one of
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = ['ACTIVE', 'INACTIVE'];
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'INACTIVE'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url Endpoint URL for receiving webhook data
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}
