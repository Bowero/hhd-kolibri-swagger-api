<?php
/**
 * CancellationMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API Swagger specification Kolibri24 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1.778.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CancellationMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CancellationMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CancellationMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_cancelled_email_enabled' => 'bool',
        'is_cancelled_sms_enabled' => 'bool',
        'cancelled_email_text' => 'string',
        'cancelled_email_subject' => 'string',
        'cancelled_sms_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_cancelled_email_enabled' => null,
        'is_cancelled_sms_enabled' => null,
        'cancelled_email_text' => null,
        'cancelled_email_subject' => null,
        'cancelled_sms_text' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_cancelled_email_enabled' => 'isCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'isCancelledSMSEnabled',
        'cancelled_email_text' => 'cancelledEmailText',
        'cancelled_email_subject' => 'cancelledEmailSubject',
        'cancelled_sms_text' => 'cancelledSmsText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_cancelled_email_enabled' => 'setIsCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'setIsCancelledSmsEnabled',
        'cancelled_email_text' => 'setCancelledEmailText',
        'cancelled_email_subject' => 'setCancelledEmailSubject',
        'cancelled_sms_text' => 'setCancelledSmsText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_cancelled_email_enabled' => 'getIsCancelledEmailEnabled',
        'is_cancelled_sms_enabled' => 'getIsCancelledSmsEnabled',
        'cancelled_email_text' => 'getCancelledEmailText',
        'cancelled_email_subject' => 'getCancelledEmailSubject',
        'cancelled_sms_text' => 'getCancelledSmsText'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_cancelled_email_enabled'] = isset($data['is_cancelled_email_enabled']) ? $data['is_cancelled_email_enabled'] : null;
        $this->container['is_cancelled_sms_enabled'] = isset($data['is_cancelled_sms_enabled']) ? $data['is_cancelled_sms_enabled'] : null;
        $this->container['cancelled_email_text'] = isset($data['cancelled_email_text']) ? $data['cancelled_email_text'] : null;
        $this->container['cancelled_email_subject'] = isset($data['cancelled_email_subject']) ? $data['cancelled_email_subject'] : null;
        $this->container['cancelled_sms_text'] = isset($data['cancelled_sms_text']) ? $data['cancelled_sms_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['is_cancelled_email_enabled'] === null) {
            $invalidProperties[] = "'is_cancelled_email_enabled' can't be null";
        }
        if ($this->container['is_cancelled_sms_enabled'] === null) {
            $invalidProperties[] = "'is_cancelled_sms_enabled' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_cancelled_email_enabled
     *
     * @return bool
     */
    public function getIsCancelledEmailEnabled()
    {
        return $this->container['is_cancelled_email_enabled'];
    }

    /**
     * Sets is_cancelled_email_enabled
     *
     * @param bool $is_cancelled_email_enabled is_cancelled_email_enabled
     *
     * @return $this
     */
    public function setIsCancelledEmailEnabled($is_cancelled_email_enabled)
    {
        $this->container['is_cancelled_email_enabled'] = $is_cancelled_email_enabled;

        return $this;
    }

    /**
     * Gets is_cancelled_sms_enabled
     *
     * @return bool
     */
    public function getIsCancelledSmsEnabled()
    {
        return $this->container['is_cancelled_sms_enabled'];
    }

    /**
     * Sets is_cancelled_sms_enabled
     *
     * @param bool $is_cancelled_sms_enabled is_cancelled_sms_enabled
     *
     * @return $this
     */
    public function setIsCancelledSmsEnabled($is_cancelled_sms_enabled)
    {
        $this->container['is_cancelled_sms_enabled'] = $is_cancelled_sms_enabled;

        return $this;
    }

    /**
     * Gets cancelled_email_text
     *
     * @return string
     */
    public function getCancelledEmailText()
    {
        return $this->container['cancelled_email_text'];
    }

    /**
     * Sets cancelled_email_text
     *
     * @param string $cancelled_email_text cancelled_email_text
     *
     * @return $this
     */
    public function setCancelledEmailText($cancelled_email_text)
    {
        $this->container['cancelled_email_text'] = $cancelled_email_text;

        return $this;
    }

    /**
     * Gets cancelled_email_subject
     *
     * @return string
     */
    public function getCancelledEmailSubject()
    {
        return $this->container['cancelled_email_subject'];
    }

    /**
     * Sets cancelled_email_subject
     *
     * @param string $cancelled_email_subject cancelled_email_subject
     *
     * @return $this
     */
    public function setCancelledEmailSubject($cancelled_email_subject)
    {
        $this->container['cancelled_email_subject'] = $cancelled_email_subject;

        return $this;
    }

    /**
     * Gets cancelled_sms_text
     *
     * @return string
     */
    public function getCancelledSmsText()
    {
        return $this->container['cancelled_sms_text'];
    }

    /**
     * Sets cancelled_sms_text
     *
     * @param string $cancelled_sms_text cancelled_sms_text
     *
     * @return $this
     */
    public function setCancelledSmsText($cancelled_sms_text)
    {
        $this->container['cancelled_sms_text'] = $cancelled_sms_text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


