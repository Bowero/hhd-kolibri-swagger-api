<?php
/**
 * CommunicationLogBlobMetaData
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
 * CommunicationLogBlobMetaData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationLogBlobMetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationLogBlobMetaData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_size' => 'int',
        'md5_hash' => 'string',
        'is_uploaded' => 'bool',
        'content_type' => 'string',
        'download_link' => 'string',
        'blob_type' => '\Swagger\Client\Model\CommunicationLogBlobType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_size' => 'int64',
        'md5_hash' => null,
        'is_uploaded' => null,
        'content_type' => null,
        'download_link' => 'uri',
        'blob_type' => null
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
        'file_size' => 'fileSize',
        'md5_hash' => 'md5Hash',
        'is_uploaded' => 'isUploaded',
        'content_type' => 'contentType',
        'download_link' => 'downloadLink',
        'blob_type' => 'blobType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'md5_hash' => 'setMd5Hash',
        'is_uploaded' => 'setIsUploaded',
        'content_type' => 'setContentType',
        'download_link' => 'setDownloadLink',
        'blob_type' => 'setBlobType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'md5_hash' => 'getMd5Hash',
        'is_uploaded' => 'getIsUploaded',
        'content_type' => 'getContentType',
        'download_link' => 'getDownloadLink',
        'blob_type' => 'getBlobType'
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
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['md5_hash'] = isset($data['md5_hash']) ? $data['md5_hash'] : null;
        $this->container['is_uploaded'] = isset($data['is_uploaded']) ? $data['is_uploaded'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['download_link'] = isset($data['download_link']) ? $data['download_link'] : null;
        $this->container['blob_type'] = isset($data['blob_type']) ? $data['blob_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['md5_hash']) && (mb_strlen($this->container['md5_hash']) > 50)) {
            $invalidProperties[] = "invalid value for 'md5_hash', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['is_uploaded'] === null) {
            $invalidProperties[] = "'is_uploaded' can't be null";
        }
        if (!is_null($this->container['content_type']) && (mb_strlen($this->container['content_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['blob_type'] === null) {
            $invalidProperties[] = "'blob_type' can't be null";
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
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size file_size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets md5_hash
     *
     * @return string
     */
    public function getMd5Hash()
    {
        return $this->container['md5_hash'];
    }

    /**
     * Sets md5_hash
     *
     * @param string $md5_hash md5_hash
     *
     * @return $this
     */
    public function setMd5Hash($md5_hash)
    {
        if (!is_null($md5_hash) && (mb_strlen($md5_hash) > 50)) {
            throw new \InvalidArgumentException('invalid length for $md5_hash when calling CommunicationLogBlobMetaData., must be smaller than or equal to 50.');
        }

        $this->container['md5_hash'] = $md5_hash;

        return $this;
    }

    /**
     * Gets is_uploaded
     *
     * @return bool
     */
    public function getIsUploaded()
    {
        return $this->container['is_uploaded'];
    }

    /**
     * Sets is_uploaded
     *
     * @param bool $is_uploaded is_uploaded
     *
     * @return $this
     */
    public function setIsUploaded($is_uploaded)
    {
        $this->container['is_uploaded'] = $is_uploaded;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        if (!is_null($content_type) && (mb_strlen($content_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling CommunicationLogBlobMetaData., must be smaller than or equal to 100.');
        }

        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets download_link
     *
     * @return string
     */
    public function getDownloadLink()
    {
        return $this->container['download_link'];
    }

    /**
     * Sets download_link
     *
     * @param string $download_link download_link
     *
     * @return $this
     */
    public function setDownloadLink($download_link)
    {
        $this->container['download_link'] = $download_link;

        return $this;
    }

    /**
     * Gets blob_type
     *
     * @return \Swagger\Client\Model\CommunicationLogBlobType
     */
    public function getBlobType()
    {
        return $this->container['blob_type'];
    }

    /**
     * Sets blob_type
     *
     * @param \Swagger\Client\Model\CommunicationLogBlobType $blob_type blob_type
     *
     * @return $this
     */
    public function setBlobType($blob_type)
    {
        $this->container['blob_type'] = $blob_type;

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

