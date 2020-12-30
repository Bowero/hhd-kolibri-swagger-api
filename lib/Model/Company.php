<?php
/**
 * Company
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
 * Company Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Company extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_account' => '\Swagger\Client\Model\BankAccount',
        'description' => 'string',
        'email_addresses' => '\Swagger\Client\Model\EmailAddress[]',
        'legal_registration' => '\Swagger\Client\Model\LegalRegistration',
        'logo' => '\Swagger\Client\Model\PhotoBlob',
        'name' => 'string',
        'phone_numbers' => '\Swagger\Client\Model\PhoneNumber[]',
        'tax_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_account' => null,
        'description' => null,
        'email_addresses' => null,
        'legal_registration' => null,
        'logo' => null,
        'name' => null,
        'phone_numbers' => null,
        'tax_number' => null
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
        'bank_account' => 'bankAccount',
        'description' => 'description',
        'email_addresses' => 'emailAddresses',
        'legal_registration' => 'legalRegistration',
        'logo' => 'logo',
        'name' => 'name',
        'phone_numbers' => 'phoneNumbers',
        'tax_number' => 'taxNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account' => 'setBankAccount',
        'description' => 'setDescription',
        'email_addresses' => 'setEmailAddresses',
        'legal_registration' => 'setLegalRegistration',
        'logo' => 'setLogo',
        'name' => 'setName',
        'phone_numbers' => 'setPhoneNumbers',
        'tax_number' => 'setTaxNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account' => 'getBankAccount',
        'description' => 'getDescription',
        'email_addresses' => 'getEmailAddresses',
        'legal_registration' => 'getLegalRegistration',
        'logo' => 'getLogo',
        'name' => 'getName',
        'phone_numbers' => 'getPhoneNumbers',
        'tax_number' => 'getTaxNumber'
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

        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['legal_registration'] = isset($data['legal_registration']) ? $data['legal_registration'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['tax_number'] = isset($data['tax_number']) ? $data['tax_number'] : null;
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
     * Gets bank_account
     *
     * @return \Swagger\Client\Model\BankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Swagger\Client\Model\BankAccount $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

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
     * Gets legal_registration
     *
     * @return \Swagger\Client\Model\LegalRegistration
     */
    public function getLegalRegistration()
    {
        return $this->container['legal_registration'];
    }

    /**
     * Sets legal_registration
     *
     * @param \Swagger\Client\Model\LegalRegistration $legal_registration legal_registration
     *
     * @return $this
     */
    public function setLegalRegistration($legal_registration)
    {
        $this->container['legal_registration'] = $legal_registration;

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
     * Gets tax_number
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->container['tax_number'];
    }

    /**
     * Sets tax_number
     *
     * @param string $tax_number tax_number
     *
     * @return $this
     */
    public function setTaxNumber($tax_number)
    {
        $this->container['tax_number'] = $tax_number;

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

