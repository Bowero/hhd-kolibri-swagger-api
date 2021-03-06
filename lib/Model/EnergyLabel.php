<?php
/**
 * EnergyLabel
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
 * EnergyLabel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnergyLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnergyLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'certificate_number' => 'string',
        'end_date' => '\DateTime',
        'energy_class' => '\Swagger\Client\Model\EnergyClass',
        'energy_index' => 'float',
        'is_certificate_available' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'certificate_number' => null,
        'end_date' => 'date-time',
        'energy_class' => null,
        'energy_index' => 'decimal',
        'is_certificate_available' => null
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
        'certificate_number' => 'certificateNumber',
        'end_date' => 'endDate',
        'energy_class' => 'energyClass',
        'energy_index' => 'energyIndex',
        'is_certificate_available' => 'isCertificateAvailable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate_number' => 'setCertificateNumber',
        'end_date' => 'setEndDate',
        'energy_class' => 'setEnergyClass',
        'energy_index' => 'setEnergyIndex',
        'is_certificate_available' => 'setIsCertificateAvailable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate_number' => 'getCertificateNumber',
        'end_date' => 'getEndDate',
        'energy_class' => 'getEnergyClass',
        'energy_index' => 'getEnergyIndex',
        'is_certificate_available' => 'getIsCertificateAvailable'
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
        $this->container['certificate_number'] = isset($data['certificate_number']) ? $data['certificate_number'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['energy_class'] = isset($data['energy_class']) ? $data['energy_class'] : null;
        $this->container['energy_index'] = isset($data['energy_index']) ? $data['energy_index'] : null;
        $this->container['is_certificate_available'] = isset($data['is_certificate_available']) ? $data['is_certificate_available'] : null;
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
     * Gets certificate_number
     *
     * @return string
     */
    public function getCertificateNumber()
    {
        return $this->container['certificate_number'];
    }

    /**
     * Sets certificate_number
     *
     * @param string $certificate_number certificate_number
     *
     * @return $this
     */
    public function setCertificateNumber($certificate_number)
    {
        $this->container['certificate_number'] = $certificate_number;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets energy_class
     *
     * @return \Swagger\Client\Model\EnergyClass
     */
    public function getEnergyClass()
    {
        return $this->container['energy_class'];
    }

    /**
     * Sets energy_class
     *
     * @param \Swagger\Client\Model\EnergyClass $energy_class energy_class
     *
     * @return $this
     */
    public function setEnergyClass($energy_class)
    {
        $this->container['energy_class'] = $energy_class;

        return $this;
    }

    /**
     * Gets energy_index
     *
     * @return float
     */
    public function getEnergyIndex()
    {
        return $this->container['energy_index'];
    }

    /**
     * Sets energy_index
     *
     * @param float $energy_index energy_index
     *
     * @return $this
     */
    public function setEnergyIndex($energy_index)
    {
        $this->container['energy_index'] = $energy_index;

        return $this;
    }

    /**
     * Gets is_certificate_available
     *
     * @return bool
     */
    public function getIsCertificateAvailable()
    {
        return $this->container['is_certificate_available'];
    }

    /**
     * Sets is_certificate_available
     *
     * @param bool $is_certificate_available is_certificate_available
     *
     * @return $this
     */
    public function setIsCertificateAvailable($is_certificate_available)
    {
        $this->container['is_certificate_available'] = $is_certificate_available;

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


