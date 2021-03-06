<?php
/**
 * LinkedOffice
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
 * LinkedOffice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedOffice extends LinkedItem 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkedOffice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avatar_url' => 'string',
        'display_name' => 'string',
        'email' => 'string',
        'is_main_office' => 'bool',
        'letter_avatar' => 'string',
        'locality' => 'string',
        'phone' => 'string',
        'phone_mobile' => 'string',
        'postal_code' => 'string',
        'street_name_and_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avatar_url' => null,
        'display_name' => null,
        'email' => null,
        'is_main_office' => null,
        'letter_avatar' => null,
        'locality' => null,
        'phone' => null,
        'phone_mobile' => null,
        'postal_code' => null,
        'street_name_and_number' => null
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
        'avatar_url' => 'avatarUrl',
        'display_name' => 'displayName',
        'email' => 'email',
        'is_main_office' => 'isMainOffice',
        'letter_avatar' => 'letterAvatar',
        'locality' => 'locality',
        'phone' => 'phone',
        'phone_mobile' => 'phoneMobile',
        'postal_code' => 'postalCode',
        'street_name_and_number' => 'streetNameAndNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'is_main_office' => 'setIsMainOffice',
        'letter_avatar' => 'setLetterAvatar',
        'locality' => 'setLocality',
        'phone' => 'setPhone',
        'phone_mobile' => 'setPhoneMobile',
        'postal_code' => 'setPostalCode',
        'street_name_and_number' => 'setStreetNameAndNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'is_main_office' => 'getIsMainOffice',
        'letter_avatar' => 'getLetterAvatar',
        'locality' => 'getLocality',
        'phone' => 'getPhone',
        'phone_mobile' => 'getPhoneMobile',
        'postal_code' => 'getPostalCode',
        'street_name_and_number' => 'getStreetNameAndNumber'
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

        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['is_main_office'] = isset($data['is_main_office']) ? $data['is_main_office'] : null;
        $this->container['letter_avatar'] = isset($data['letter_avatar']) ? $data['letter_avatar'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone_mobile'] = isset($data['phone_mobile']) ? $data['phone_mobile'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['street_name_and_number'] = isset($data['street_name_and_number']) ? $data['street_name_and_number'] : null;
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


