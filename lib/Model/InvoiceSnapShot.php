<?php
/**
 * InvoiceSnapShot
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
 * InvoiceSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'real_estate_agency_id' => 'string',
        'created_by_id' => 'string',
        'is_active' => 'bool',
        'display_name' => 'string',
        'purpose' => 'string',
        'invoice_total_amount' => 'float',
        'status' => '\Swagger\Client\Model\InvoiceStatus',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'due_date' => '\DateTime',
        'invoice_date' => '\DateTime',
        'linked_assignment' => '\Swagger\Client\Model\LinkedAssignment',
        'linked_employee' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_relations' => '\Swagger\Client\Model\LinkedRelation[]',
        'currency' => 'string',
        'is_overdue' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'real_estate_agency_id' => 'guid',
        'created_by_id' => 'guid',
        'is_active' => null,
        'display_name' => null,
        'purpose' => null,
        'invoice_total_amount' => 'decimal',
        'status' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'due_date' => 'date-time',
        'invoice_date' => 'date-time',
        'linked_assignment' => null,
        'linked_employee' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'linked_relations' => null,
        'currency' => null,
        'is_overdue' => null
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
        'real_estate_agency_id' => 'realEstateAgencyId',
        'created_by_id' => 'createdById',
        'is_active' => 'isActive',
        'display_name' => 'displayName',
        'purpose' => 'purpose',
        'invoice_total_amount' => 'invoiceTotalAmount',
        'status' => 'status',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'due_date' => 'dueDate',
        'invoice_date' => 'invoiceDate',
        'linked_assignment' => 'linkedAssignment',
        'linked_employee' => 'linkedEmployee',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_relations' => 'linkedRelations',
        'currency' => 'currency',
        'is_overdue' => 'isOverdue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'created_by_id' => 'setCreatedById',
        'is_active' => 'setIsActive',
        'display_name' => 'setDisplayName',
        'purpose' => 'setPurpose',
        'invoice_total_amount' => 'setInvoiceTotalAmount',
        'status' => 'setStatus',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'due_date' => 'setDueDate',
        'invoice_date' => 'setInvoiceDate',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_employee' => 'setLinkedEmployee',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_relations' => 'setLinkedRelations',
        'currency' => 'setCurrency',
        'is_overdue' => 'setIsOverdue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'created_by_id' => 'getCreatedById',
        'is_active' => 'getIsActive',
        'display_name' => 'getDisplayName',
        'purpose' => 'getPurpose',
        'invoice_total_amount' => 'getInvoiceTotalAmount',
        'status' => 'getStatus',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'due_date' => 'getDueDate',
        'invoice_date' => 'getInvoiceDate',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_employee' => 'getLinkedEmployee',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_relations' => 'getLinkedRelations',
        'currency' => 'getCurrency',
        'is_overdue' => 'getIsOverdue'
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

        $this->container['real_estate_agency_id'] = isset($data['real_estate_agency_id']) ? $data['real_estate_agency_id'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['invoice_total_amount'] = isset($data['invoice_total_amount']) ? $data['invoice_total_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date_time_created'] = isset($data['date_time_created']) ? $data['date_time_created'] : null;
        $this->container['date_time_modified'] = isset($data['date_time_modified']) ? $data['date_time_modified'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['linked_assignment'] = isset($data['linked_assignment']) ? $data['linked_assignment'] : null;
        $this->container['linked_employee'] = isset($data['linked_employee']) ? $data['linked_employee'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
        $this->container['linked_relations'] = isset($data['linked_relations']) ? $data['linked_relations'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['is_overdue'] = isset($data['is_overdue']) ? $data['is_overdue'] : null;
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
     * Gets created_by_id
     *
     * @return string
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param string $created_by_id created_by_id
     *
     * @return $this
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose purpose
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets invoice_total_amount
     *
     * @return float
     */
    public function getInvoiceTotalAmount()
    {
        return $this->container['invoice_total_amount'];
    }

    /**
     * Sets invoice_total_amount
     *
     * @param float $invoice_total_amount invoice_total_amount
     *
     * @return $this
     */
    public function setInvoiceTotalAmount($invoice_total_amount)
    {
        $this->container['invoice_total_amount'] = $invoice_total_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\InvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\InvoiceStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
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
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets linked_assignment
     *
     * @return \Swagger\Client\Model\LinkedAssignment
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Swagger\Client\Model\LinkedAssignment $linked_assignment linked_assignment
     *
     * @return $this
     */
    public function setLinkedAssignment($linked_assignment)
    {
        $this->container['linked_assignment'] = $linked_assignment;

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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets is_overdue
     *
     * @return bool
     */
    public function getIsOverdue()
    {
        return $this->container['is_overdue'];
    }

    /**
     * Sets is_overdue
     *
     * @param bool $is_overdue is_overdue
     *
     * @return $this
     */
    public function setIsOverdue($is_overdue)
    {
        $this->container['is_overdue'] = $is_overdue;

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


