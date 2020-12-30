<?php
/**
 * CommunicationLogBlobsSearchRequest
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
 * CommunicationLogBlobsSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationLogBlobsSearchRequest extends SearchRequest 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationLogBlobsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_by' => 'object',
        'communication_log_id' => 'string',
        'communication_log_blob_id' => 'string',
        'term_fields' => '\Swagger\Client\Model\CommunicationLogBlobTermField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_by' => null,
        'communication_log_id' => 'guid',
        'communication_log_blob_id' => 'guid',
        'term_fields' => null
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
        'order_by' => 'orderBy',
        'communication_log_id' => 'communicationLogId',
        'communication_log_blob_id' => 'communicationLogBlobId',
        'term_fields' => 'termFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_by' => 'setOrderBy',
        'communication_log_id' => 'setCommunicationLogId',
        'communication_log_blob_id' => 'setCommunicationLogBlobId',
        'term_fields' => 'setTermFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_by' => 'getOrderBy',
        'communication_log_id' => 'getCommunicationLogId',
        'communication_log_blob_id' => 'getCommunicationLogBlobId',
        'term_fields' => 'getTermFields'
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

        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['communication_log_id'] = isset($data['communication_log_id']) ? $data['communication_log_id'] : null;
        $this->container['communication_log_blob_id'] = isset($data['communication_log_blob_id']) ? $data['communication_log_blob_id'] : null;
        $this->container['term_fields'] = isset($data['term_fields']) ? $data['term_fields'] : null;
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
     * Gets order_by
     *
     * @return object
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param object $order_by Order the results by the indicated communicationLogBlob field.
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
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
     * @param string $communication_log_id Search by a specific communicationLogId.
     *
     * @return $this
     */
    public function setCommunicationLogId($communication_log_id)
    {
        $this->container['communication_log_id'] = $communication_log_id;

        return $this;
    }

    /**
     * Gets communication_log_blob_id
     *
     * @return string
     */
    public function getCommunicationLogBlobId()
    {
        return $this->container['communication_log_blob_id'];
    }

    /**
     * Sets communication_log_blob_id
     *
     * @param string $communication_log_blob_id Search by a specific communicationLogBlob Id.
     *
     * @return $this
     */
    public function setCommunicationLogBlobId($communication_log_blob_id)
    {
        $this->container['communication_log_blob_id'] = $communication_log_blob_id;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Swagger\Client\Model\CommunicationLogBlobTermField[]
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Swagger\Client\Model\CommunicationLogBlobTermField[] $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
     *
     * @return $this
     */
    public function setTermFields($term_fields)
    {
        $this->container['term_fields'] = $term_fields;

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

