<?php
/**
 * MonthStats
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
 * MonthStats Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonthStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MonthStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'year' => 'int',
        'month' => 'int',
        'sum_sale_asking_price' => 'float',
        'sum_rent_asking_price' => 'float',
        'sum_sale_realised_price' => 'float',
        'sum_rent_realised_price' => 'float',
        'avg_processing_time_in_days' => 'int',
        'nr_of_transactions' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'year' => 'int32',
        'month' => 'int32',
        'sum_sale_asking_price' => 'decimal',
        'sum_rent_asking_price' => 'decimal',
        'sum_sale_realised_price' => 'decimal',
        'sum_rent_realised_price' => 'decimal',
        'avg_processing_time_in_days' => 'int32',
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
        'month' => 'month',
        'sum_sale_asking_price' => 'sumSaleAskingPrice',
        'sum_rent_asking_price' => 'sumRentAskingPrice',
        'sum_sale_realised_price' => 'sumSaleRealisedPrice',
        'sum_rent_realised_price' => 'sumRentRealisedPrice',
        'avg_processing_time_in_days' => 'avgProcessingTimeInDays',
        'nr_of_transactions' => 'nrOfTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year' => 'setYear',
        'month' => 'setMonth',
        'sum_sale_asking_price' => 'setSumSaleAskingPrice',
        'sum_rent_asking_price' => 'setSumRentAskingPrice',
        'sum_sale_realised_price' => 'setSumSaleRealisedPrice',
        'sum_rent_realised_price' => 'setSumRentRealisedPrice',
        'avg_processing_time_in_days' => 'setAvgProcessingTimeInDays',
        'nr_of_transactions' => 'setNrOfTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year' => 'getYear',
        'month' => 'getMonth',
        'sum_sale_asking_price' => 'getSumSaleAskingPrice',
        'sum_rent_asking_price' => 'getSumRentAskingPrice',
        'sum_sale_realised_price' => 'getSumSaleRealisedPrice',
        'sum_rent_realised_price' => 'getSumRentRealisedPrice',
        'avg_processing_time_in_days' => 'getAvgProcessingTimeInDays',
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['sum_sale_asking_price'] = isset($data['sum_sale_asking_price']) ? $data['sum_sale_asking_price'] : null;
        $this->container['sum_rent_asking_price'] = isset($data['sum_rent_asking_price']) ? $data['sum_rent_asking_price'] : null;
        $this->container['sum_sale_realised_price'] = isset($data['sum_sale_realised_price']) ? $data['sum_sale_realised_price'] : null;
        $this->container['sum_rent_realised_price'] = isset($data['sum_rent_realised_price']) ? $data['sum_rent_realised_price'] : null;
        $this->container['avg_processing_time_in_days'] = isset($data['avg_processing_time_in_days']) ? $data['avg_processing_time_in_days'] : null;
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
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['sum_sale_asking_price'] === null) {
            $invalidProperties[] = "'sum_sale_asking_price' can't be null";
        }
        if ($this->container['sum_rent_asking_price'] === null) {
            $invalidProperties[] = "'sum_rent_asking_price' can't be null";
        }
        if ($this->container['sum_sale_realised_price'] === null) {
            $invalidProperties[] = "'sum_sale_realised_price' can't be null";
        }
        if ($this->container['sum_rent_realised_price'] === null) {
            $invalidProperties[] = "'sum_rent_realised_price' can't be null";
        }
        if ($this->container['avg_processing_time_in_days'] === null) {
            $invalidProperties[] = "'avg_processing_time_in_days' can't be null";
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
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets sum_sale_asking_price
     *
     * @return float
     */
    public function getSumSaleAskingPrice()
    {
        return $this->container['sum_sale_asking_price'];
    }

    /**
     * Sets sum_sale_asking_price
     *
     * @param float $sum_sale_asking_price sum_sale_asking_price
     *
     * @return $this
     */
    public function setSumSaleAskingPrice($sum_sale_asking_price)
    {
        $this->container['sum_sale_asking_price'] = $sum_sale_asking_price;

        return $this;
    }

    /**
     * Gets sum_rent_asking_price
     *
     * @return float
     */
    public function getSumRentAskingPrice()
    {
        return $this->container['sum_rent_asking_price'];
    }

    /**
     * Sets sum_rent_asking_price
     *
     * @param float $sum_rent_asking_price sum_rent_asking_price
     *
     * @return $this
     */
    public function setSumRentAskingPrice($sum_rent_asking_price)
    {
        $this->container['sum_rent_asking_price'] = $sum_rent_asking_price;

        return $this;
    }

    /**
     * Gets sum_sale_realised_price
     *
     * @return float
     */
    public function getSumSaleRealisedPrice()
    {
        return $this->container['sum_sale_realised_price'];
    }

    /**
     * Sets sum_sale_realised_price
     *
     * @param float $sum_sale_realised_price sum_sale_realised_price
     *
     * @return $this
     */
    public function setSumSaleRealisedPrice($sum_sale_realised_price)
    {
        $this->container['sum_sale_realised_price'] = $sum_sale_realised_price;

        return $this;
    }

    /**
     * Gets sum_rent_realised_price
     *
     * @return float
     */
    public function getSumRentRealisedPrice()
    {
        return $this->container['sum_rent_realised_price'];
    }

    /**
     * Sets sum_rent_realised_price
     *
     * @param float $sum_rent_realised_price sum_rent_realised_price
     *
     * @return $this
     */
    public function setSumRentRealisedPrice($sum_rent_realised_price)
    {
        $this->container['sum_rent_realised_price'] = $sum_rent_realised_price;

        return $this;
    }

    /**
     * Gets avg_processing_time_in_days
     *
     * @return int
     */
    public function getAvgProcessingTimeInDays()
    {
        return $this->container['avg_processing_time_in_days'];
    }

    /**
     * Sets avg_processing_time_in_days
     *
     * @param int $avg_processing_time_in_days avg_processing_time_in_days
     *
     * @return $this
     */
    public function setAvgProcessingTimeInDays($avg_processing_time_in_days)
    {
        $this->container['avg_processing_time_in_days'] = $avg_processing_time_in_days;

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

