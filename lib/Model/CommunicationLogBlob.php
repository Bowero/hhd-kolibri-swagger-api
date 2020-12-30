<?php
/**
 * CommunicationLogBlob
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
use \Swagger\Client\ObjectSerializer;

/**
 * CommunicationLogBlob Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationLogBlob extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationLogBlob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'communication_log_id' => 'string',
        'file_name' => 'string',
        'file_extension' => 'string',
        'content_id' => 'string',
        '_meta_data' => '\Swagger\Client\Model\CommunicationLogBlobMetaData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'communication_log_id' => 'guid',
        'file_name' => null,
        'file_extension' => null,
        'content_id' => null,
        '_meta_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'communication_log_id' => 'communicationLogId',
        'file_name' => 'fileName',
        'file_extension' => 'fileExtension',
        'content_id' => 'contentId',
        '_meta_data' => '_metaData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'communication_log_id' => 'setCommunicationLogId',
        'file_name' => 'setFileName',
        'file_extension' => 'setFileExtension',
        'content_id' => 'setContentId',
        '_meta_data' => 'setMetaData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'communication_log_id' => 'getCommunicationLogId',
        'file_name' => 'getFileName',
        'file_extension' => 'getFileExtension',
        'content_id' => 'getContentId',
        '_meta_data' => 'getMetaData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['communication_log_id'] = isset($data['communication_log_id']) ? $data['communication_log_id'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['content_id'] = isset($data['content_id']) ? $data['content_id'] : null;
        $this->container['_meta_data'] = isset($data['_meta_data']) ? $data['_meta_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['communication_log_id']) && (mb_strlen($this->container['communication_log_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'communication_log_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['file_extension']) && (mb_strlen($this->container['file_extension']) > 255)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['file_extension']) && (mb_strlen($this->container['file_extension']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['content_id']) && (mb_strlen($this->container['content_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_id', the character length must be smaller than or equal to 100.";
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
     * Gets communication_log_id
     *
     * @return string
     */
    public function getCommunicationLogId()
    {
        return $this->container['communication_log_id'];
    }

    /**
     * Sets communication_log_id
     *
     * @param string $communication_log_id communication_log_id
     *
     * @return $this
     */
    public function setCommunicationLogId($communication_log_id)
    {

        if (!is_null($communication_log_id) && (mb_strlen($communication_log_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $communication_log_id when calling CommunicationLogBlob., must be bigger than or equal to 1.');
        }

        $this->container['communication_log_id'] = $communication_log_id;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        if (!is_null($file_name) && (mb_strlen($file_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling CommunicationLogBlob., must be smaller than or equal to 255.');
        }
        if (!is_null($file_name) && (mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling CommunicationLogBlob., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string $file_extension file_extension
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        if (!is_null($file_extension) && (mb_strlen($file_extension) > 255)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling CommunicationLogBlob., must be smaller than or equal to 255.');
        }
        if (!is_null($file_extension) && (mb_strlen($file_extension) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling CommunicationLogBlob., must be bigger than or equal to 1.');
        }

        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets content_id
     *
     * @return string
     */
    public function getContentId()
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param string $content_id content_id
     *
     * @return $this
     */
    public function setContentId($content_id)
    {
        if (!is_null($content_id) && (mb_strlen($content_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $content_id when calling CommunicationLogBlob., must be smaller than or equal to 100.');
        }

        $this->container['content_id'] = $content_id;

        return $this;
    }

    /**
     * Gets _meta_data
     *
     * @return \Swagger\Client\Model\CommunicationLogBlobMetaData
     */
    public function getMetaData()
    {
        return $this->container['_meta_data'];
    }

    /**
     * Sets _meta_data
     *
     * @param \Swagger\Client\Model\CommunicationLogBlobMetaData $_meta_data _meta_data
     *
     * @return $this
     */
    public function setMetaData($_meta_data)
    {
        $this->container['_meta_data'] = $_meta_data;

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

