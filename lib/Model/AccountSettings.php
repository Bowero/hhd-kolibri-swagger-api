<?php
/**
 * AccountSettings
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
 * AccountSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountSettings extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_user_settings' => 'string',
        'accepted_terms_document_name' => 'string',
        'accepted_terms_on' => '\DateTime',
        'default_culture' => 'string',
        'seen_contact_form_on' => '\DateTime',
        'seen_whats_new_banner_on' => '\DateTime',
        'is_administrator' => 'bool',
        'works_at_real_estate_agencies' => '\Swagger\Client\Model\WorksAtRealEstateAgency[]',
        'linked_real_estate_agencies' => '\Swagger\Client\Model\LinkedRealEstateAgency[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_user_settings' => null,
        'accepted_terms_document_name' => null,
        'accepted_terms_on' => 'date-time',
        'default_culture' => null,
        'seen_contact_form_on' => 'date-time',
        'seen_whats_new_banner_on' => 'date-time',
        'is_administrator' => null,
        'works_at_real_estate_agencies' => null,
        'linked_real_estate_agencies' => null
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
        'custom_user_settings' => 'customUserSettings',
        'accepted_terms_document_name' => 'acceptedTermsDocumentName',
        'accepted_terms_on' => 'acceptedTermsOn',
        'default_culture' => 'defaultCulture',
        'seen_contact_form_on' => 'seenContactFormOn',
        'seen_whats_new_banner_on' => 'seenWhatsNewBannerOn',
        'is_administrator' => 'isAdministrator',
        'works_at_real_estate_agencies' => 'worksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'linkedRealEstateAgencies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_user_settings' => 'setCustomUserSettings',
        'accepted_terms_document_name' => 'setAcceptedTermsDocumentName',
        'accepted_terms_on' => 'setAcceptedTermsOn',
        'default_culture' => 'setDefaultCulture',
        'seen_contact_form_on' => 'setSeenContactFormOn',
        'seen_whats_new_banner_on' => 'setSeenWhatsNewBannerOn',
        'is_administrator' => 'setIsAdministrator',
        'works_at_real_estate_agencies' => 'setWorksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'setLinkedRealEstateAgencies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_user_settings' => 'getCustomUserSettings',
        'accepted_terms_document_name' => 'getAcceptedTermsDocumentName',
        'accepted_terms_on' => 'getAcceptedTermsOn',
        'default_culture' => 'getDefaultCulture',
        'seen_contact_form_on' => 'getSeenContactFormOn',
        'seen_whats_new_banner_on' => 'getSeenWhatsNewBannerOn',
        'is_administrator' => 'getIsAdministrator',
        'works_at_real_estate_agencies' => 'getWorksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'getLinkedRealEstateAgencies'
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

        $this->container['custom_user_settings'] = isset($data['custom_user_settings']) ? $data['custom_user_settings'] : null;
        $this->container['accepted_terms_document_name'] = isset($data['accepted_terms_document_name']) ? $data['accepted_terms_document_name'] : null;
        $this->container['accepted_terms_on'] = isset($data['accepted_terms_on']) ? $data['accepted_terms_on'] : null;
        $this->container['default_culture'] = isset($data['default_culture']) ? $data['default_culture'] : null;
        $this->container['seen_contact_form_on'] = isset($data['seen_contact_form_on']) ? $data['seen_contact_form_on'] : null;
        $this->container['seen_whats_new_banner_on'] = isset($data['seen_whats_new_banner_on']) ? $data['seen_whats_new_banner_on'] : null;
        $this->container['is_administrator'] = isset($data['is_administrator']) ? $data['is_administrator'] : null;
        $this->container['works_at_real_estate_agencies'] = isset($data['works_at_real_estate_agencies']) ? $data['works_at_real_estate_agencies'] : null;
        $this->container['linked_real_estate_agencies'] = isset($data['linked_real_estate_agencies']) ? $data['linked_real_estate_agencies'] : null;
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
     * Gets custom_user_settings
     *
     * @return string
     */
    public function getCustomUserSettings()
    {
        return $this->container['custom_user_settings'];
    }

    /**
     * Sets custom_user_settings
     *
     * @param string $custom_user_settings custom_user_settings
     *
     * @return $this
     */
    public function setCustomUserSettings($custom_user_settings)
    {
        $this->container['custom_user_settings'] = $custom_user_settings;

        return $this;
    }

    /**
     * Gets accepted_terms_document_name
     *
     * @return string
     */
    public function getAcceptedTermsDocumentName()
    {
        return $this->container['accepted_terms_document_name'];
    }

    /**
     * Sets accepted_terms_document_name
     *
     * @param string $accepted_terms_document_name accepted_terms_document_name
     *
     * @return $this
     */
    public function setAcceptedTermsDocumentName($accepted_terms_document_name)
    {
        $this->container['accepted_terms_document_name'] = $accepted_terms_document_name;

        return $this;
    }

    /**
     * Gets accepted_terms_on
     *
     * @return \DateTime
     */
    public function getAcceptedTermsOn()
    {
        return $this->container['accepted_terms_on'];
    }

    /**
     * Sets accepted_terms_on
     *
     * @param \DateTime $accepted_terms_on accepted_terms_on
     *
     * @return $this
     */
    public function setAcceptedTermsOn($accepted_terms_on)
    {
        $this->container['accepted_terms_on'] = $accepted_terms_on;

        return $this;
    }

    /**
     * Gets default_culture
     *
     * @return string
     */
    public function getDefaultCulture()
    {
        return $this->container['default_culture'];
    }

    /**
     * Sets default_culture
     *
     * @param string $default_culture default_culture
     *
     * @return $this
     */
    public function setDefaultCulture($default_culture)
    {
        $this->container['default_culture'] = $default_culture;

        return $this;
    }

    /**
     * Gets seen_contact_form_on
     *
     * @return \DateTime
     */
    public function getSeenContactFormOn()
    {
        return $this->container['seen_contact_form_on'];
    }

    /**
     * Sets seen_contact_form_on
     *
     * @param \DateTime $seen_contact_form_on seen_contact_form_on
     *
     * @return $this
     */
    public function setSeenContactFormOn($seen_contact_form_on)
    {
        $this->container['seen_contact_form_on'] = $seen_contact_form_on;

        return $this;
    }

    /**
     * Gets seen_whats_new_banner_on
     *
     * @return \DateTime
     */
    public function getSeenWhatsNewBannerOn()
    {
        return $this->container['seen_whats_new_banner_on'];
    }

    /**
     * Sets seen_whats_new_banner_on
     *
     * @param \DateTime $seen_whats_new_banner_on seen_whats_new_banner_on
     *
     * @return $this
     */
    public function setSeenWhatsNewBannerOn($seen_whats_new_banner_on)
    {
        $this->container['seen_whats_new_banner_on'] = $seen_whats_new_banner_on;

        return $this;
    }

    /**
     * Gets is_administrator
     *
     * @return bool
     */
    public function getIsAdministrator()
    {
        return $this->container['is_administrator'];
    }

    /**
     * Sets is_administrator
     *
     * @param bool $is_administrator is_administrator
     *
     * @return $this
     */
    public function setIsAdministrator($is_administrator)
    {
        $this->container['is_administrator'] = $is_administrator;

        return $this;
    }

    /**
     * Gets works_at_real_estate_agencies
     *
     * @return \Swagger\Client\Model\WorksAtRealEstateAgency[]
     */
    public function getWorksAtRealEstateAgencies()
    {
        return $this->container['works_at_real_estate_agencies'];
    }

    /**
     * Sets works_at_real_estate_agencies
     *
     * @param \Swagger\Client\Model\WorksAtRealEstateAgency[] $works_at_real_estate_agencies works_at_real_estate_agencies
     *
     * @return $this
     */
    public function setWorksAtRealEstateAgencies($works_at_real_estate_agencies)
    {
        $this->container['works_at_real_estate_agencies'] = $works_at_real_estate_agencies;

        return $this;
    }

    /**
     * Gets linked_real_estate_agencies
     *
     * @return \Swagger\Client\Model\LinkedRealEstateAgency[]
     */
    public function getLinkedRealEstateAgencies()
    {
        return $this->container['linked_real_estate_agencies'];
    }

    /**
     * Sets linked_real_estate_agencies
     *
     * @param \Swagger\Client\Model\LinkedRealEstateAgency[] $linked_real_estate_agencies linked_real_estate_agencies
     *
     * @return $this
     */
    public function setLinkedRealEstateAgencies($linked_real_estate_agencies)
    {
        $this->container['linked_real_estate_agencies'] = $linked_real_estate_agencies;

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


