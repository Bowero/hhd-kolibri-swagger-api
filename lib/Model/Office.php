<?php
/**
 * Office
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
 * Office Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Office extends Building 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Office';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'about_me' => '\Swagger\Client\Model\Translation[]',
        'association_info' => '\Swagger\Client\Model\RealEstateAssociationInfo',
        'association_info_alt' => '\Swagger\Client\Model\RealEstateAssociationInfo',
        'description' => 'string',
        'email_addresses' => '\Swagger\Client\Model\EmailAddress[]',
        'is_main_office' => 'bool',
        'linked_employees' => '\Swagger\Client\Model\LinkedEmployee[]',
        'logo' => '\Swagger\Client\Model\PhotoBlob',
        'name' => 'string',
        'phone_numbers' => '\Swagger\Client\Model\PhoneNumber[]',
        'postal_address' => '\Swagger\Client\Model\Address',
        'postal_address_differs_visit_address' => 'bool',
        'social_media' => '\Swagger\Client\Model\SocialMediaTranslation[]',
        'spoken_languages' => '\Swagger\Client\Model\Language[]',
        'visit_address' => '\Swagger\Client\Model\Address',
        'web_address' => 'string',
        'linked_folder_tree' => '\Swagger\Client\Model\LinkedFolderTree'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'about_me' => null,
        'association_info' => null,
        'association_info_alt' => null,
        'description' => null,
        'email_addresses' => null,
        'is_main_office' => null,
        'linked_employees' => null,
        'logo' => null,
        'name' => null,
        'phone_numbers' => null,
        'postal_address' => null,
        'postal_address_differs_visit_address' => null,
        'social_media' => null,
        'spoken_languages' => null,
        'visit_address' => null,
        'web_address' => null,
        'linked_folder_tree' => null
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
        'about_me' => 'aboutMe',
        'association_info' => 'associationInfo',
        'association_info_alt' => 'associationInfoAlt',
        'description' => 'description',
        'email_addresses' => 'emailAddresses',
        'is_main_office' => 'isMainOffice',
        'linked_employees' => 'linkedEmployees',
        'logo' => 'logo',
        'name' => 'name',
        'phone_numbers' => 'phoneNumbers',
        'postal_address' => 'postalAddress',
        'postal_address_differs_visit_address' => 'postalAddressDiffersVisitAddress',
        'social_media' => 'socialMedia',
        'spoken_languages' => 'spokenLanguages',
        'visit_address' => 'visitAddress',
        'web_address' => 'webAddress',
        'linked_folder_tree' => 'linkedFolderTree'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'about_me' => 'setAboutMe',
        'association_info' => 'setAssociationInfo',
        'association_info_alt' => 'setAssociationInfoAlt',
        'description' => 'setDescription',
        'email_addresses' => 'setEmailAddresses',
        'is_main_office' => 'setIsMainOffice',
        'linked_employees' => 'setLinkedEmployees',
        'logo' => 'setLogo',
        'name' => 'setName',
        'phone_numbers' => 'setPhoneNumbers',
        'postal_address' => 'setPostalAddress',
        'postal_address_differs_visit_address' => 'setPostalAddressDiffersVisitAddress',
        'social_media' => 'setSocialMedia',
        'spoken_languages' => 'setSpokenLanguages',
        'visit_address' => 'setVisitAddress',
        'web_address' => 'setWebAddress',
        'linked_folder_tree' => 'setLinkedFolderTree'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'about_me' => 'getAboutMe',
        'association_info' => 'getAssociationInfo',
        'association_info_alt' => 'getAssociationInfoAlt',
        'description' => 'getDescription',
        'email_addresses' => 'getEmailAddresses',
        'is_main_office' => 'getIsMainOffice',
        'linked_employees' => 'getLinkedEmployees',
        'logo' => 'getLogo',
        'name' => 'getName',
        'phone_numbers' => 'getPhoneNumbers',
        'postal_address' => 'getPostalAddress',
        'postal_address_differs_visit_address' => 'getPostalAddressDiffersVisitAddress',
        'social_media' => 'getSocialMedia',
        'spoken_languages' => 'getSpokenLanguages',
        'visit_address' => 'getVisitAddress',
        'web_address' => 'getWebAddress',
        'linked_folder_tree' => 'getLinkedFolderTree'
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

        $this->container['about_me'] = isset($data['about_me']) ? $data['about_me'] : null;
        $this->container['association_info'] = isset($data['association_info']) ? $data['association_info'] : null;
        $this->container['association_info_alt'] = isset($data['association_info_alt']) ? $data['association_info_alt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['is_main_office'] = isset($data['is_main_office']) ? $data['is_main_office'] : null;
        $this->container['linked_employees'] = isset($data['linked_employees']) ? $data['linked_employees'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        $this->container['postal_address_differs_visit_address'] = isset($data['postal_address_differs_visit_address']) ? $data['postal_address_differs_visit_address'] : null;
        $this->container['social_media'] = isset($data['social_media']) ? $data['social_media'] : null;
        $this->container['spoken_languages'] = isset($data['spoken_languages']) ? $data['spoken_languages'] : null;
        $this->container['visit_address'] = isset($data['visit_address']) ? $data['visit_address'] : null;
        $this->container['web_address'] = isset($data['web_address']) ? $data['web_address'] : null;
        $this->container['linked_folder_tree'] = isset($data['linked_folder_tree']) ? $data['linked_folder_tree'] : null;
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
     * Gets about_me
     *
     * @return \Swagger\Client\Model\Translation[]
     */
    public function getAboutMe()
    {
        return $this->container['about_me'];
    }

    /**
     * Sets about_me
     *
     * @param \Swagger\Client\Model\Translation[] $about_me about_me
     *
     * @return $this
     */
    public function setAboutMe($about_me)
    {
        $this->container['about_me'] = $about_me;

        return $this;
    }

    /**
     * Gets association_info
     *
     * @return \Swagger\Client\Model\RealEstateAssociationInfo
     */
    public function getAssociationInfo()
    {
        return $this->container['association_info'];
    }

    /**
     * Sets association_info
     *
     * @param \Swagger\Client\Model\RealEstateAssociationInfo $association_info association_info
     *
     * @return $this
     */
    public function setAssociationInfo($association_info)
    {
        $this->container['association_info'] = $association_info;

        return $this;
    }

    /**
     * Gets association_info_alt
     *
     * @return \Swagger\Client\Model\RealEstateAssociationInfo
     */
    public function getAssociationInfoAlt()
    {
        return $this->container['association_info_alt'];
    }

    /**
     * Sets association_info_alt
     *
     * @param \Swagger\Client\Model\RealEstateAssociationInfo $association_info_alt association_info_alt
     *
     * @return $this
     */
    public function setAssociationInfoAlt($association_info_alt)
    {
        $this->container['association_info_alt'] = $association_info_alt;

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
     * Gets email_addresses
     *
     * @return \Swagger\Client\Model\EmailAddress[]
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param \Swagger\Client\Model\EmailAddress[] $email_addresses email_addresses
     *
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets is_main_office
     *
     * @return bool
     */
    public function getIsMainOffice()
    {
        return $this->container['is_main_office'];
    }

    /**
     * Sets is_main_office
     *
     * @param bool $is_main_office is_main_office
     *
     * @return $this
     */
    public function setIsMainOffice($is_main_office)
    {
        $this->container['is_main_office'] = $is_main_office;

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
     * Gets logo
     *
     * @return \Swagger\Client\Model\PhotoBlob
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Swagger\Client\Model\PhotoBlob $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * Gets phone_numbers
     *
     * @return \Swagger\Client\Model\PhoneNumber[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Swagger\Client\Model\PhoneNumber[] $phone_numbers phone_numbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Swagger\Client\Model\Address $postal_address postal_address
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets postal_address_differs_visit_address
     *
     * @return bool
     */
    public function getPostalAddressDiffersVisitAddress()
    {
        return $this->container['postal_address_differs_visit_address'];
    }

    /**
     * Sets postal_address_differs_visit_address
     *
     * @param bool $postal_address_differs_visit_address postal_address_differs_visit_address
     *
     * @return $this
     */
    public function setPostalAddressDiffersVisitAddress($postal_address_differs_visit_address)
    {
        $this->container['postal_address_differs_visit_address'] = $postal_address_differs_visit_address;

        return $this;
    }

    /**
     * Gets social_media
     *
     * @return \Swagger\Client\Model\SocialMediaTranslation[]
     */
    public function getSocialMedia()
    {
        return $this->container['social_media'];
    }

    /**
     * Sets social_media
     *
     * @param \Swagger\Client\Model\SocialMediaTranslation[] $social_media social_media
     *
     * @return $this
     */
    public function setSocialMedia($social_media)
    {
        $this->container['social_media'] = $social_media;

        return $this;
    }

    /**
     * Gets spoken_languages
     *
     * @return \Swagger\Client\Model\Language[]
     */
    public function getSpokenLanguages()
    {
        return $this->container['spoken_languages'];
    }

    /**
     * Sets spoken_languages
     *
     * @param \Swagger\Client\Model\Language[] $spoken_languages spoken_languages
     *
     * @return $this
     */
    public function setSpokenLanguages($spoken_languages)
    {
        $this->container['spoken_languages'] = $spoken_languages;

        return $this;
    }

    /**
     * Gets visit_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getVisitAddress()
    {
        return $this->container['visit_address'];
    }

    /**
     * Sets visit_address
     *
     * @param \Swagger\Client\Model\Address $visit_address visit_address
     *
     * @return $this
     */
    public function setVisitAddress($visit_address)
    {
        $this->container['visit_address'] = $visit_address;

        return $this;
    }

    /**
     * Gets web_address
     *
     * @return string
     */
    public function getWebAddress()
    {
        return $this->container['web_address'];
    }

    /**
     * Sets web_address
     *
     * @param string $web_address web_address
     *
     * @return $this
     */
    public function setWebAddress($web_address)
    {
        $this->container['web_address'] = $web_address;

        return $this;
    }

    /**
     * Gets linked_folder_tree
     *
     * @return \Swagger\Client\Model\LinkedFolderTree
     */
    public function getLinkedFolderTree()
    {
        return $this->container['linked_folder_tree'];
    }

    /**
     * Sets linked_folder_tree
     *
     * @param \Swagger\Client\Model\LinkedFolderTree $linked_folder_tree linked_folder_tree
     *
     * @return $this
     */
    public function setLinkedFolderTree($linked_folder_tree)
    {
        $this->container['linked_folder_tree'] = $linked_folder_tree;

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


