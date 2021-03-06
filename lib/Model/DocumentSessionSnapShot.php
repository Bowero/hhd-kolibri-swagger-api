<?php
/**
 * DocumentSessionSnapShot
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
 * DocumentSessionSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentSessionSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentSessionSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'linked_applicants' => '\Swagger\Client\Model\LinkedRelation[]',
        'linked_assignment' => '\Swagger\Client\Model\LinkedAssignment',
        'linked_cadastres' => '\Swagger\Client\Model\LinkedCadastre[]',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_document_template' => '\Swagger\Client\Model\LinkedDocumentTemplate',
        'linked_employee' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_notary' => '\Swagger\Client\Model\LinkedRelation',
        'linked_property_managers' => '\Swagger\Client\Model\LinkedRelation[]',
        'linked_vendors' => '\Swagger\Client\Model\LinkedRelation[]',
        'name' => 'string',
        'real_estate_agency_id' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'linked_applicants' => null,
        'linked_assignment' => null,
        'linked_cadastres' => null,
        'linked_created_by' => null,
        'linked_document_template' => null,
        'linked_employee' => null,
        'linked_modified_by' => null,
        'linked_notary' => null,
        'linked_property_managers' => null,
        'linked_vendors' => null,
        'name' => null,
        'real_estate_agency_id' => 'guid',
        'url' => null
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
        'is_active' => 'isActive',
        'linked_applicants' => 'linkedApplicants',
        'linked_assignment' => 'linkedAssignment',
        'linked_cadastres' => 'linkedCadastres',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_document_template' => 'linkedDocumentTemplate',
        'linked_employee' => 'linkedEmployee',
        'linked_modified_by' => 'linkedModifiedBy',
        'linked_notary' => 'linkedNotary',
        'linked_property_managers' => 'linkedPropertyManagers',
        'linked_vendors' => 'linkedVendors',
        'name' => 'name',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_cadastres' => 'setLinkedCadastres',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_document_template' => 'setLinkedDocumentTemplate',
        'linked_employee' => 'setLinkedEmployee',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'linked_notary' => 'setLinkedNotary',
        'linked_property_managers' => 'setLinkedPropertyManagers',
        'linked_vendors' => 'setLinkedVendors',
        'name' => 'setName',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_cadastres' => 'getLinkedCadastres',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_document_template' => 'getLinkedDocumentTemplate',
        'linked_employee' => 'getLinkedEmployee',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'linked_notary' => 'getLinkedNotary',
        'linked_property_managers' => 'getLinkedPropertyManagers',
        'linked_vendors' => 'getLinkedVendors',
        'name' => 'getName',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'url' => 'getUrl'
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
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['linked_applicants'] = isset($data['linked_applicants']) ? $data['linked_applicants'] : null;
        $this->container['linked_assignment'] = isset($data['linked_assignment']) ? $data['linked_assignment'] : null;
        $this->container['linked_cadastres'] = isset($data['linked_cadastres']) ? $data['linked_cadastres'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_document_template'] = isset($data['linked_document_template']) ? $data['linked_document_template'] : null;
        $this->container['linked_employee'] = isset($data['linked_employee']) ? $data['linked_employee'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
        $this->container['linked_notary'] = isset($data['linked_notary']) ? $data['linked_notary'] : null;
        $this->container['linked_property_managers'] = isset($data['linked_property_managers']) ? $data['linked_property_managers'] : null;
        $this->container['linked_vendors'] = isset($data['linked_vendors']) ? $data['linked_vendors'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['real_estate_agency_id'] = isset($data['real_estate_agency_id']) ? $data['real_estate_agency_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets linked_applicants
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedApplicants()
    {
        return $this->container['linked_applicants'];
    }

    /**
     * Sets linked_applicants
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_applicants linked_applicants
     *
     * @return $this
     */
    public function setLinkedApplicants($linked_applicants)
    {
        $this->container['linked_applicants'] = $linked_applicants;

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
     * Gets linked_cadastres
     *
     * @return \Swagger\Client\Model\LinkedCadastre[]
     */
    public function getLinkedCadastres()
    {
        return $this->container['linked_cadastres'];
    }

    /**
     * Sets linked_cadastres
     *
     * @param \Swagger\Client\Model\LinkedCadastre[] $linked_cadastres linked_cadastres
     *
     * @return $this
     */
    public function setLinkedCadastres($linked_cadastres)
    {
        $this->container['linked_cadastres'] = $linked_cadastres;

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
     * Gets linked_document_template
     *
     * @return \Swagger\Client\Model\LinkedDocumentTemplate
     */
    public function getLinkedDocumentTemplate()
    {
        return $this->container['linked_document_template'];
    }

    /**
     * Sets linked_document_template
     *
     * @param \Swagger\Client\Model\LinkedDocumentTemplate $linked_document_template linked_document_template
     *
     * @return $this
     */
    public function setLinkedDocumentTemplate($linked_document_template)
    {
        $this->container['linked_document_template'] = $linked_document_template;

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
     * Gets linked_notary
     *
     * @return \Swagger\Client\Model\LinkedRelation
     */
    public function getLinkedNotary()
    {
        return $this->container['linked_notary'];
    }

    /**
     * Sets linked_notary
     *
     * @param \Swagger\Client\Model\LinkedRelation $linked_notary linked_notary
     *
     * @return $this
     */
    public function setLinkedNotary($linked_notary)
    {
        $this->container['linked_notary'] = $linked_notary;

        return $this;
    }

    /**
     * Gets linked_property_managers
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedPropertyManagers()
    {
        return $this->container['linked_property_managers'];
    }

    /**
     * Sets linked_property_managers
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_property_managers linked_property_managers
     *
     * @return $this
     */
    public function setLinkedPropertyManagers($linked_property_managers)
    {
        $this->container['linked_property_managers'] = $linked_property_managers;

        return $this;
    }

    /**
     * Gets linked_vendors
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedVendors()
    {
        return $this->container['linked_vendors'];
    }

    /**
     * Sets linked_vendors
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_vendors linked_vendors
     *
     * @return $this
     */
    public function setLinkedVendors($linked_vendors)
    {
        $this->container['linked_vendors'] = $linked_vendors;

        return $this;
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


