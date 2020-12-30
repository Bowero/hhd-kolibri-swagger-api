<?php
/**
 * TaskSnapShot
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
 * TaskSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_id' => 'string',
        'completed_percentage' => 'double',
        'end_date' => '\DateTime',
        'expiration_moment' => '\Swagger\Client\Model\ExpirationMoment',
        'is_active' => 'bool',
        'linked_assignments' => '\Swagger\Client\Model\LinkedAssignment[]',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_employee' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_relations' => '\Swagger\Client\Model\LinkedRelation[]',
        'priority' => '\Swagger\Client\Model\Priority',
        'real_estate_agency_id' => 'string',
        'start_date' => '\DateTime',
        'status' => '\Swagger\Client\Model\TaskStatus',
        'subject' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_id' => 'guid',
        'completed_percentage' => 'double',
        'end_date' => 'date-time',
        'expiration_moment' => null,
        'is_active' => null,
        'linked_assignments' => null,
        'linked_created_by' => null,
        'linked_employee' => null,
        'linked_modified_by' => null,
        'linked_relations' => null,
        'priority' => null,
        'real_estate_agency_id' => 'guid',
        'start_date' => 'date-time',
        'status' => null,
        'subject' => null
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
        'category_id' => 'categoryId',
        'completed_percentage' => 'completedPercentage',
        'end_date' => 'endDate',
        'expiration_moment' => 'expirationMoment',
        'is_active' => 'isActive',
        'linked_assignments' => 'linkedAssignments',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_employee' => 'linkedEmployee',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_relations' => 'linkedRelations',
        'priority' => 'priority',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'start_date' => 'startDate',
        'status' => 'status',
        'subject' => 'subject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'completed_percentage' => 'setCompletedPercentage',
        'end_date' => 'setEndDate',
        'expiration_moment' => 'setExpirationMoment',
        'is_active' => 'setIsActive',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_employee' => 'setLinkedEmployee',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_relations' => 'setLinkedRelations',
        'priority' => 'setPriority',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'subject' => 'setSubject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'completed_percentage' => 'getCompletedPercentage',
        'end_date' => 'getEndDate',
        'expiration_moment' => 'getExpirationMoment',
        'is_active' => 'getIsActive',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_employee' => 'getLinkedEmployee',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_relations' => 'getLinkedRelations',
        'priority' => 'getPriority',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'subject' => 'getSubject'
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

        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['completed_percentage'] = isset($data['completed_percentage']) ? $data['completed_percentage'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['expiration_moment'] = isset($data['expiration_moment']) ? $data['expiration_moment'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['linked_assignments'] = isset($data['linked_assignments']) ? $data['linked_assignments'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_employee'] = isset($data['linked_employee']) ? $data['linked_employee'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
        $this->container['linked_relations'] = isset($data['linked_relations']) ? $data['linked_relations'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['real_estate_agency_id'] = isset($data['real_estate_agency_id']) ? $data['real_estate_agency_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets completed_percentage
     *
     * @return double
     */
    public function getCompletedPercentage()
    {
        return $this->container['completed_percentage'];
    }

    /**
     * Sets completed_percentage
     *
     * @param double $completed_percentage completed_percentage
     *
     * @return $this
     */
    public function setCompletedPercentage($completed_percentage)
    {
        $this->container['completed_percentage'] = $completed_percentage;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets expiration_moment
     *
     * @return \Swagger\Client\Model\ExpirationMoment
     */
    public function getExpirationMoment()
    {
        return $this->container['expiration_moment'];
    }

    /**
     * Sets expiration_moment
     *
     * @param \Swagger\Client\Model\ExpirationMoment $expiration_moment expiration_moment
     *
     * @return $this
     */
    public function setExpirationMoment($expiration_moment)
    {
        $this->container['expiration_moment'] = $expiration_moment;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets linked_assignments
     *
     * @return \Swagger\Client\Model\LinkedAssignment[]
     */
    public function getLinkedAssignments()
    {
        return $this->container['linked_assignments'];
    }

    /**
     * Sets linked_assignments
     *
     * @param \Swagger\Client\Model\LinkedAssignment[] $linked_assignments linked_assignments
     *
     * @return $this
     */
    public function setLinkedAssignments($linked_assignments)
    {
        $this->container['linked_assignments'] = $linked_assignments;

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
     * Gets linked_employee
     *
     * @return \Swagger\Client\Model\LinkedEmployee
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Swagger\Client\Model\LinkedEmployee $linked_employee linked_employee
     *
     * @return $this
     */
    public function setLinkedEmployee($linked_employee)
    {
        $this->container['linked_employee'] = $linked_employee;

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
     * Gets linked_relations
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_relations linked_relations
     *
     * @return $this
     */
    public function setLinkedRelations($linked_relations)
    {
        $this->container['linked_relations'] = $linked_relations;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Swagger\Client\Model\Priority
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Swagger\Client\Model\Priority $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\TaskStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\TaskStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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

