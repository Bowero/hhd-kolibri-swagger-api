<?php
/**
 * CadastreSnapShot
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
 * CadastreSnapShot Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CadastreSnapShot extends Entity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CadastreSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'display_name' => 'string',
        'is_active' => 'bool',
        'linked_assignment' => '\Swagger\Client\Model\LinkedAssignment',
        'linked_created_by' => '\Swagger\Client\Model\LinkedEmployee',
        'linked_modified_by' => '\Swagger\Client\Model\LinkedEmployee',
        'locality' => 'string',
        'map_document_url' => 'string',
        'message_document_url' => 'string',
        'postal_code' => 'string',
        'street_name_and_number' => 'string',
        'real_estate_agency_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'display_name' => null,
        'is_active' => null,
        'linked_assignment' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'locality' => null,
        'map_document_url' => null,
        'message_document_url' => null,
        'postal_code' => null,
        'street_name_and_number' => null,
        'real_estate_agency_id' => 'guid'
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
        'country_code' => 'countryCode',
        'display_name' => 'displayName',
        'is_active' => 'isActive',
        'linked_assignment' => 'linkedAssignment',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'locality' => 'locality',
        'map_document_url' => 'mapDocumentUrl',
        'message_document_url' => 'messageDocumentUrl',
        'postal_code' => 'postalCode',
        'street_name_and_number' => 'streetNameAndNumber',
        'real_estate_agency_id' => 'realEstateAgencyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'display_name' => 'setDisplayName',
        'is_active' => 'setIsActive',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'locality' => 'setLocality',
        'map_document_url' => 'setMapDocumentUrl',
        'message_document_url' => 'setMessageDocumentUrl',
        'postal_code' => 'setPostalCode',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'real_estate_agency_id' => 'setRealEstateAgencyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'display_name' => 'getDisplayName',
        'is_active' => 'getIsActive',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'locality' => 'getLocality',
        'map_document_url' => 'getMapDocumentUrl',
        'message_document_url' => 'getMessageDocumentUrl',
        'postal_code' => 'getPostalCode',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'real_estate_agency_id' => 'getRealEstateAgencyId'
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

        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['linked_assignment'] = isset($data['linked_assignment']) ? $data['linked_assignment'] : null;
        $this->container['linked_created_by'] = isset($data['linked_created_by']) ? $data['linked_created_by'] : null;
        $this->container['linked_modified_by'] = isset($data['linked_modified_by']) ? $data['linked_modified_by'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['map_document_url'] = isset($data['map_document_url']) ? $data['map_document_url'] : null;
        $this->container['message_document_url'] = isset($data['message_document_url']) ? $data['message_document_url'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['street_name_and_number'] = isset($data['street_name_and_number']) ? $data['street_name_and_number'] : null;
        $this->container['real_estate_agency_id'] = isset($data['real_estate_agency_id']) ? $data['real_estate_agency_id'] : null;
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality locality
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets map_document_url
     *
     * @return string
     */
    public function getMapDocumentUrl()
    {
        return $this->container['map_document_url'];
    }

    /**
     * Sets map_document_url
     *
     * @param string $map_document_url map_document_url
     *
     * @return $this
     */
    public function setMapDocumentUrl($map_document_url)
    {
        $this->container['map_document_url'] = $map_document_url;

        return $this;
    }

    /**
     * Gets message_document_url
     *
     * @return string
     */
    public function getMessageDocumentUrl()
    {
        return $this->container['message_document_url'];
    }

    /**
     * Sets message_document_url
     *
     * @param string $message_document_url message_document_url
     *
     * @return $this
     */
    public function setMessageDocumentUrl($message_document_url)
    {
        $this->container['message_document_url'] = $message_document_url;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets street_name_and_number
     *
     * @return string
     */
    public function getStreetNameAndNumber()
    {
        return $this->container['street_name_and_number'];
    }

    /**
     * Sets street_name_and_number
     *
     * @param string $street_name_and_number street_name_and_number
     *
     * @return $this
     */
    public function setStreetNameAndNumber($street_name_and_number)
    {
        $this->container['street_name_and_number'] = $street_name_and_number;

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


