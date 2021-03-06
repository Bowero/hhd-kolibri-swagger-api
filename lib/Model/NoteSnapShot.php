<?php
/**
 * NoteSnapShot
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
 * NoteSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'description' => 'string',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee',
        'parent_id' => 'string',
        'real_estate_agency_id' => 'string',
        'is_important' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'description' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'parent_id' => 'guid',
        'real_estate_agency_id' => 'guid',
        'is_important' => null
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
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'description' => 'description',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'parent_id' => 'parentId',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'is_important' => 'isImportant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'description' => 'setDescription',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'parent_id' => 'setParentId',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'is_important' => 'setIsImportant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'description' => 'getDescription',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'parent_id' => 'getParentId',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'is_important' => 'getIsImportant'
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

        $this->container['date_time_created'] = isset($data['date_time_created']) ? $data['date_time_created'] : null;
        $this->container['date_time_modified'] = isset($data['date_time_modified']) ? $data['date_time_modified'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['real_estate_agency_id'] = isset($data['real_estate_agency_id']) ? $data['real_estate_agency_id'] : null;
        $this->container['is_important'] = isset($data['is_important']) ? $data['is_important'] : null;
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
     * Gets date_time_created
     *
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime $date_time_created date_time_created
     *
     * @return $this
     */
    public function setDateTimeCreated($date_time_created)
    {
        $this->container['date_time_created'] = $date_time_created;

        return $this;
    }

    /**
     * Gets date_time_modified
     *
     * @return \DateTime
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime $date_time_modified date_time_modified
     *
     * @return $this
     */
    public function setDateTimeModified($date_time_modified)
    {
        $this->container['date_time_modified'] = $date_time_modified;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets linked_created_by
     *
     * @return \Swagger\Client\Model\LinkedEmployee
     */
    public function getLinkedCreatedBy()
    {
        return $this->container['linked_created_by'];
    }

    /**
     * Sets linked_created_by
     *
     * @param \Swagger\Client\Model\LinkedEmployee $linked_created_by linked_created_by
     *
     * @return $this
     */
    public function setLinkedCreatedBy($linked_created_by)
    {
        $this->container['linked_created_by'] = $linked_created_by;

        return $this;
    }

    /**
     * Gets linked_modified_by
     *
     * @return \Swagger\Client\Model\LinkedEmployee
     */
    public function getLinkedModifiedBy()
    {
        return $this->container['linked_modified_by'];
    }

    /**
     * Sets linked_modified_by
     *
     * @param \Swagger\Client\Model\LinkedEmployee $linked_modified_by linked_modified_by
     *
     * @return $this
     */
    public function setLinkedModifiedBy($linked_modified_by)
    {
        $this->container['linked_modified_by'] = $linked_modified_by;

        return $this;
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
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets real_estate_agency_id
     *
     * @return string
     */
    public function getRealEstateAgencyId()
    {
        return $this->container['real_estate_agency_id'];
    }

    /**
     * Sets real_estate_agency_id
     *
     * @param string $real_estate_agency_id real_estate_agency_id
     *
     * @return $this
     */
    public function setRealEstateAgencyId($real_estate_agency_id)
    {
        $this->container['real_estate_agency_id'] = $real_estate_agency_id;

        return $this;
    }

    /**
     * Gets is_important
     *
     * @return bool
     */
    public function getIsImportant()
    {
        return $this->container['is_important'];
    }

    /**
     * Sets is_important
     *
     * @param bool $is_important is_important
     *
     * @return $this
     */
    public function setIsImportant($is_important)
    {
        $this->container['is_important'] = $is_important;

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


