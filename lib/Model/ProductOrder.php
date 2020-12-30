<?php
/**
 * ProductOrder
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
 * ProductOrder Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_to_customer_budget' => 'bool',
        'date_time' => '\DateTime',
        'description' => 'string',
        'financial_administration_id' => 'string',
        'financial_administration_product_id' => 'int',
        'id' => 'string',
        'linked_invoice' => '\Swagger\Client\Model\LinkedInvoice',
        'unit_price_net' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_to_customer_budget' => null,
        'date_time' => 'date-time',
        'description' => null,
        'financial_administration_id' => 'guid',
        'financial_administration_product_id' => 'int32',
        'id' => 'guid',
        'linked_invoice' => null,
        'unit_price_net' => 'decimal'
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
        'charge_to_customer_budget' => 'chargeToCustomerBudget',
        'date_time' => 'dateTime',
        'description' => 'description',
        'financial_administration_id' => 'financialAdministrationId',
        'financial_administration_product_id' => 'financialAdministrationProductId',
        'id' => 'id',
        'linked_invoice' => 'linkedInvoice',
        'unit_price_net' => 'unitPriceNet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_to_customer_budget' => 'setChargeToCustomerBudget',
        'date_time' => 'setDateTime',
        'description' => 'setDescription',
        'financial_administration_id' => 'setFinancialAdministrationId',
        'financial_administration_product_id' => 'setFinancialAdministrationProductId',
        'id' => 'setId',
        'linked_invoice' => 'setLinkedInvoice',
        'unit_price_net' => 'setUnitPriceNet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_to_customer_budget' => 'getChargeToCustomerBudget',
        'date_time' => 'getDateTime',
        'description' => 'getDescription',
        'financial_administration_id' => 'getFinancialAdministrationId',
        'financial_administration_product_id' => 'getFinancialAdministrationProductId',
        'id' => 'getId',
        'linked_invoice' => 'getLinkedInvoice',
        'unit_price_net' => 'getUnitPriceNet'
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
        $this->container['charge_to_customer_budget'] = isset($data['charge_to_customer_budget']) ? $data['charge_to_customer_budget'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['financial_administration_id'] = isset($data['financial_administration_id']) ? $data['financial_administration_id'] : null;
        $this->container['financial_administration_product_id'] = isset($data['financial_administration_product_id']) ? $data['financial_administration_product_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['linked_invoice'] = isset($data['linked_invoice']) ? $data['linked_invoice'] : null;
        $this->container['unit_price_net'] = isset($data['unit_price_net']) ? $data['unit_price_net'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['charge_to_customer_budget'] === null) {
            $invalidProperties[] = "'charge_to_customer_budget' can't be null";
        }
        if ($this->container['date_time'] === null) {
            $invalidProperties[] = "'date_time' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['unit_price_net'] === null) {
            $invalidProperties[] = "'unit_price_net' can't be null";
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
     * Gets charge_to_customer_budget
     *
     * @return bool
     */
    public function getChargeToCustomerBudget()
    {
        return $this->container['charge_to_customer_budget'];
    }

    /**
     * Sets charge_to_customer_budget
     *
     * @param bool $charge_to_customer_budget charge_to_customer_budget
     *
     * @return $this
     */
    public function setChargeToCustomerBudget($charge_to_customer_budget)
    {
        $this->container['charge_to_customer_budget'] = $charge_to_customer_budget;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time date_time
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

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
     * Gets financial_administration_id
     *
     * @return string
     */
    public function getFinancialAdministrationId()
    {
        return $this->container['financial_administration_id'];
    }

    /**
     * Sets financial_administration_id
     *
     * @param string $financial_administration_id financial_administration_id
     *
     * @return $this
     */
    public function setFinancialAdministrationId($financial_administration_id)
    {
        $this->container['financial_administration_id'] = $financial_administration_id;

        return $this;
    }

    /**
     * Gets financial_administration_product_id
     *
     * @return int
     */
    public function getFinancialAdministrationProductId()
    {
        return $this->container['financial_administration_product_id'];
    }

    /**
     * Sets financial_administration_product_id
     *
     * @param int $financial_administration_product_id financial_administration_product_id
     *
     * @return $this
     */
    public function setFinancialAdministrationProductId($financial_administration_product_id)
    {
        $this->container['financial_administration_product_id'] = $financial_administration_product_id;

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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets linked_invoice
     *
     * @return \Swagger\Client\Model\LinkedInvoice
     */
    public function getLinkedInvoice()
    {
        return $this->container['linked_invoice'];
    }

    /**
     * Sets linked_invoice
     *
     * @param \Swagger\Client\Model\LinkedInvoice $linked_invoice linked_invoice
     *
     * @return $this
     */
    public function setLinkedInvoice($linked_invoice)
    {
        $this->container['linked_invoice'] = $linked_invoice;

        return $this;
    }

    /**
     * Gets unit_price_net
     *
     * @return float
     */
    public function getUnitPriceNet()
    {
        return $this->container['unit_price_net'];
    }

    /**
     * Sets unit_price_net
     *
     * @param float $unit_price_net unit_price_net
     *
     * @return $this
     */
    public function setUnitPriceNet($unit_price_net)
    {
        $this->container['unit_price_net'] = $unit_price_net;

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

