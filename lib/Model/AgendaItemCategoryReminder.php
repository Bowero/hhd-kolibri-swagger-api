<?php
/**
 * AgendaItemCategoryReminder
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
 * AgendaItemCategoryReminder Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgendaItemCategoryReminder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgendaItemCategoryReminder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_confirmation' => '\Swagger\Client\Model\Confirmation',
        'second_confirmation' => '\Swagger\Client\Model\Confirmation',
        'confirmation_message' => '\Swagger\Client\Model\ConfirmationMessage',
        'cancellation_message' => '\Swagger\Client\Model\CancellationMessage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_confirmation' => null,
        'second_confirmation' => null,
        'confirmation_message' => null,
        'cancellation_message' => null
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
        'first_confirmation' => 'firstConfirmation',
        'second_confirmation' => 'secondConfirmation',
        'confirmation_message' => 'confirmationMessage',
        'cancellation_message' => 'cancellationMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_confirmation' => 'setFirstConfirmation',
        'second_confirmation' => 'setSecondConfirmation',
        'confirmation_message' => 'setConfirmationMessage',
        'cancellation_message' => 'setCancellationMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_confirmation' => 'getFirstConfirmation',
        'second_confirmation' => 'getSecondConfirmation',
        'confirmation_message' => 'getConfirmationMessage',
        'cancellation_message' => 'getCancellationMessage'
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
        $this->container['first_confirmation'] = isset($data['first_confirmation']) ? $data['first_confirmation'] : null;
        $this->container['second_confirmation'] = isset($data['second_confirmation']) ? $data['second_confirmation'] : null;
        $this->container['confirmation_message'] = isset($data['confirmation_message']) ? $data['confirmation_message'] : null;
        $this->container['cancellation_message'] = isset($data['cancellation_message']) ? $data['cancellation_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets first_confirmation
     *
     * @return \Swagger\Client\Model\Confirmation
     */
    public function getFirstConfirmation()
    {
        return $this->container['first_confirmation'];
    }

    /**
     * Sets first_confirmation
     *
     * @param \Swagger\Client\Model\Confirmation $first_confirmation first_confirmation
     *
     * @return $this
     */
    public function setFirstConfirmation($first_confirmation)
    {
        $this->container['first_confirmation'] = $first_confirmation;

        return $this;
    }

    /**
     * Gets second_confirmation
     *
     * @return \Swagger\Client\Model\Confirmation
     */
    public function getSecondConfirmation()
    {
        return $this->container['second_confirmation'];
    }

    /**
     * Sets second_confirmation
     *
     * @param \Swagger\Client\Model\Confirmation $second_confirmation second_confirmation
     *
     * @return $this
     */
    public function setSecondConfirmation($second_confirmation)
    {
        $this->container['second_confirmation'] = $second_confirmation;

        return $this;
    }

    /**
     * Gets confirmation_message
     *
     * @return \Swagger\Client\Model\ConfirmationMessage
     */
    public function getConfirmationMessage()
    {
        return $this->container['confirmation_message'];
    }

    /**
     * Sets confirmation_message
     *
     * @param \Swagger\Client\Model\ConfirmationMessage $confirmation_message confirmation_message
     *
     * @return $this
     */
    public function setConfirmationMessage($confirmation_message)
    {
        $this->container['confirmation_message'] = $confirmation_message;

        return $this;
    }

    /**
     * Gets cancellation_message
     *
     * @return \Swagger\Client\Model\CancellationMessage
     */
    public function getCancellationMessage()
    {
        return $this->container['cancellation_message'];
    }

    /**
     * Sets cancellation_message
     *
     * @param \Swagger\Client\Model\CancellationMessage $cancellation_message cancellation_message
     *
     * @return $this
     */
    public function setCancellationMessage($cancellation_message)
    {
        $this->container['cancellation_message'] = $cancellation_message;

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


