<?php
/**
 * FinancialAdministrationGroup
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
 * FinancialAdministrationGroup Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialAdministrationGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialAdministrationGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'budgeted_amount' => 'float',
        'budgeted_number_of_products' => 'float',
        'id' => 'int',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'budgeted_amount' => 'decimal',
        'budgeted_number_of_products' => 'decimal',
        'id' => 'int32',
        'name' => null
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
        'budgeted_amount' => 'budgetedAmount',
        'budgeted_number_of_products' => 'budgetedNumberOfProducts',
        'id' => 'id',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budgeted_amount' => 'setBudgetedAmount',
        'budgeted_number_of_products' => 'setBudgetedNumberOfProducts',
        'id' => 'setId',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budgeted_amount' => 'getBudgetedAmount',
        'budgeted_number_of_products' => 'getBudgetedNumberOfProducts',
        'id' => 'getId',
        'name' => 'getName'
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
        $this->container['budgeted_amount'] = isset($data['budgeted_amount']) ? $data['budgeted_amount'] : null;
        $this->container['budgeted_number_of_products'] = isset($data['budgeted_number_of_products']) ? $data['budgeted_number_of_products'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['budgeted_amount'] === null) {
            $invalidProperties[] = "'budgeted_amount' can't be null";
        }
        if ($this->container['budgeted_number_of_products'] === null) {
            $invalidProperties[] = "'budgeted_number_of_products' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
     * Gets budgeted_amount
     *
     * @return float
     */
    public function getBudgetedAmount()
    {
        return $this->container['budgeted_amount'];
    }

    /**
     * Sets budgeted_amount
     *
     * @param float $budgeted_amount budgeted_amount
     *
     * @return $this
     */
    public function setBudgetedAmount($budgeted_amount)
    {
        $this->container['budgeted_amount'] = $budgeted_amount;

        return $this;
    }

    /**
     * Gets budgeted_number_of_products
     *
     * @return float
     */
    public function getBudgetedNumberOfProducts()
    {
        return $this->container['budgeted_number_of_products'];
    }

    /**
     * Sets budgeted_number_of_products
     *
     * @param float $budgeted_number_of_products budgeted_number_of_products
     *
     * @return $this
     */
    public function setBudgetedNumberOfProducts($budgeted_number_of_products)
    {
        $this->container['budgeted_number_of_products'] = $budgeted_number_of_products;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FinancialAdministrationGroup., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FinancialAdministrationGroup., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

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

