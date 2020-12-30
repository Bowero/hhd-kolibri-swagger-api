<?php
/**
 * LinkedInvoice
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
 * LinkedInvoice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkedInvoice extends LinkedItem 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LinkedInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency' => 'string',
        'due_date' => '\DateTime',
        'invoice_date' => '\DateTime',
        'number' => 'string',
        'purpose' => 'string',
        'status' => '\Swagger\Client\Model\InvoiceStatus',
        'total_price_gross' => 'float',
        'total_price_net' => 'float',
        'total_tax' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency' => null,
        'due_date' => 'date-time',
        'invoice_date' => 'date-time',
        'number' => null,
        'purpose' => null,
        'status' => null,
        'total_price_gross' => 'decimal',
        'total_price_net' => 'decimal',
        'total_tax' => 'decimal'
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
        'currency' => 'currency',
        'due_date' => 'dueDate',
        'invoice_date' => 'invoiceDate',
        'number' => 'number',
        'purpose' => 'purpose',
        'status' => 'status',
        'total_price_gross' => 'totalPriceGross',
        'total_price_net' => 'totalPriceNet',
        'total_tax' => 'totalTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'due_date' => 'setDueDate',
        'invoice_date' => 'setInvoiceDate',
        'number' => 'setNumber',
        'purpose' => 'setPurpose',
        'status' => 'setStatus',
        'total_price_gross' => 'setTotalPriceGross',
        'total_price_net' => 'setTotalPriceNet',
        'total_tax' => 'setTotalTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'due_date' => 'getDueDate',
        'invoice_date' => 'getInvoiceDate',
        'number' => 'getNumber',
        'purpose' => 'getPurpose',
        'status' => 'getStatus',
        'total_price_gross' => 'getTotalPriceGross',
        'total_price_net' => 'getTotalPriceNet',
        'total_tax' => 'getTotalTax'
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

        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['total_price_gross'] = isset($data['total_price_gross']) ? $data['total_price_gross'] : null;
        $this->container['total_price_net'] = isset($data['total_price_net']) ? $data['total_price_net'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose purpose
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\InvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\InvoiceStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets total_price_gross
     *
     * @return float
     */
    public function getTotalPriceGross()
    {
        return $this->container['total_price_gross'];
    }

    /**
     * Sets total_price_gross
     *
     * @param float $total_price_gross total_price_gross
     *
     * @return $this
     */
    public function setTotalPriceGross($total_price_gross)
    {
        $this->container['total_price_gross'] = $total_price_gross;

        return $this;
    }

    /**
     * Gets total_price_net
     *
     * @return float
     */
    public function getTotalPriceNet()
    {
        return $this->container['total_price_net'];
    }

    /**
     * Sets total_price_net
     *
     * @param float $total_price_net total_price_net
     *
     * @return $this
     */
    public function setTotalPriceNet($total_price_net)
    {
        $this->container['total_price_net'] = $total_price_net;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float $total_tax total_tax
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

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

