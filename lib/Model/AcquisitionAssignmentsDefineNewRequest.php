<?php
/**
 * AcquisitionAssignmentsDefineNewRequest
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
 * AcquisitionAssignmentsDefineNewRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcquisitionAssignmentsDefineNewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcquisitionAssignmentsDefineNewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_id' => 'string',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'office_id' => 'string',
        'real_estate_group' => '\Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequestRealEstateGroup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_id' => 'guid',
        'for_rent' => null,
        'for_sale' => null,
        'office_id' => 'guid',
        'real_estate_group' => null
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
        'employee_id' => 'employeeId',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'office_id' => 'officeId',
        'real_estate_group' => 'realEstateGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'office_id' => 'setOfficeId',
        'real_estate_group' => 'setRealEstateGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'office_id' => 'getOfficeId',
        'real_estate_group' => 'getRealEstateGroup'
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['for_rent'] = isset($data['for_rent']) ? $data['for_rent'] : null;
        $this->container['for_sale'] = isset($data['for_sale']) ? $data['for_sale'] : null;
        $this->container['office_id'] = isset($data['office_id']) ? $data['office_id'] : null;
        $this->container['real_estate_group'] = isset($data['real_estate_group']) ? $data['real_estate_group'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['for_rent'] === null) {
            $invalidProperties[] = "'for_rent' can't be null";
        }
        if ($this->container['for_sale'] === null) {
            $invalidProperties[] = "'for_sale' can't be null";
        }
        if ($this->container['office_id'] === null) {
            $invalidProperties[] = "'office_id' can't be null";
        }
        if ((mb_strlen($this->container['office_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'office_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
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
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id The Id of the employee this assignment belongs to.
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        if ((mb_strlen($employee_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling AcquisitionAssignmentsDefineNewRequest., must be bigger than or equal to 1.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets for_rent
     *
     * @return bool
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool $for_rent Is this an assignment for rent or for sale?
     *
     * @return $this
     */
    public function setForRent($for_rent)
    {
        $this->container['for_rent'] = $for_rent;

        return $this;
    }

    /**
     * Gets for_sale
     *
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool $for_sale Is this an assignment for rent or for sale?
     *
     * @return $this
     */
    public function setForSale($for_sale)
    {
        $this->container['for_sale'] = $for_sale;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return string
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param string $office_id The Id of the office this assignment belongs to.
     *
     * @return $this
     */
    public function setOfficeId($office_id)
    {

        if ((mb_strlen($office_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $office_id when calling AcquisitionAssignmentsDefineNewRequest., must be bigger than or equal to 1.');
        }

        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets real_estate_group
     *
     * @return \Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequestRealEstateGroup
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequestRealEstateGroup $real_estate_group real_estate_group
     *
     * @return $this
     */
    public function setRealEstateGroup($real_estate_group)
    {
        $this->container['real_estate_group'] = $real_estate_group;

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


