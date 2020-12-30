<?php
/**
 * BaseMergeRequest
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
 * BaseMergeRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BaseMergeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BaseMergeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'culture' => 'string',
        'company_ids' => 'string[]',
        'office_ids' => 'string[]',
        'employee_ids' => 'string[]',
        'tenant_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'purchaser_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'notary_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'lessor_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'vendor_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'website_visitor_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'house_hunter_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'relation_ids' => '\Swagger\Client\Model\MergeRelation[]',
        'object_assignment_ids' => 'string[]',
        'agenda_item_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'culture' => null,
        'company_ids' => 'guid',
        'office_ids' => 'guid',
        'employee_ids' => 'guid',
        'tenant_ids' => null,
        'purchaser_ids' => null,
        'notary_ids' => null,
        'lessor_ids' => null,
        'vendor_ids' => null,
        'website_visitor_ids' => null,
        'house_hunter_ids' => null,
        'relation_ids' => null,
        'object_assignment_ids' => 'guid',
        'agenda_item_ids' => 'guid'
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
        'culture' => 'culture',
        'company_ids' => 'companyIds',
        'office_ids' => 'officeIds',
        'employee_ids' => 'employeeIds',
        'tenant_ids' => 'tenantIds',
        'purchaser_ids' => 'purchaserIds',
        'notary_ids' => 'notaryIds',
        'lessor_ids' => 'lessorIds',
        'vendor_ids' => 'vendorIds',
        'website_visitor_ids' => 'websiteVisitorIds',
        'house_hunter_ids' => 'houseHunterIds',
        'relation_ids' => 'relationIds',
        'object_assignment_ids' => 'objectAssignmentIds',
        'agenda_item_ids' => 'agendaItemIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'culture' => 'setCulture',
        'company_ids' => 'setCompanyIds',
        'office_ids' => 'setOfficeIds',
        'employee_ids' => 'setEmployeeIds',
        'tenant_ids' => 'setTenantIds',
        'purchaser_ids' => 'setPurchaserIds',
        'notary_ids' => 'setNotaryIds',
        'lessor_ids' => 'setLessorIds',
        'vendor_ids' => 'setVendorIds',
        'website_visitor_ids' => 'setWebsiteVisitorIds',
        'house_hunter_ids' => 'setHouseHunterIds',
        'relation_ids' => 'setRelationIds',
        'object_assignment_ids' => 'setObjectAssignmentIds',
        'agenda_item_ids' => 'setAgendaItemIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'culture' => 'getCulture',
        'company_ids' => 'getCompanyIds',
        'office_ids' => 'getOfficeIds',
        'employee_ids' => 'getEmployeeIds',
        'tenant_ids' => 'getTenantIds',
        'purchaser_ids' => 'getPurchaserIds',
        'notary_ids' => 'getNotaryIds',
        'lessor_ids' => 'getLessorIds',
        'vendor_ids' => 'getVendorIds',
        'website_visitor_ids' => 'getWebsiteVisitorIds',
        'house_hunter_ids' => 'getHouseHunterIds',
        'relation_ids' => 'getRelationIds',
        'object_assignment_ids' => 'getObjectAssignmentIds',
        'agenda_item_ids' => 'getAgendaItemIds'
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
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['company_ids'] = isset($data['company_ids']) ? $data['company_ids'] : null;
        $this->container['office_ids'] = isset($data['office_ids']) ? $data['office_ids'] : null;
        $this->container['employee_ids'] = isset($data['employee_ids']) ? $data['employee_ids'] : null;
        $this->container['tenant_ids'] = isset($data['tenant_ids']) ? $data['tenant_ids'] : null;
        $this->container['purchaser_ids'] = isset($data['purchaser_ids']) ? $data['purchaser_ids'] : null;
        $this->container['notary_ids'] = isset($data['notary_ids']) ? $data['notary_ids'] : null;
        $this->container['lessor_ids'] = isset($data['lessor_ids']) ? $data['lessor_ids'] : null;
        $this->container['vendor_ids'] = isset($data['vendor_ids']) ? $data['vendor_ids'] : null;
        $this->container['website_visitor_ids'] = isset($data['website_visitor_ids']) ? $data['website_visitor_ids'] : null;
        $this->container['house_hunter_ids'] = isset($data['house_hunter_ids']) ? $data['house_hunter_ids'] : null;
        $this->container['relation_ids'] = isset($data['relation_ids']) ? $data['relation_ids'] : null;
        $this->container['object_assignment_ids'] = isset($data['object_assignment_ids']) ? $data['object_assignment_ids'] : null;
        $this->container['agenda_item_ids'] = isset($data['agenda_item_ids']) ? $data['agenda_item_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
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
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture The culture name in the format languagecode2-country/regioncode2.
     *
     * @return $this
     */
    public function setCulture($culture)
    {
        if (!is_null($culture) && (mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling BaseMergeRequest., must be smaller than or equal to 5.');
        }
        if (!is_null($culture) && (mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling BaseMergeRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets company_ids
     *
     * @return string[]
     */
    public function getCompanyIds()
    {
        return $this->container['company_ids'];
    }

    /**
     * Sets company_ids
     *
     * @param string[] $company_ids company_ids
     *
     * @return $this
     */
    public function setCompanyIds($company_ids)
    {
        $this->container['company_ids'] = $company_ids;

        return $this;
    }

    /**
     * Gets office_ids
     *
     * @return string[]
     */
    public function getOfficeIds()
    {
        return $this->container['office_ids'];
    }

    /**
     * Sets office_ids
     *
     * @param string[] $office_ids office_ids
     *
     * @return $this
     */
    public function setOfficeIds($office_ids)
    {
        $this->container['office_ids'] = $office_ids;

        return $this;
    }

    /**
     * Gets employee_ids
     *
     * @return string[]
     */
    public function getEmployeeIds()
    {
        return $this->container['employee_ids'];
    }

    /**
     * Sets employee_ids
     *
     * @param string[] $employee_ids employee_ids
     *
     * @return $this
     */
    public function setEmployeeIds($employee_ids)
    {
        $this->container['employee_ids'] = $employee_ids;

        return $this;
    }

    /**
     * Gets tenant_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getTenantIds()
    {
        return $this->container['tenant_ids'];
    }

    /**
     * Sets tenant_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $tenant_ids tenant_ids
     *
     * @return $this
     */
    public function setTenantIds($tenant_ids)
    {
        $this->container['tenant_ids'] = $tenant_ids;

        return $this;
    }

    /**
     * Gets purchaser_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getPurchaserIds()
    {
        return $this->container['purchaser_ids'];
    }

    /**
     * Sets purchaser_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $purchaser_ids purchaser_ids
     *
     * @return $this
     */
    public function setPurchaserIds($purchaser_ids)
    {
        $this->container['purchaser_ids'] = $purchaser_ids;

        return $this;
    }

    /**
     * Gets notary_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getNotaryIds()
    {
        return $this->container['notary_ids'];
    }

    /**
     * Sets notary_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $notary_ids notary_ids
     *
     * @return $this
     */
    public function setNotaryIds($notary_ids)
    {
        $this->container['notary_ids'] = $notary_ids;

        return $this;
    }

    /**
     * Gets lessor_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getLessorIds()
    {
        return $this->container['lessor_ids'];
    }

    /**
     * Sets lessor_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $lessor_ids lessor_ids
     *
     * @return $this
     */
    public function setLessorIds($lessor_ids)
    {
        $this->container['lessor_ids'] = $lessor_ids;

        return $this;
    }

    /**
     * Gets vendor_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getVendorIds()
    {
        return $this->container['vendor_ids'];
    }

    /**
     * Sets vendor_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $vendor_ids vendor_ids
     *
     * @return $this
     */
    public function setVendorIds($vendor_ids)
    {
        $this->container['vendor_ids'] = $vendor_ids;

        return $this;
    }

    /**
     * Gets website_visitor_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getWebsiteVisitorIds()
    {
        return $this->container['website_visitor_ids'];
    }

    /**
     * Sets website_visitor_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $website_visitor_ids website_visitor_ids
     *
     * @return $this
     */
    public function setWebsiteVisitorIds($website_visitor_ids)
    {
        $this->container['website_visitor_ids'] = $website_visitor_ids;

        return $this;
    }

    /**
     * Gets house_hunter_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getHouseHunterIds()
    {
        return $this->container['house_hunter_ids'];
    }

    /**
     * Sets house_hunter_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $house_hunter_ids house_hunter_ids
     *
     * @return $this
     */
    public function setHouseHunterIds($house_hunter_ids)
    {
        $this->container['house_hunter_ids'] = $house_hunter_ids;

        return $this;
    }

    /**
     * Gets relation_ids
     *
     * @return \Swagger\Client\Model\MergeRelation[]
     */
    public function getRelationIds()
    {
        return $this->container['relation_ids'];
    }

    /**
     * Sets relation_ids
     *
     * @param \Swagger\Client\Model\MergeRelation[] $relation_ids relation_ids
     *
     * @return $this
     */
    public function setRelationIds($relation_ids)
    {
        $this->container['relation_ids'] = $relation_ids;

        return $this;
    }

    /**
     * Gets object_assignment_ids
     *
     * @return string[]
     */
    public function getObjectAssignmentIds()
    {
        return $this->container['object_assignment_ids'];
    }

    /**
     * Sets object_assignment_ids
     *
     * @param string[] $object_assignment_ids object_assignment_ids
     *
     * @return $this
     */
    public function setObjectAssignmentIds($object_assignment_ids)
    {
        $this->container['object_assignment_ids'] = $object_assignment_ids;

        return $this;
    }

    /**
     * Gets agenda_item_ids
     *
     * @return string[]
     */
    public function getAgendaItemIds()
    {
        return $this->container['agenda_item_ids'];
    }

    /**
     * Sets agenda_item_ids
     *
     * @param string[] $agenda_item_ids agenda_item_ids
     *
     * @return $this
     */
    public function setAgendaItemIds($agenda_item_ids)
    {
        $this->container['agenda_item_ids'] = $agenda_item_ids;

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


