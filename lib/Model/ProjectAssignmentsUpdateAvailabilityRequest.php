<?php
/**
 * ProjectAssignmentsUpdateAvailabilityRequest
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
 * ProjectAssignmentsUpdateAvailabilityRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectAssignmentsUpdateAvailabilityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectAssignmentsUpdateAvailabilityRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_settings' => '\Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestAvailableSettings',
        'hide_on_funda_until' => '\DateTime',
        'id' => 'string',
        'update_availability_action' => '\Swagger\Client\Model\FloorFloorType',
        'rented_settings' => '\Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestRentedSettings',
        'sold_settings' => '\Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestSoldSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_settings' => null,
        'hide_on_funda_until' => 'date-time',
        'id' => 'guid',
        'update_availability_action' => null,
        'rented_settings' => null,
        'sold_settings' => null
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
        'available_settings' => 'availableSettings',
        'hide_on_funda_until' => 'hideOnFundaUntil',
        'id' => 'id',
        'update_availability_action' => 'updateAvailabilityAction',
        'rented_settings' => 'rentedSettings',
        'sold_settings' => 'soldSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_settings' => 'setAvailableSettings',
        'hide_on_funda_until' => 'setHideOnFundaUntil',
        'id' => 'setId',
        'update_availability_action' => 'setUpdateAvailabilityAction',
        'rented_settings' => 'setRentedSettings',
        'sold_settings' => 'setSoldSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_settings' => 'getAvailableSettings',
        'hide_on_funda_until' => 'getHideOnFundaUntil',
        'id' => 'getId',
        'update_availability_action' => 'getUpdateAvailabilityAction',
        'rented_settings' => 'getRentedSettings',
        'sold_settings' => 'getSoldSettings'
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
        $this->container['available_settings'] = isset($data['available_settings']) ? $data['available_settings'] : null;
        $this->container['hide_on_funda_until'] = isset($data['hide_on_funda_until']) ? $data['hide_on_funda_until'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['update_availability_action'] = isset($data['update_availability_action']) ? $data['update_availability_action'] : null;
        $this->container['rented_settings'] = isset($data['rented_settings']) ? $data['rented_settings'] : null;
        $this->container['sold_settings'] = isset($data['sold_settings']) ? $data['sold_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['update_availability_action'] === null) {
            $invalidProperties[] = "'update_availability_action' can't be null";
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
     * Gets available_settings
     *
     * @return \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestAvailableSettings
     */
    public function getAvailableSettings()
    {
        return $this->container['available_settings'];
    }

    /**
     * Sets available_settings
     *
     * @param \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestAvailableSettings $available_settings available_settings
     *
     * @return $this
     */
    public function setAvailableSettings($available_settings)
    {
        $this->container['available_settings'] = $available_settings;

        return $this;
    }

    /**
     * Gets hide_on_funda_until
     *
     * @return \DateTime
     */
    public function getHideOnFundaUntil()
    {
        return $this->container['hide_on_funda_until'];
    }

    /**
     * Sets hide_on_funda_until
     *
     * @param \DateTime $hide_on_funda_until Publish this assignment to Tiara, but hide it for Funda for a while.
     *
     * @return $this
     */
    public function setHideOnFundaUntil($hide_on_funda_until)
    {
        $this->container['hide_on_funda_until'] = $hide_on_funda_until;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ProjectAssignmentsUpdateAvailabilityRequest., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets update_availability_action
     *
     * @return \Swagger\Client\Model\FloorFloorType
     */
    public function getUpdateAvailabilityAction()
    {
        return $this->container['update_availability_action'];
    }

    /**
     * Sets update_availability_action
     *
     * @param \Swagger\Client\Model\FloorFloorType $update_availability_action update_availability_action
     *
     * @return $this
     */
    public function setUpdateAvailabilityAction($update_availability_action)
    {
        $this->container['update_availability_action'] = $update_availability_action;

        return $this;
    }

    /**
     * Gets rented_settings
     *
     * @return \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestRentedSettings
     */
    public function getRentedSettings()
    {
        return $this->container['rented_settings'];
    }

    /**
     * Sets rented_settings
     *
     * @param \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestRentedSettings $rented_settings rented_settings
     *
     * @return $this
     */
    public function setRentedSettings($rented_settings)
    {
        $this->container['rented_settings'] = $rented_settings;

        return $this;
    }

    /**
     * Gets sold_settings
     *
     * @return \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestSoldSettings
     */
    public function getSoldSettings()
    {
        return $this->container['sold_settings'];
    }

    /**
     * Sets sold_settings
     *
     * @param \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequestSoldSettings $sold_settings sold_settings
     *
     * @return $this
     */
    public function setSoldSettings($sold_settings)
    {
        $this->container['sold_settings'] = $sold_settings;

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


