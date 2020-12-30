<?php
/**
 * HttpContentHeaders
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
 * HttpContentHeaders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpContentHeaders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HttpContentHeaders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow' => 'string[]',
        'content_disposition' => '\Swagger\Client\Model\ContentDispositionHeaderValue',
        'content_encoding' => 'string[]',
        'content_language' => 'string[]',
        'content_length' => 'int',
        'content_location' => 'string',
        'content_md5' => 'string',
        'content_range' => '\Swagger\Client\Model\ContentRangeHeaderValue',
        'content_type' => '\Swagger\Client\Model\MediaTypeHeaderValue',
        'expires' => '\DateTime',
        'last_modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow' => null,
        'content_disposition' => null,
        'content_encoding' => null,
        'content_language' => null,
        'content_length' => 'int64',
        'content_location' => 'uri',
        'content_md5' => 'byte',
        'content_range' => null,
        'content_type' => null,
        'expires' => 'date-time',
        'last_modified' => 'date-time'
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
        'allow' => 'allow',
        'content_disposition' => 'contentDisposition',
        'content_encoding' => 'contentEncoding',
        'content_language' => 'contentLanguage',
        'content_length' => 'contentLength',
        'content_location' => 'contentLocation',
        'content_md5' => 'contentMD5',
        'content_range' => 'contentRange',
        'content_type' => 'contentType',
        'expires' => 'expires',
        'last_modified' => 'lastModified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow' => 'setAllow',
        'content_disposition' => 'setContentDisposition',
        'content_encoding' => 'setContentEncoding',
        'content_language' => 'setContentLanguage',
        'content_length' => 'setContentLength',
        'content_location' => 'setContentLocation',
        'content_md5' => 'setContentMd5',
        'content_range' => 'setContentRange',
        'content_type' => 'setContentType',
        'expires' => 'setExpires',
        'last_modified' => 'setLastModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow' => 'getAllow',
        'content_disposition' => 'getContentDisposition',
        'content_encoding' => 'getContentEncoding',
        'content_language' => 'getContentLanguage',
        'content_length' => 'getContentLength',
        'content_location' => 'getContentLocation',
        'content_md5' => 'getContentMd5',
        'content_range' => 'getContentRange',
        'content_type' => 'getContentType',
        'expires' => 'getExpires',
        'last_modified' => 'getLastModified'
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
        $this->container['allow'] = isset($data['allow']) ? $data['allow'] : null;
        $this->container['content_disposition'] = isset($data['content_disposition']) ? $data['content_disposition'] : null;
        $this->container['content_encoding'] = isset($data['content_encoding']) ? $data['content_encoding'] : null;
        $this->container['content_language'] = isset($data['content_language']) ? $data['content_language'] : null;
        $this->container['content_length'] = isset($data['content_length']) ? $data['content_length'] : null;
        $this->container['content_location'] = isset($data['content_location']) ? $data['content_location'] : null;
        $this->container['content_md5'] = isset($data['content_md5']) ? $data['content_md5'] : null;
        $this->container['content_range'] = isset($data['content_range']) ? $data['content_range'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['content_md5']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content_md5'])) {
            $invalidProperties[] = "invalid value for 'content_md5', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets allow
     *
     * @return string[]
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     *
     * @param string[] $allow allow
     *
     * @return $this
     */
    public function setAllow($allow)
    {
        $this->container['allow'] = $allow;

        return $this;
    }

    /**
     * Gets content_disposition
     *
     * @return \Swagger\Client\Model\ContentDispositionHeaderValue
     */
    public function getContentDisposition()
    {
        return $this->container['content_disposition'];
    }

    /**
     * Sets content_disposition
     *
     * @param \Swagger\Client\Model\ContentDispositionHeaderValue $content_disposition content_disposition
     *
     * @return $this
     */
    public function setContentDisposition($content_disposition)
    {
        $this->container['content_disposition'] = $content_disposition;

        return $this;
    }

    /**
     * Gets content_encoding
     *
     * @return string[]
     */
    public function getContentEncoding()
    {
        return $this->container['content_encoding'];
    }

    /**
     * Sets content_encoding
     *
     * @param string[] $content_encoding content_encoding
     *
     * @return $this
     */
    public function setContentEncoding($content_encoding)
    {
        $this->container['content_encoding'] = $content_encoding;

        return $this;
    }

    /**
     * Gets content_language
     *
     * @return string[]
     */
    public function getContentLanguage()
    {
        return $this->container['content_language'];
    }

    /**
     * Sets content_language
     *
     * @param string[] $content_language content_language
     *
     * @return $this
     */
    public function setContentLanguage($content_language)
    {
        $this->container['content_language'] = $content_language;

        return $this;
    }

    /**
     * Gets content_length
     *
     * @return int
     */
    public function getContentLength()
    {
        return $this->container['content_length'];
    }

    /**
     * Sets content_length
     *
     * @param int $content_length content_length
     *
     * @return $this
     */
    public function setContentLength($content_length)
    {
        $this->container['content_length'] = $content_length;

        return $this;
    }

    /**
     * Gets content_location
     *
     * @return string
     */
    public function getContentLocation()
    {
        return $this->container['content_location'];
    }

    /**
     * Sets content_location
     *
     * @param string $content_location content_location
     *
     * @return $this
     */
    public function setContentLocation($content_location)
    {
        $this->container['content_location'] = $content_location;

        return $this;
    }

    /**
     * Gets content_md5
     *
     * @return string
     */
    public function getContentMd5()
    {
        return $this->container['content_md5'];
    }

    /**
     * Sets content_md5
     *
     * @param string $content_md5 content_md5
     *
     * @return $this
     */
    public function setContentMd5($content_md5)
    {

        if (!is_null($content_md5) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $content_md5))) {
            throw new \InvalidArgumentException("invalid value for $content_md5 when calling HttpContentHeaders., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['content_md5'] = $content_md5;

        return $this;
    }

    /**
     * Gets content_range
     *
     * @return \Swagger\Client\Model\ContentRangeHeaderValue
     */
    public function getContentRange()
    {
        return $this->container['content_range'];
    }

    /**
     * Sets content_range
     *
     * @param \Swagger\Client\Model\ContentRangeHeaderValue $content_range content_range
     *
     * @return $this
     */
    public function setContentRange($content_range)
    {
        $this->container['content_range'] = $content_range;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return \Swagger\Client\Model\MediaTypeHeaderValue
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param \Swagger\Client\Model\MediaTypeHeaderValue $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime $expires expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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


