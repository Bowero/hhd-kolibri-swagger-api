<?php
/**
 * FormElement
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
 * FormElement Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'pre_text' => 'string',
        'post_text' => 'string',
        'type' => '\Swagger\Client\Model\FormElementType',
        'text_info' => '\Swagger\Client\Model\FormElementTextInfo',
        'integer_info' => '\Swagger\Client\Model\FormElementIntegerInfo',
        'decimal_info' => '\Swagger\Client\Model\FormElementDecimalInfo',
        'date_info' => '\Swagger\Client\Model\FormElementDateInfo',
        'drop_down_info' => '\Swagger\Client\Model\FormElementDropDownInfo',
        'heading_info' => '\Swagger\Client\Model\FormElementHeadingInfo',
        'form_elements' => '\Swagger\Client\Model\FormElement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'pre_text' => null,
        'post_text' => null,
        'type' => null,
        'text_info' => null,
        'integer_info' => null,
        'decimal_info' => null,
        'date_info' => null,
        'drop_down_info' => null,
        'heading_info' => null,
        'form_elements' => null
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
        'name' => 'name',
        'pre_text' => 'preText',
        'post_text' => 'postText',
        'type' => 'type',
        'text_info' => 'textInfo',
        'integer_info' => 'integerInfo',
        'decimal_info' => 'decimalInfo',
        'date_info' => 'dateInfo',
        'drop_down_info' => 'dropDownInfo',
        'heading_info' => 'headingInfo',
        'form_elements' => 'formElements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'pre_text' => 'setPreText',
        'post_text' => 'setPostText',
        'type' => 'setType',
        'text_info' => 'setTextInfo',
        'integer_info' => 'setIntegerInfo',
        'decimal_info' => 'setDecimalInfo',
        'date_info' => 'setDateInfo',
        'drop_down_info' => 'setDropDownInfo',
        'heading_info' => 'setHeadingInfo',
        'form_elements' => 'setFormElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'pre_text' => 'getPreText',
        'post_text' => 'getPostText',
        'type' => 'getType',
        'text_info' => 'getTextInfo',
        'integer_info' => 'getIntegerInfo',
        'decimal_info' => 'getDecimalInfo',
        'date_info' => 'getDateInfo',
        'drop_down_info' => 'getDropDownInfo',
        'heading_info' => 'getHeadingInfo',
        'form_elements' => 'getFormElements'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pre_text'] = isset($data['pre_text']) ? $data['pre_text'] : null;
        $this->container['post_text'] = isset($data['post_text']) ? $data['post_text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['text_info'] = isset($data['text_info']) ? $data['text_info'] : null;
        $this->container['integer_info'] = isset($data['integer_info']) ? $data['integer_info'] : null;
        $this->container['decimal_info'] = isset($data['decimal_info']) ? $data['decimal_info'] : null;
        $this->container['date_info'] = isset($data['date_info']) ? $data['date_info'] : null;
        $this->container['drop_down_info'] = isset($data['drop_down_info']) ? $data['drop_down_info'] : null;
        $this->container['heading_info'] = isset($data['heading_info']) ? $data['heading_info'] : null;
        $this->container['form_elements'] = isset($data['form_elements']) ? $data['form_elements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pre_text
     *
     * @return string
     */
    public function getPreText()
    {
        return $this->container['pre_text'];
    }

    /**
     * Sets pre_text
     *
     * @param string $pre_text pre_text
     *
     * @return $this
     */
    public function setPreText($pre_text)
    {
        $this->container['pre_text'] = $pre_text;

        return $this;
    }

    /**
     * Gets post_text
     *
     * @return string
     */
    public function getPostText()
    {
        return $this->container['post_text'];
    }

    /**
     * Sets post_text
     *
     * @param string $post_text post_text
     *
     * @return $this
     */
    public function setPostText($post_text)
    {
        $this->container['post_text'] = $post_text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\FormElementType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\FormElementType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text_info
     *
     * @return \Swagger\Client\Model\FormElementTextInfo
     */
    public function getTextInfo()
    {
        return $this->container['text_info'];
    }

    /**
     * Sets text_info
     *
     * @param \Swagger\Client\Model\FormElementTextInfo $text_info text_info
     *
     * @return $this
     */
    public function setTextInfo($text_info)
    {
        $this->container['text_info'] = $text_info;

        return $this;
    }

    /**
     * Gets integer_info
     *
     * @return \Swagger\Client\Model\FormElementIntegerInfo
     */
    public function getIntegerInfo()
    {
        return $this->container['integer_info'];
    }

    /**
     * Sets integer_info
     *
     * @param \Swagger\Client\Model\FormElementIntegerInfo $integer_info integer_info
     *
     * @return $this
     */
    public function setIntegerInfo($integer_info)
    {
        $this->container['integer_info'] = $integer_info;

        return $this;
    }

    /**
     * Gets decimal_info
     *
     * @return \Swagger\Client\Model\FormElementDecimalInfo
     */
    public function getDecimalInfo()
    {
        return $this->container['decimal_info'];
    }

    /**
     * Sets decimal_info
     *
     * @param \Swagger\Client\Model\FormElementDecimalInfo $decimal_info decimal_info
     *
     * @return $this
     */
    public function setDecimalInfo($decimal_info)
    {
        $this->container['decimal_info'] = $decimal_info;

        return $this;
    }

    /**
     * Gets date_info
     *
     * @return \Swagger\Client\Model\FormElementDateInfo
     */
    public function getDateInfo()
    {
        return $this->container['date_info'];
    }

    /**
     * Sets date_info
     *
     * @param \Swagger\Client\Model\FormElementDateInfo $date_info date_info
     *
     * @return $this
     */
    public function setDateInfo($date_info)
    {
        $this->container['date_info'] = $date_info;

        return $this;
    }

    /**
     * Gets drop_down_info
     *
     * @return \Swagger\Client\Model\FormElementDropDownInfo
     */
    public function getDropDownInfo()
    {
        return $this->container['drop_down_info'];
    }

    /**
     * Sets drop_down_info
     *
     * @param \Swagger\Client\Model\FormElementDropDownInfo $drop_down_info drop_down_info
     *
     * @return $this
     */
    public function setDropDownInfo($drop_down_info)
    {
        $this->container['drop_down_info'] = $drop_down_info;

        return $this;
    }

    /**
     * Gets heading_info
     *
     * @return \Swagger\Client\Model\FormElementHeadingInfo
     */
    public function getHeadingInfo()
    {
        return $this->container['heading_info'];
    }

    /**
     * Sets heading_info
     *
     * @param \Swagger\Client\Model\FormElementHeadingInfo $heading_info heading_info
     *
     * @return $this
     */
    public function setHeadingInfo($heading_info)
    {
        $this->container['heading_info'] = $heading_info;

        return $this;
    }

    /**
     * Gets form_elements
     *
     * @return \Swagger\Client\Model\FormElement[]
     */
    public function getFormElements()
    {
        return $this->container['form_elements'];
    }

    /**
     * Sets form_elements
     *
     * @param \Swagger\Client\Model\FormElement[] $form_elements form_elements
     *
     * @return $this
     */
    public function setFormElements($form_elements)
    {
        $this->container['form_elements'] = $form_elements;

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


