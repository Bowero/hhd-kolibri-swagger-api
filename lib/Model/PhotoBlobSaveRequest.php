<?php
/**
 * PhotoBlobSaveRequest
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
 * PhotoBlobSaveRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhotoBlobSaveRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhotoBlobSaveRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent_id' => 'string',
        'file_data_id' => 'string',
        'file_extension' => 'string',
        'file_name' => 'string',
        'file_size' => 'int',
        'height' => 'int',
        'width' => 'int',
        'md5_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent_id' => 'guid',
        'file_data_id' => 'guid',
        'file_extension' => null,
        'file_name' => null,
        'file_size' => 'int64',
        'height' => 'int32',
        'width' => 'int32',
        'md5_hash' => null
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
        'parent_id' => 'parentId',
        'file_data_id' => 'fileDataId',
        'file_extension' => 'fileExtension',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'height' => 'height',
        'width' => 'width',
        'md5_hash' => 'md5Hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent_id' => 'setParentId',
        'file_data_id' => 'setFileDataId',
        'file_extension' => 'setFileExtension',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'md5_hash' => 'setMd5Hash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent_id' => 'getParentId',
        'file_data_id' => 'getFileDataId',
        'file_extension' => 'getFileExtension',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'md5_hash' => 'getMd5Hash'
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['file_data_id'] = isset($data['file_data_id']) ? $data['file_data_id'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['md5_hash'] = isset($data['md5_hash']) ? $data['md5_hash'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ((mb_strlen($this->container['parent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'parent_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_data_id'] === null) {
            $invalidProperties[] = "'file_data_id' can't be null";
        }
        if ((mb_strlen($this->container['file_data_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_data_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_extension'] === null) {
            $invalidProperties[] = "'file_extension' can't be null";
        }
        if ((mb_strlen($this->container['file_extension']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ((mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
        }
        if ($this->container['md5_hash'] === null) {
            $invalidProperties[] = "'md5_hash' can't be null";
        }
        if ((mb_strlen($this->container['md5_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'md5_hash', the character length must be bigger than or equal to 1.";
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
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id ParentId of Entity (VenumCompany, Employee, Contact Person, Contact Company) this photoblob (passport photo/logo) item belongs to.
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {

        if ((mb_strlen($parent_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $parent_id when calling PhotoBlobSaveRequest., must be bigger than or equal to 1.');
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets file_data_id
     *
     * @return string
     */
    public function getFileDataId()
    {
        return $this->container['file_data_id'];
    }

    /**
     * Sets file_data_id
     *
     * @param string $file_data_id file_data_id
     *
     * @return $this
     */
    public function setFileDataId($file_data_id)
    {

        if ((mb_strlen($file_data_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_data_id when calling PhotoBlobSaveRequest., must be bigger than or equal to 1.');
        }

        $this->container['file_data_id'] = $file_data_id;

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

        if ((mb_strlen($file_extension) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling PhotoBlobSaveRequest., must be bigger than or equal to 1.');
        }

        $this->container['file_extension'] = $file_extension;

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

        if ((mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling PhotoBlobSaveRequest., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
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
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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

        if ((mb_strlen($md5_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $md5_hash when calling PhotoBlobSaveRequest., must be bigger than or equal to 1.');
        }

        $this->container['md5_hash'] = $md5_hash;

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


