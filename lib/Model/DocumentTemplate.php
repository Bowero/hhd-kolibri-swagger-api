<?php
/**
 * DocumentTemplate
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
 * DocumentTemplate Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentTemplate extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_template_type' => '\Swagger\Client\Model\DocumentTemplateType',
        'form' => '\Swagger\Client\Model\Form',
        'name' => 'string',
        'needs_applicants' => 'bool',
        'needs_cadastre' => 'bool',
        'needs_list_of_goods' => 'bool',
        'needs_notary' => 'bool',
        'needs_object_assignment' => 'bool',
        'needs_property_managers' => 'bool',
        'needs_signatures' => 'bool',
        'needs_vendors' => 'bool',
        'supported_real_estate_groups' => '\Swagger\Client\Model\RealEstateGroup[]',
        'support_for_rent' => 'bool',
        'support_for_sale' => 'bool',
        'applicant_type' => '\Swagger\Client\Model\ApplicantType',
        'vendor_type' => '\Swagger\Client\Model\VendorType',
        'version_timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_template_type' => null,
        'form' => null,
        'name' => null,
        'needs_applicants' => null,
        'needs_cadastre' => null,
        'needs_list_of_goods' => null,
        'needs_notary' => null,
        'needs_object_assignment' => null,
        'needs_property_managers' => null,
        'needs_signatures' => null,
        'needs_vendors' => null,
        'supported_real_estate_groups' => null,
        'support_for_rent' => null,
        'support_for_sale' => null,
        'applicant_type' => null,
        'vendor_type' => null,
        'version_timestamp' => 'date-time'
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
        'document_template_type' => 'documentTemplateType',
        'form' => 'form',
        'name' => 'name',
        'needs_applicants' => 'needsApplicants',
        'needs_cadastre' => 'needsCadastre',
        'needs_list_of_goods' => 'needsListOfGoods',
        'needs_notary' => 'needsNotary',
        'needs_object_assignment' => 'needsObjectAssignment',
        'needs_property_managers' => 'needsPropertyManagers',
        'needs_signatures' => 'needsSignatures',
        'needs_vendors' => 'needsVendors',
        'supported_real_estate_groups' => 'supportedRealEstateGroups',
        'support_for_rent' => 'supportForRent',
        'support_for_sale' => 'supportForSale',
        'applicant_type' => 'applicantType',
        'vendor_type' => 'vendorType',
        'version_timestamp' => 'versionTimestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_template_type' => 'setDocumentTemplateType',
        'form' => 'setForm',
        'name' => 'setName',
        'needs_applicants' => 'setNeedsApplicants',
        'needs_cadastre' => 'setNeedsCadastre',
        'needs_list_of_goods' => 'setNeedsListOfGoods',
        'needs_notary' => 'setNeedsNotary',
        'needs_object_assignment' => 'setNeedsObjectAssignment',
        'needs_property_managers' => 'setNeedsPropertyManagers',
        'needs_signatures' => 'setNeedsSignatures',
        'needs_vendors' => 'setNeedsVendors',
        'supported_real_estate_groups' => 'setSupportedRealEstateGroups',
        'support_for_rent' => 'setSupportForRent',
        'support_for_sale' => 'setSupportForSale',
        'applicant_type' => 'setApplicantType',
        'vendor_type' => 'setVendorType',
        'version_timestamp' => 'setVersionTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_template_type' => 'getDocumentTemplateType',
        'form' => 'getForm',
        'name' => 'getName',
        'needs_applicants' => 'getNeedsApplicants',
        'needs_cadastre' => 'getNeedsCadastre',
        'needs_list_of_goods' => 'getNeedsListOfGoods',
        'needs_notary' => 'getNeedsNotary',
        'needs_object_assignment' => 'getNeedsObjectAssignment',
        'needs_property_managers' => 'getNeedsPropertyManagers',
        'needs_signatures' => 'getNeedsSignatures',
        'needs_vendors' => 'getNeedsVendors',
        'supported_real_estate_groups' => 'getSupportedRealEstateGroups',
        'support_for_rent' => 'getSupportForRent',
        'support_for_sale' => 'getSupportForSale',
        'applicant_type' => 'getApplicantType',
        'vendor_type' => 'getVendorType',
        'version_timestamp' => 'getVersionTimestamp'
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

        $this->container['document_template_type'] = isset($data['document_template_type']) ? $data['document_template_type'] : null;
        $this->container['form'] = isset($data['form']) ? $data['form'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['needs_applicants'] = isset($data['needs_applicants']) ? $data['needs_applicants'] : null;
        $this->container['needs_cadastre'] = isset($data['needs_cadastre']) ? $data['needs_cadastre'] : null;
        $this->container['needs_list_of_goods'] = isset($data['needs_list_of_goods']) ? $data['needs_list_of_goods'] : null;
        $this->container['needs_notary'] = isset($data['needs_notary']) ? $data['needs_notary'] : null;
        $this->container['needs_object_assignment'] = isset($data['needs_object_assignment']) ? $data['needs_object_assignment'] : null;
        $this->container['needs_property_managers'] = isset($data['needs_property_managers']) ? $data['needs_property_managers'] : null;
        $this->container['needs_signatures'] = isset($data['needs_signatures']) ? $data['needs_signatures'] : null;
        $this->container['needs_vendors'] = isset($data['needs_vendors']) ? $data['needs_vendors'] : null;
        $this->container['supported_real_estate_groups'] = isset($data['supported_real_estate_groups']) ? $data['supported_real_estate_groups'] : null;
        $this->container['support_for_rent'] = isset($data['support_for_rent']) ? $data['support_for_rent'] : null;
        $this->container['support_for_sale'] = isset($data['support_for_sale']) ? $data['support_for_sale'] : null;
        $this->container['applicant_type'] = isset($data['applicant_type']) ? $data['applicant_type'] : null;
        $this->container['vendor_type'] = isset($data['vendor_type']) ? $data['vendor_type'] : null;
        $this->container['version_timestamp'] = isset($data['version_timestamp']) ? $data['version_timestamp'] : null;
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
     * Gets document_template_type
     *
     * @return \Swagger\Client\Model\DocumentTemplateType
     */
    public function getDocumentTemplateType()
    {
        return $this->container['document_template_type'];
    }

    /**
     * Sets document_template_type
     *
     * @param \Swagger\Client\Model\DocumentTemplateType $document_template_type document_template_type
     *
     * @return $this
     */
    public function setDocumentTemplateType($document_template_type)
    {
        $this->container['document_template_type'] = $document_template_type;

        return $this;
    }

    /**
     * Gets form
     *
     * @return \Swagger\Client\Model\Form
     */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
     * Sets form
     *
     * @param \Swagger\Client\Model\Form $form form
     *
     * @return $this
     */
    public function setForm($form)
    {
        $this->container['form'] = $form;

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
     * Gets needs_applicants
     *
     * @return bool
     */
    public function getNeedsApplicants()
    {
        return $this->container['needs_applicants'];
    }

    /**
     * Sets needs_applicants
     *
     * @param bool $needs_applicants needs_applicants
     *
     * @return $this
     */
    public function setNeedsApplicants($needs_applicants)
    {
        $this->container['needs_applicants'] = $needs_applicants;

        return $this;
    }

    /**
     * Gets needs_cadastre
     *
     * @return bool
     */
    public function getNeedsCadastre()
    {
        return $this->container['needs_cadastre'];
    }

    /**
     * Sets needs_cadastre
     *
     * @param bool $needs_cadastre needs_cadastre
     *
     * @return $this
     */
    public function setNeedsCadastre($needs_cadastre)
    {
        $this->container['needs_cadastre'] = $needs_cadastre;

        return $this;
    }

    /**
     * Gets needs_list_of_goods
     *
     * @return bool
     */
    public function getNeedsListOfGoods()
    {
        return $this->container['needs_list_of_goods'];
    }

    /**
     * Sets needs_list_of_goods
     *
     * @param bool $needs_list_of_goods needs_list_of_goods
     *
     * @return $this
     */
    public function setNeedsListOfGoods($needs_list_of_goods)
    {
        $this->container['needs_list_of_goods'] = $needs_list_of_goods;

        return $this;
    }

    /**
     * Gets needs_notary
     *
     * @return bool
     */
    public function getNeedsNotary()
    {
        return $this->container['needs_notary'];
    }

    /**
     * Sets needs_notary
     *
     * @param bool $needs_notary needs_notary
     *
     * @return $this
     */
    public function setNeedsNotary($needs_notary)
    {
        $this->container['needs_notary'] = $needs_notary;

        return $this;
    }

    /**
     * Gets needs_object_assignment
     *
     * @return bool
     */
    public function getNeedsObjectAssignment()
    {
        return $this->container['needs_object_assignment'];
    }

    /**
     * Sets needs_object_assignment
     *
     * @param bool $needs_object_assignment needs_object_assignment
     *
     * @return $this
     */
    public function setNeedsObjectAssignment($needs_object_assignment)
    {
        $this->container['needs_object_assignment'] = $needs_object_assignment;

        return $this;
    }

    /**
     * Gets needs_property_managers
     *
     * @return bool
     */
    public function getNeedsPropertyManagers()
    {
        return $this->container['needs_property_managers'];
    }

    /**
     * Sets needs_property_managers
     *
     * @param bool $needs_property_managers needs_property_managers
     *
     * @return $this
     */
    public function setNeedsPropertyManagers($needs_property_managers)
    {
        $this->container['needs_property_managers'] = $needs_property_managers;

        return $this;
    }

    /**
     * Gets needs_signatures
     *
     * @return bool
     */
    public function getNeedsSignatures()
    {
        return $this->container['needs_signatures'];
    }

    /**
     * Sets needs_signatures
     *
     * @param bool $needs_signatures needs_signatures
     *
     * @return $this
     */
    public function setNeedsSignatures($needs_signatures)
    {
        $this->container['needs_signatures'] = $needs_signatures;

        return $this;
    }

    /**
     * Gets needs_vendors
     *
     * @return bool
     */
    public function getNeedsVendors()
    {
        return $this->container['needs_vendors'];
    }

    /**
     * Sets needs_vendors
     *
     * @param bool $needs_vendors needs_vendors
     *
     * @return $this
     */
    public function setNeedsVendors($needs_vendors)
    {
        $this->container['needs_vendors'] = $needs_vendors;

        return $this;
    }

    /**
     * Gets supported_real_estate_groups
     *
     * @return \Swagger\Client\Model\RealEstateGroup[]
     */
    public function getSupportedRealEstateGroups()
    {
        return $this->container['supported_real_estate_groups'];
    }

    /**
     * Sets supported_real_estate_groups
     *
     * @param \Swagger\Client\Model\RealEstateGroup[] $supported_real_estate_groups supported_real_estate_groups
     *
     * @return $this
     */
    public function setSupportedRealEstateGroups($supported_real_estate_groups)
    {
        $this->container['supported_real_estate_groups'] = $supported_real_estate_groups;

        return $this;
    }

    /**
     * Gets support_for_rent
     *
     * @return bool
     */
    public function getSupportForRent()
    {
        return $this->container['support_for_rent'];
    }

    /**
     * Sets support_for_rent
     *
     * @param bool $support_for_rent support_for_rent
     *
     * @return $this
     */
    public function setSupportForRent($support_for_rent)
    {
        $this->container['support_for_rent'] = $support_for_rent;

        return $this;
    }

    /**
     * Gets support_for_sale
     *
     * @return bool
     */
    public function getSupportForSale()
    {
        return $this->container['support_for_sale'];
    }

    /**
     * Sets support_for_sale
     *
     * @param bool $support_for_sale support_for_sale
     *
     * @return $this
     */
    public function setSupportForSale($support_for_sale)
    {
        $this->container['support_for_sale'] = $support_for_sale;

        return $this;
    }

    /**
     * Gets applicant_type
     *
     * @return \Swagger\Client\Model\ApplicantType
     */
    public function getApplicantType()
    {
        return $this->container['applicant_type'];
    }

    /**
     * Sets applicant_type
     *
     * @param \Swagger\Client\Model\ApplicantType $applicant_type applicant_type
     *
     * @return $this
     */
    public function setApplicantType($applicant_type)
    {
        $this->container['applicant_type'] = $applicant_type;

        return $this;
    }

    /**
     * Gets vendor_type
     *
     * @return \Swagger\Client\Model\VendorType
     */
    public function getVendorType()
    {
        return $this->container['vendor_type'];
    }

    /**
     * Sets vendor_type
     *
     * @param \Swagger\Client\Model\VendorType $vendor_type vendor_type
     *
     * @return $this
     */
    public function setVendorType($vendor_type)
    {
        $this->container['vendor_type'] = $vendor_type;

        return $this;
    }

    /**
     * Gets version_timestamp
     *
     * @return \DateTime
     */
    public function getVersionTimestamp()
    {
        return $this->container['version_timestamp'];
    }

    /**
     * Sets version_timestamp
     *
     * @param \DateTime $version_timestamp version_timestamp
     *
     * @return $this
     */
    public function setVersionTimestamp($version_timestamp)
    {
        $this->container['version_timestamp'] = $version_timestamp;

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

