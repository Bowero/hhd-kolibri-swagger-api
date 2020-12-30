<?php
/**
 * HttpError
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
 * HttpError Class Doc Comment
 *
 * @category Class
 * @description Defines a serializable container for storing error information. This information is stored  as key/value pairs. The dictionary keys to look up standard error information are available on the HttpErrorKeys type.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HttpError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'model_state' => 'object',
        'message_detail' => 'string',
        'exception_message' => 'string',
        'exception_type' => 'string',
        'stack_trace' => 'string',
        'inner_exception' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'model_state' => null,
        'message_detail' => null,
        'exception_message' => null,
        'exception_type' => null,
        'stack_trace' => null,
        'inner_exception' => null
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
        'message' => 'message',
        'model_state' => 'modelState',
        'message_detail' => 'messageDetail',
        'exception_message' => 'exceptionMessage',
        'exception_type' => 'exceptionType',
        'stack_trace' => 'stackTrace',
        'inner_exception' => 'innerException'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'model_state' => 'setModelState',
        'message_detail' => 'setMessageDetail',
        'exception_message' => 'setExceptionMessage',
        'exception_type' => 'setExceptionType',
        'stack_trace' => 'setStackTrace',
        'inner_exception' => 'setInnerException'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'model_state' => 'getModelState',
        'message_detail' => 'getMessageDetail',
        'exception_message' => 'getExceptionMessage',
        'exception_type' => 'getExceptionType',
        'stack_trace' => 'getStackTrace',
        'inner_exception' => 'getInnerException'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['model_state'] = isset($data['model_state']) ? $data['model_state'] : null;
        $this->container['message_detail'] = isset($data['message_detail']) ? $data['message_detail'] : null;
        $this->container['exception_message'] = isset($data['exception_message']) ? $data['exception_message'] : null;
        $this->container['exception_type'] = isset($data['exception_type']) ? $data['exception_type'] : null;
        $this->container['stack_trace'] = isset($data['stack_trace']) ? $data['stack_trace'] : null;
        $this->container['inner_exception'] = isset($data['inner_exception']) ? $data['inner_exception'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Gets or sets the high-level, user-visible message explaining the cause of the error. Information carried in this field should be considered public in that it will go over the wire regardless of the IncludeErrorDetailPolicy. As a result care should be taken not to disclose sensitive information about the server or the application.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets model_state
     *
     * @return object
     */
    public function getModelState()
    {
        return $this->container['model_state'];
    }

    /**
     * Sets model_state
     *
     * @param object $model_state Gets the ModelState containing information about the errors that occurred during model binding.
     *
     * @return $this
     */
    public function setModelState($model_state)
    {
        $this->container['model_state'] = $model_state;

        return $this;
    }

    /**
     * Gets message_detail
     *
     * @return string
     */
    public function getMessageDetail()
    {
        return $this->container['message_detail'];
    }

    /**
     * Sets message_detail
     *
     * @param string $message_detail Gets or sets a detailed description of the error intended for the developer to understand exactly what failed.
     *
     * @return $this
     */
    public function setMessageDetail($message_detail)
    {
        $this->container['message_detail'] = $message_detail;

        return $this;
    }

    /**
     * Gets exception_message
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->container['exception_message'];
    }

    /**
     * Sets exception_message
     *
     * @param string $exception_message Gets or sets the message of the Exception if available.
     *
     * @return $this
     */
    public function setExceptionMessage($exception_message)
    {
        $this->container['exception_message'] = $exception_message;

        return $this;
    }

    /**
     * Gets exception_type
     *
     * @return string
     */
    public function getExceptionType()
    {
        return $this->container['exception_type'];
    }

    /**
     * Sets exception_type
     *
     * @param string $exception_type Gets or sets the type of the Exception if available.
     *
     * @return $this
     */
    public function setExceptionType($exception_type)
    {
        $this->container['exception_type'] = $exception_type;

        return $this;
    }

    /**
     * Gets stack_trace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->container['stack_trace'];
    }

    /**
     * Sets stack_trace
     *
     * @param string $stack_trace Gets or sets the stack trace information associated with this instance if available.
     *
     * @return $this
     */
    public function setStackTrace($stack_trace)
    {
        $this->container['stack_trace'] = $stack_trace;

        return $this;
    }

    /**
     * Gets inner_exception
     *
     * @return object
     */
    public function getInnerException()
    {
        return $this->container['inner_exception'];
    }

    /**
     * Sets inner_exception
     *
     * @param object $inner_exception Gets the inner Exception associated with this instance if available.
     *
     * @return $this
     */
    public function setInnerException($inner_exception)
    {
        $this->container['inner_exception'] = $inner_exception;

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

