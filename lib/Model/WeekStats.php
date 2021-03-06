<?php
/**
 * WeekStats
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
 * WeekStats Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WeekStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WeekStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'year' => 'int',
        'week_nr' => 'int',
        'sale_commission_total' => 'float',
        'rent_commission_total' => 'float',
        'nr_of_transactions' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'year' => 'int32',
        'week_nr' => 'int32',
        'sale_commission_total' => 'decimal',
        'rent_commission_total' => 'decimal',
        'nr_of_transactions' => 'int32'
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
        'year' => 'year',
        'week_nr' => 'weekNr',
        'sale_commission_total' => 'saleCommissionTotal',
        'rent_commission_total' => 'rentCommissionTotal',
        'nr_of_transactions' => 'nrOfTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year' => 'setYear',
        'week_nr' => 'setWeekNr',
        'sale_commission_total' => 'setSaleCommissionTotal',
        'rent_commission_total' => 'setRentCommissionTotal',
        'nr_of_transactions' => 'setNrOfTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year' => 'getYear',
        'week_nr' => 'getWeekNr',
        'sale_commission_total' => 'getSaleCommissionTotal',
        'rent_commission_total' => 'getRentCommissionTotal',
        'nr_of_transactions' => 'getNrOfTransactions'
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
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['week_nr'] = isset($data['week_nr']) ? $data['week_nr'] : null;
        $this->container['sale_commission_total'] = isset($data['sale_commission_total']) ? $data['sale_commission_total'] : null;
        $this->container['rent_commission_total'] = isset($data['rent_commission_total']) ? $data['rent_commission_total'] : null;
        $this->container['nr_of_transactions'] = isset($data['nr_of_transactions']) ? $data['nr_of_transactions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
        }
        if ($this->container['week_nr'] === null) {
            $invalidProperties[] = "'week_nr' can't be null";
        }
        if ($this->container['sale_commission_total'] === null) {
            $invalidProperties[] = "'sale_commission_total' can't be null";
        }
        if ($this->container['rent_commission_total'] === null) {
            $invalidProperties[] = "'rent_commission_total' can't be null";
        }
        if ($this->container['nr_of_transactions'] === null) {
            $invalidProperties[] = "'nr_of_transactions' can't be null";
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
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets week_nr
     *
     * @return int
     */
    public function getWeekNr()
    {
        return $this->container['week_nr'];
    }

    /**
     * Sets week_nr
     *
     * @param int $week_nr week_nr
     *
     * @return $this
     */
    public function setWeekNr($week_nr)
    {
        $this->container['week_nr'] = $week_nr;

        return $this;
    }

    /**
     * Gets sale_commission_total
     *
     * @return float
     */
    public function getSaleCommissionTotal()
    {
        return $this->container['sale_commission_total'];
    }

    /**
     * Sets sale_commission_total
     *
     * @param float $sale_commission_total sale_commission_total
     *
     * @return $this
     */
    public function setSaleCommissionTotal($sale_commission_total)
    {
        $this->container['sale_commission_total'] = $sale_commission_total;

        return $this;
    }

    /**
     * Gets rent_commission_total
     *
     * @return float
     */
    public function getRentCommissionTotal()
    {
        return $this->container['rent_commission_total'];
    }

    /**
     * Sets rent_commission_total
     *
     * @param float $rent_commission_total rent_commission_total
     *
     * @return $this
     */
    public function setRentCommissionTotal($rent_commission_total)
    {
        $this->container['rent_commission_total'] = $rent_commission_total;

        return $this;
    }

    /**
     * Gets nr_of_transactions
     *
     * @return int
     */
    public function getNrOfTransactions()
    {
        return $this->container['nr_of_transactions'];
    }

    /**
     * Sets nr_of_transactions
     *
     * @param int $nr_of_transactions nr_of_transactions
     *
     * @return $this
     */
    public function setNrOfTransactions($nr_of_transactions)
    {
        $this->container['nr_of_transactions'] = $nr_of_transactions;

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


