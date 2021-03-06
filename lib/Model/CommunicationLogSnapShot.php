<?php
/**
 * CommunicationLogSnapShot
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
 * CommunicationLogSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationLogSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationLogSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'type' => '\Swagger\Client\Model\CommunicationLogType',
        'direction' => '\Swagger\Client\Model\CommunicationLogDirection',
        'subject' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'senders_email_addresses' => 'string[]',
        'receivers_email_addresses' => 'string[]',
        'cc_email_addresses' => 'string[]',
        'bcc_email_addresses' => 'string[]',
        'linked_assignments' => '\Swagger\Client\Model\LinkedAssignment[]',
        'linked_relations' => '\Swagger\Client\Model\LinkedRelation[]',
        'linked_employees' => '\Swagger\Client\Model\LinkedEmployee[]',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'type' => null,
        'direction' => null,
        'subject' => null,
        'summary' => null,
        'description' => null,
        'senders_email_addresses' => null,
        'receivers_email_addresses' => null,
        'cc_email_addresses' => null,
        'bcc_email_addresses' => null,
        'linked_assignments' => null,
        'linked_relations' => null,
        'linked_employees' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null
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
        'date' => 'date',
        'type' => 'type',
        'direction' => 'direction',
        'subject' => 'subject',
        'summary' => 'summary',
        'description' => 'description',
        'senders_email_addresses' => 'sendersEmailAddresses',
        'receivers_email_addresses' => 'receiversEmailAddresses',
        'cc_email_addresses' => 'ccEmailAddresses',
        'bcc_email_addresses' => 'bccEmailAddresses',
        'linked_assignments' => 'linkedAssignments',
        'linked_relations' => 'linkedRelations',
        'linked_employees' => 'linkedEmployees',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'type' => 'setType',
        'direction' => 'setDirection',
        'subject' => 'setSubject',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'senders_email_addresses' => 'setSendersEmailAddresses',
        'receivers_email_addresses' => 'setReceiversEmailAddresses',
        'cc_email_addresses' => 'setCcEmailAddresses',
        'bcc_email_addresses' => 'setBccEmailAddresses',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_relations' => 'setLinkedRelations',
        'linked_employees' => 'setLinkedEmployees',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'type' => 'getType',
        'direction' => 'getDirection',
        'subject' => 'getSubject',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'senders_email_addresses' => 'getSendersEmailAddresses',
        'receivers_email_addresses' => 'getReceiversEmailAddresses',
        'cc_email_addresses' => 'getCcEmailAddresses',
        'bcc_email_addresses' => 'getBccEmailAddresses',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_relations' => 'getLinkedRelations',
        'linked_employees' => 'getLinkedEmployees',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy'
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

        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['senders_email_addresses'] = isset($data['senders_email_addresses']) ? $data['senders_email_addresses'] : null;
        $this->container['receivers_email_addresses'] = isset($data['receivers_email_addresses']) ? $data['receivers_email_addresses'] : null;
        $this->container['cc_email_addresses'] = isset($data['cc_email_addresses']) ? $data['cc_email_addresses'] : null;
        $this->container['bcc_email_addresses'] = isset($data['bcc_email_addresses']) ? $data['bcc_email_addresses'] : null;
        $this->container['linked_assignments'] = isset($data['linked_assignments']) ? $data['linked_assignments'] : null;
        $this->container['linked_relations'] = isset($data['linked_relations']) ? $data['linked_relations'] : null;
        $this->container['linked_employees'] = isset($data['linked_employees']) ? $data['linked_employees'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\CommunicationLogType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\CommunicationLogType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \Swagger\Client\Model\CommunicationLogDirection
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \Swagger\Client\Model\CommunicationLogDirection $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

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
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * Gets senders_email_addresses
     *
     * @return string[]
     */
    public function getSendersEmailAddresses()
    {
        return $this->container['senders_email_addresses'];
    }

    /**
     * Sets senders_email_addresses
     *
     * @param string[] $senders_email_addresses senders_email_addresses
     *
     * @return $this
     */
    public function setSendersEmailAddresses($senders_email_addresses)
    {
        $this->container['senders_email_addresses'] = $senders_email_addresses;

        return $this;
    }

    /**
     * Gets receivers_email_addresses
     *
     * @return string[]
     */
    public function getReceiversEmailAddresses()
    {
        return $this->container['receivers_email_addresses'];
    }

    /**
     * Sets receivers_email_addresses
     *
     * @param string[] $receivers_email_addresses receivers_email_addresses
     *
     * @return $this
     */
    public function setReceiversEmailAddresses($receivers_email_addresses)
    {
        $this->container['receivers_email_addresses'] = $receivers_email_addresses;

        return $this;
    }

    /**
     * Gets cc_email_addresses
     *
     * @return string[]
     */
    public function getCcEmailAddresses()
    {
        return $this->container['cc_email_addresses'];
    }

    /**
     * Sets cc_email_addresses
     *
     * @param string[] $cc_email_addresses cc_email_addresses
     *
     * @return $this
     */
    public function setCcEmailAddresses($cc_email_addresses)
    {
        $this->container['cc_email_addresses'] = $cc_email_addresses;

        return $this;
    }

    /**
     * Gets bcc_email_addresses
     *
     * @return string[]
     */
    public function getBccEmailAddresses()
    {
        return $this->container['bcc_email_addresses'];
    }

    /**
     * Sets bcc_email_addresses
     *
     * @param string[] $bcc_email_addresses bcc_email_addresses
     *
     * @return $this
     */
    public function setBccEmailAddresses($bcc_email_addresses)
    {
        $this->container['bcc_email_addresses'] = $bcc_email_addresses;

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
     * Gets linked_employees
     *
     * @return \Swagger\Client\Model\LinkedEmployee[]
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Swagger\Client\Model\LinkedEmployee[] $linked_employees linked_employees
     *
     * @return $this
     */
    public function setLinkedEmployees($linked_employees)
    {
        $this->container['linked_employees'] = $linked_employees;

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


