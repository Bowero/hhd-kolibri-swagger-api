<?php
/**
 * ConfirmationMessage
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
 * ConfirmationMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfirmationMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConfirmationMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_confirmed_email_enabled' => 'bool',
        'is_confirmed_sms_enabled' => 'bool',
        'confirmed_email_text' => 'string',
        'confirmed_email_subject' => 'string',
        'confirmed_sms_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_confirmed_email_enabled' => null,
        'is_confirmed_sms_enabled' => null,
        'confirmed_email_text' => null,
        'confirmed_email_subject' => null,
        'confirmed_sms_text' => null
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
        'is_confirmed_email_enabled' => 'isConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'isConfirmedSMSEnabled',
        'confirmed_email_text' => 'confirmedEmailText',
        'confirmed_email_subject' => 'confirmedEmailSubject',
        'confirmed_sms_text' => 'confirmedSMSText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_confirmed_email_enabled' => 'setIsConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'setIsConfirmedSmsEnabled',
        'confirmed_email_text' => 'setConfirmedEmailText',
        'confirmed_email_subject' => 'setConfirmedEmailSubject',
        'confirmed_sms_text' => 'setConfirmedSmsText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_confirmed_email_enabled' => 'getIsConfirmedEmailEnabled',
        'is_confirmed_sms_enabled' => 'getIsConfirmedSmsEnabled',
        'confirmed_email_text' => 'getConfirmedEmailText',
        'confirmed_email_subject' => 'getConfirmedEmailSubject',
        'confirmed_sms_text' => 'getConfirmedSmsText'
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
        $this->container['is_confirmed_email_enabled'] = isset($data['is_confirmed_email_enabled']) ? $data['is_confirmed_email_enabled'] : null;
        $this->container['is_confirmed_sms_enabled'] = isset($data['is_confirmed_sms_enabled']) ? $data['is_confirmed_sms_enabled'] : null;
        $this->container['confirmed_email_text'] = isset($data['confirmed_email_text']) ? $data['confirmed_email_text'] : null;
        $this->container['confirmed_email_subject'] = isset($data['confirmed_email_subject']) ? $data['confirmed_email_subject'] : null;
        $this->container['confirmed_sms_text'] = isset($data['confirmed_sms_text']) ? $data['confirmed_sms_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['is_confirmed_email_enabled'] === null) {
            $invalidProperties[] = "'is_confirmed_email_enabled' can't be null";
        }
        if ($this->container['is_confirmed_sms_enabled'] === null) {
            $invalidProperties[] = "'is_confirmed_sms_enabled' can't be null";
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
     * Gets is_confirmed_email_enabled
     *
     * @return bool
     */
    public function getIsConfirmedEmailEnabled()
    {
        return $this->container['is_confirmed_email_enabled'];
    }

    /**
     * Sets is_confirmed_email_enabled
     *
     * @param bool $is_confirmed_email_enabled is_confirmed_email_enabled
     *
     * @return $this
     */
    public function setIsConfirmedEmailEnabled($is_confirmed_email_enabled)
    {
        $this->container['is_confirmed_email_enabled'] = $is_confirmed_email_enabled;

        return $this;
    }

    /**
     * Gets is_confirmed_sms_enabled
     *
     * @return bool
     */
    public function getIsConfirmedSmsEnabled()
    {
        return $this->container['is_confirmed_sms_enabled'];
    }

    /**
     * Sets is_confirmed_sms_enabled
     *
     * @param bool $is_confirmed_sms_enabled is_confirmed_sms_enabled
     *
     * @return $this
     */
    public function setIsConfirmedSmsEnabled($is_confirmed_sms_enabled)
    {
        $this->container['is_confirmed_sms_enabled'] = $is_confirmed_sms_enabled;

        return $this;
    }

    /**
     * Gets confirmed_email_text
     *
     * @return string
     */
    public function getConfirmedEmailText()
    {
        return $this->container['confirmed_email_text'];
    }

    /**
     * Sets confirmed_email_text
     *
     * @param string $confirmed_email_text confirmed_email_text
     *
     * @return $this
     */
    public function setConfirmedEmailText($confirmed_email_text)
    {
        $this->container['confirmed_email_text'] = $confirmed_email_text;

        return $this;
    }

    /**
     * Gets confirmed_email_subject
     *
     * @return string
     */
    public function getConfirmedEmailSubject()
    {
        return $this->container['confirmed_email_subject'];
    }

    /**
     * Sets confirmed_email_subject
     *
     * @param string $confirmed_email_subject confirmed_email_subject
     *
     * @return $this
     */
    public function setConfirmedEmailSubject($confirmed_email_subject)
    {
        $this->container['confirmed_email_subject'] = $confirmed_email_subject;

        return $this;
    }

    /**
     * Gets confirmed_sms_text
     *
     * @return string
     */
    public function getConfirmedSmsText()
    {
        return $this->container['confirmed_sms_text'];
    }

    /**
     * Sets confirmed_sms_text
     *
     * @param string $confirmed_sms_text confirmed_sms_text
     *
     * @return $this
     */
    public function setConfirmedSmsText($confirmed_sms_text)
    {
        $this->container['confirmed_sms_text'] = $confirmed_sms_text;

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


