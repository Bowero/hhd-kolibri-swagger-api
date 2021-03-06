<?php
/**
 * LinkedRelation
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
 * LinkedRelation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedRelation extends LinkedItem 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkedRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'association' => '\Swagger\Client\Model\RealEstateAssociation',
        'avatar_url' => 'string',
        'date_of_birth' => '\DateTime',
        'display_name' => 'string',
        'email' => 'string',
        'gender' => '\Swagger\Client\Model\Gender',
        'linked_partner' => '\Swagger\Client\Model\LinkedPartner',
        'letter_avatar' => 'string',
        'locality' => 'string',
        'membership_number' => 'string',
        'phone' => 'string',
        'phone_mobile' => 'string',
        'phone_work' => 'string',
        'postal_code' => 'string',
        'street_name_and_number' => 'string',
        'together_with_partner' => 'bool',
        'type_of_relation' => '\Swagger\Client\Model\RelationType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'association' => null,
        'avatar_url' => null,
        'date_of_birth' => 'date-time',
        'display_name' => null,
        'email' => null,
        'gender' => null,
        'linked_partner' => null,
        'letter_avatar' => null,
        'locality' => null,
        'membership_number' => null,
        'phone' => null,
        'phone_mobile' => null,
        'phone_work' => null,
        'postal_code' => null,
        'street_name_and_number' => null,
        'together_with_partner' => null,
        'type_of_relation' => null
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
        'association' => 'association',
        'avatar_url' => 'avatarUrl',
        'date_of_birth' => 'dateOfBirth',
        'display_name' => 'displayName',
        'email' => 'email',
        'gender' => 'gender',
        'linked_partner' => 'linkedPartner',
        'letter_avatar' => 'letterAvatar',
        'locality' => 'locality',
        'membership_number' => 'membershipNumber',
        'phone' => 'phone',
        'phone_mobile' => 'phoneMobile',
        'phone_work' => 'phoneWork',
        'postal_code' => 'postalCode',
        'street_name_and_number' => 'streetNameAndNumber',
        'together_with_partner' => 'togetherWithPartner',
        'type_of_relation' => 'typeOfRelation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'association' => 'setAssociation',
        'avatar_url' => 'setAvatarUrl',
        'date_of_birth' => 'setDateOfBirth',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'linked_partner' => 'setLinkedPartner',
        'letter_avatar' => 'setLetterAvatar',
        'locality' => 'setLocality',
        'membership_number' => 'setMembershipNumber',
        'phone' => 'setPhone',
        'phone_mobile' => 'setPhoneMobile',
        'phone_work' => 'setPhoneWork',
        'postal_code' => 'setPostalCode',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'together_with_partner' => 'setTogetherWithPartner',
        'type_of_relation' => 'setTypeOfRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'association' => 'getAssociation',
        'avatar_url' => 'getAvatarUrl',
        'date_of_birth' => 'getDateOfBirth',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'linked_partner' => 'getLinkedPartner',
        'letter_avatar' => 'getLetterAvatar',
        'locality' => 'getLocality',
        'membership_number' => 'getMembershipNumber',
        'phone' => 'getPhone',
        'phone_mobile' => 'getPhoneMobile',
        'phone_work' => 'getPhoneWork',
        'postal_code' => 'getPostalCode',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'together_with_partner' => 'getTogetherWithPartner',
        'type_of_relation' => 'getTypeOfRelation'
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

        $this->container['association'] = isset($data['association']) ? $data['association'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['linked_partner'] = isset($data['linked_partner']) ? $data['linked_partner'] : null;
        $this->container['letter_avatar'] = isset($data['letter_avatar']) ? $data['letter_avatar'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['membership_number'] = isset($data['membership_number']) ? $data['membership_number'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone_mobile'] = isset($data['phone_mobile']) ? $data['phone_mobile'] : null;
        $this->container['phone_work'] = isset($data['phone_work']) ? $data['phone_work'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['street_name_and_number'] = isset($data['street_name_and_number']) ? $data['street_name_and_number'] : null;
        $this->container['together_with_partner'] = isset($data['together_with_partner']) ? $data['together_with_partner'] : null;
        $this->container['type_of_relation'] = isset($data['type_of_relation']) ? $data['type_of_relation'] : null;
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
     * Gets association
     *
     * @return \Swagger\Client\Model\RealEstateAssociation
     */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
     * Sets association
     *
     * @param \Swagger\Client\Model\RealEstateAssociation $association association
     *
     * @return $this
     */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string $avatar_url avatar_url
     *
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth date_of_birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Swagger\Client\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Swagger\Client\Model\Gender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets linked_partner
     *
     * @return \Swagger\Client\Model\LinkedPartner
     */
    public function getLinkedPartner()
    {
        return $this->container['linked_partner'];
    }

    /**
     * Sets linked_partner
     *
     * @param \Swagger\Client\Model\LinkedPartner $linked_partner linked_partner
     *
     * @return $this
     */
    public function setLinkedPartner($linked_partner)
    {
        $this->container['linked_partner'] = $linked_partner;

        return $this;
    }

    /**
     * Gets letter_avatar
     *
     * @return string
     */
    public function getLetterAvatar()
    {
        return $this->container['letter_avatar'];
    }

    /**
     * Sets letter_avatar
     *
     * @param string $letter_avatar letter_avatar
     *
     * @return $this
     */
    public function setLetterAvatar($letter_avatar)
    {
        $this->container['letter_avatar'] = $letter_avatar;

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
     * Gets membership_number
     *
     * @return string
     */
    public function getMembershipNumber()
    {
        return $this->container['membership_number'];
    }

    /**
     * Sets membership_number
     *
     * @param string $membership_number membership_number
     *
     * @return $this
     */
    public function setMembershipNumber($membership_number)
    {
        $this->container['membership_number'] = $membership_number;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phone_mobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->container['phone_mobile'];
    }

    /**
     * Sets phone_mobile
     *
     * @param string $phone_mobile phone_mobile
     *
     * @return $this
     */
    public function setPhoneMobile($phone_mobile)
    {
        $this->container['phone_mobile'] = $phone_mobile;

        return $this;
    }

    /**
     * Gets phone_work
     *
     * @return string
     */
    public function getPhoneWork()
    {
        return $this->container['phone_work'];
    }

    /**
     * Sets phone_work
     *
     * @param string $phone_work phone_work
     *
     * @return $this
     */
    public function setPhoneWork($phone_work)
    {
        $this->container['phone_work'] = $phone_work;

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
     * Gets together_with_partner
     *
     * @return bool
     */
    public function getTogetherWithPartner()
    {
        return $this->container['together_with_partner'];
    }

    /**
     * Sets together_with_partner
     *
     * @param bool $together_with_partner together_with_partner
     *
     * @return $this
     */
    public function setTogetherWithPartner($together_with_partner)
    {
        $this->container['together_with_partner'] = $together_with_partner;

        return $this;
    }

    /**
     * Gets type_of_relation
     *
     * @return \Swagger\Client\Model\RelationType
     */
    public function getTypeOfRelation()
    {
        return $this->container['type_of_relation'];
    }

    /**
     * Sets type_of_relation
     *
     * @param \Swagger\Client\Model\RelationType $type_of_relation type_of_relation
     *
     * @return $this
     */
    public function setTypeOfRelation($type_of_relation)
    {
        $this->container['type_of_relation'] = $type_of_relation;

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


