<?php
/**
 * SaleOffer
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
 * SaleOffer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaleOffer extends Offer 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaleOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_date' => '\DateTime',
        'buy_price_office_space' => 'float',
        'buy_price_terrain' => 'float',
        'date_auction' => '\DateTime',
        'date_reservation' => '\DateTime',
        'date_sold' => '\DateTime',
        'date_transfer' => '\DateTime',
        'description' => '\Swagger\Client\Model\TranslatedText[]',
        'deviation' => 'int',
        'end_date_bank_warranty' => '\DateTime',
        'intermediate_form' => '\Swagger\Client\Model\IntermediateForm',
        'is_sale_and_lease_back' => 'bool',
        'price_per_unit' => 'float',
        'price_per_unit_size' => '\Swagger\Client\Model\UnitSize',
        'purchase_price' => 'float',
        'target_purchase_price' => 'float',
        'sale_commission_total' => 'float',
        'sale_condition' => '\Swagger\Client\Model\SaleCondition',
        'sale_price' => 'float',
        'sale_price_max' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_date' => 'date-time',
        'buy_price_office_space' => 'decimal',
        'buy_price_terrain' => 'decimal',
        'date_auction' => 'date-time',
        'date_reservation' => 'date-time',
        'date_sold' => 'date-time',
        'date_transfer' => 'date-time',
        'description' => null,
        'deviation' => 'int32',
        'end_date_bank_warranty' => 'date-time',
        'intermediate_form' => null,
        'is_sale_and_lease_back' => null,
        'price_per_unit' => 'decimal',
        'price_per_unit_size' => null,
        'purchase_price' => 'decimal',
        'target_purchase_price' => 'decimal',
        'sale_commission_total' => 'decimal',
        'sale_condition' => null,
        'sale_price' => 'decimal',
        'sale_price_max' => 'decimal'
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
        'agreement_date' => 'agreementDate',
        'buy_price_office_space' => 'buyPriceOfficeSpace',
        'buy_price_terrain' => 'buyPriceTerrain',
        'date_auction' => 'dateAuction',
        'date_reservation' => 'dateReservation',
        'date_sold' => 'dateSold',
        'date_transfer' => 'dateTransfer',
        'description' => 'description',
        'deviation' => 'deviation',
        'end_date_bank_warranty' => 'endDateBankWarranty',
        'intermediate_form' => 'intermediateForm',
        'is_sale_and_lease_back' => 'isSaleAndLeaseBack',
        'price_per_unit' => 'pricePerUnit',
        'price_per_unit_size' => 'pricePerUnitSize',
        'purchase_price' => 'purchasePrice',
        'target_purchase_price' => 'targetPurchasePrice',
        'sale_commission_total' => 'saleCommissionTotal',
        'sale_condition' => 'saleCondition',
        'sale_price' => 'salePrice',
        'sale_price_max' => 'salePriceMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_date' => 'setAgreementDate',
        'buy_price_office_space' => 'setBuyPriceOfficeSpace',
        'buy_price_terrain' => 'setBuyPriceTerrain',
        'date_auction' => 'setDateAuction',
        'date_reservation' => 'setDateReservation',
        'date_sold' => 'setDateSold',
        'date_transfer' => 'setDateTransfer',
        'description' => 'setDescription',
        'deviation' => 'setDeviation',
        'end_date_bank_warranty' => 'setEndDateBankWarranty',
        'intermediate_form' => 'setIntermediateForm',
        'is_sale_and_lease_back' => 'setIsSaleAndLeaseBack',
        'price_per_unit' => 'setPricePerUnit',
        'price_per_unit_size' => 'setPricePerUnitSize',
        'purchase_price' => 'setPurchasePrice',
        'target_purchase_price' => 'setTargetPurchasePrice',
        'sale_commission_total' => 'setSaleCommissionTotal',
        'sale_condition' => 'setSaleCondition',
        'sale_price' => 'setSalePrice',
        'sale_price_max' => 'setSalePriceMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_date' => 'getAgreementDate',
        'buy_price_office_space' => 'getBuyPriceOfficeSpace',
        'buy_price_terrain' => 'getBuyPriceTerrain',
        'date_auction' => 'getDateAuction',
        'date_reservation' => 'getDateReservation',
        'date_sold' => 'getDateSold',
        'date_transfer' => 'getDateTransfer',
        'description' => 'getDescription',
        'deviation' => 'getDeviation',
        'end_date_bank_warranty' => 'getEndDateBankWarranty',
        'intermediate_form' => 'getIntermediateForm',
        'is_sale_and_lease_back' => 'getIsSaleAndLeaseBack',
        'price_per_unit' => 'getPricePerUnit',
        'price_per_unit_size' => 'getPricePerUnitSize',
        'purchase_price' => 'getPurchasePrice',
        'target_purchase_price' => 'getTargetPurchasePrice',
        'sale_commission_total' => 'getSaleCommissionTotal',
        'sale_condition' => 'getSaleCondition',
        'sale_price' => 'getSalePrice',
        'sale_price_max' => 'getSalePriceMax'
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

        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['buy_price_office_space'] = isset($data['buy_price_office_space']) ? $data['buy_price_office_space'] : null;
        $this->container['buy_price_terrain'] = isset($data['buy_price_terrain']) ? $data['buy_price_terrain'] : null;
        $this->container['date_auction'] = isset($data['date_auction']) ? $data['date_auction'] : null;
        $this->container['date_reservation'] = isset($data['date_reservation']) ? $data['date_reservation'] : null;
        $this->container['date_sold'] = isset($data['date_sold']) ? $data['date_sold'] : null;
        $this->container['date_transfer'] = isset($data['date_transfer']) ? $data['date_transfer'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deviation'] = isset($data['deviation']) ? $data['deviation'] : null;
        $this->container['end_date_bank_warranty'] = isset($data['end_date_bank_warranty']) ? $data['end_date_bank_warranty'] : null;
        $this->container['intermediate_form'] = isset($data['intermediate_form']) ? $data['intermediate_form'] : null;
        $this->container['is_sale_and_lease_back'] = isset($data['is_sale_and_lease_back']) ? $data['is_sale_and_lease_back'] : null;
        $this->container['price_per_unit'] = isset($data['price_per_unit']) ? $data['price_per_unit'] : null;
        $this->container['price_per_unit_size'] = isset($data['price_per_unit_size']) ? $data['price_per_unit_size'] : null;
        $this->container['purchase_price'] = isset($data['purchase_price']) ? $data['purchase_price'] : null;
        $this->container['target_purchase_price'] = isset($data['target_purchase_price']) ? $data['target_purchase_price'] : null;
        $this->container['sale_commission_total'] = isset($data['sale_commission_total']) ? $data['sale_commission_total'] : null;
        $this->container['sale_condition'] = isset($data['sale_condition']) ? $data['sale_condition'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['sale_price_max'] = isset($data['sale_price_max']) ? $data['sale_price_max'] : null;
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
     * Gets agreement_date
     *
     * @return \DateTime
     */
    public function getAgreementDate()
    {
        return $this->container['agreement_date'];
    }

    /**
     * Sets agreement_date
     *
     * @param \DateTime $agreement_date agreement_date
     *
     * @return $this
     */
    public function setAgreementDate($agreement_date)
    {
        $this->container['agreement_date'] = $agreement_date;

        return $this;
    }

    /**
     * Gets buy_price_office_space
     *
     * @return float
     */
    public function getBuyPriceOfficeSpace()
    {
        return $this->container['buy_price_office_space'];
    }

    /**
     * Sets buy_price_office_space
     *
     * @param float $buy_price_office_space buy_price_office_space
     *
     * @return $this
     */
    public function setBuyPriceOfficeSpace($buy_price_office_space)
    {
        $this->container['buy_price_office_space'] = $buy_price_office_space;

        return $this;
    }

    /**
     * Gets buy_price_terrain
     *
     * @return float
     */
    public function getBuyPriceTerrain()
    {
        return $this->container['buy_price_terrain'];
    }

    /**
     * Sets buy_price_terrain
     *
     * @param float $buy_price_terrain buy_price_terrain
     *
     * @return $this
     */
    public function setBuyPriceTerrain($buy_price_terrain)
    {
        $this->container['buy_price_terrain'] = $buy_price_terrain;

        return $this;
    }

    /**
     * Gets date_auction
     *
     * @return \DateTime
     */
    public function getDateAuction()
    {
        return $this->container['date_auction'];
    }

    /**
     * Sets date_auction
     *
     * @param \DateTime $date_auction date_auction
     *
     * @return $this
     */
    public function setDateAuction($date_auction)
    {
        $this->container['date_auction'] = $date_auction;

        return $this;
    }

    /**
     * Gets date_reservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->container['date_reservation'];
    }

    /**
     * Sets date_reservation
     *
     * @param \DateTime $date_reservation date_reservation
     *
     * @return $this
     */
    public function setDateReservation($date_reservation)
    {
        $this->container['date_reservation'] = $date_reservation;

        return $this;
    }

    /**
     * Gets date_sold
     *
     * @return \DateTime
     */
    public function getDateSold()
    {
        return $this->container['date_sold'];
    }

    /**
     * Sets date_sold
     *
     * @param \DateTime $date_sold date_sold
     *
     * @return $this
     */
    public function setDateSold($date_sold)
    {
        $this->container['date_sold'] = $date_sold;

        return $this;
    }

    /**
     * Gets date_transfer
     *
     * @return \DateTime
     */
    public function getDateTransfer()
    {
        return $this->container['date_transfer'];
    }

    /**
     * Sets date_transfer
     *
     * @param \DateTime $date_transfer date_transfer
     *
     * @return $this
     */
    public function setDateTransfer($date_transfer)
    {
        $this->container['date_transfer'] = $date_transfer;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Swagger\Client\Model\TranslatedText[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Swagger\Client\Model\TranslatedText[] $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets deviation
     *
     * @return int
     */
    public function getDeviation()
    {
        return $this->container['deviation'];
    }

    /**
     * Sets deviation
     *
     * @param int $deviation deviation
     *
     * @return $this
     */
    public function setDeviation($deviation)
    {
        $this->container['deviation'] = $deviation;

        return $this;
    }

    /**
     * Gets end_date_bank_warranty
     *
     * @return \DateTime
     */
    public function getEndDateBankWarranty()
    {
        return $this->container['end_date_bank_warranty'];
    }

    /**
     * Sets end_date_bank_warranty
     *
     * @param \DateTime $end_date_bank_warranty end_date_bank_warranty
     *
     * @return $this
     */
    public function setEndDateBankWarranty($end_date_bank_warranty)
    {
        $this->container['end_date_bank_warranty'] = $end_date_bank_warranty;

        return $this;
    }

    /**
     * Gets intermediate_form
     *
     * @return \Swagger\Client\Model\IntermediateForm
     */
    public function getIntermediateForm()
    {
        return $this->container['intermediate_form'];
    }

    /**
     * Sets intermediate_form
     *
     * @param \Swagger\Client\Model\IntermediateForm $intermediate_form intermediate_form
     *
     * @return $this
     */
    public function setIntermediateForm($intermediate_form)
    {
        $this->container['intermediate_form'] = $intermediate_form;

        return $this;
    }

    /**
     * Gets is_sale_and_lease_back
     *
     * @return bool
     */
    public function getIsSaleAndLeaseBack()
    {
        return $this->container['is_sale_and_lease_back'];
    }

    /**
     * Sets is_sale_and_lease_back
     *
     * @param bool $is_sale_and_lease_back is_sale_and_lease_back
     *
     * @return $this
     */
    public function setIsSaleAndLeaseBack($is_sale_and_lease_back)
    {
        $this->container['is_sale_and_lease_back'] = $is_sale_and_lease_back;

        return $this;
    }

    /**
     * Gets price_per_unit
     *
     * @return float
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param float $price_per_unit price_per_unit
     *
     * @return $this
     */
    public function setPricePerUnit($price_per_unit)
    {
        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }

    /**
     * Gets price_per_unit_size
     *
     * @return \Swagger\Client\Model\UnitSize
     */
    public function getPricePerUnitSize()
    {
        return $this->container['price_per_unit_size'];
    }

    /**
     * Sets price_per_unit_size
     *
     * @param \Swagger\Client\Model\UnitSize $price_per_unit_size price_per_unit_size
     *
     * @return $this
     */
    public function setPricePerUnitSize($price_per_unit_size)
    {
        $this->container['price_per_unit_size'] = $price_per_unit_size;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float $purchase_price In Dutch: gerealiseerde prijs.
     *
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets target_purchase_price
     *
     * @return float
     */
    public function getTargetPurchasePrice()
    {
        return $this->container['target_purchase_price'];
    }

    /**
     * Sets target_purchase_price
     *
     * @param float $target_purchase_price target_purchase_price
     *
     * @return $this
     */
    public function setTargetPurchasePrice($target_purchase_price)
    {
        $this->container['target_purchase_price'] = $target_purchase_price;

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
     * Gets sale_condition
     *
     * @return \Swagger\Client\Model\SaleCondition
     */
    public function getSaleCondition()
    {
        return $this->container['sale_condition'];
    }

    /**
     * Sets sale_condition
     *
     * @param \Swagger\Client\Model\SaleCondition $sale_condition sale_condition
     *
     * @return $this
     */
    public function setSaleCondition($sale_condition)
    {
        $this->container['sale_condition'] = $sale_condition;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float $sale_price sale_price
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets sale_price_max
     *
     * @return float
     */
    public function getSalePriceMax()
    {
        return $this->container['sale_price_max'];
    }

    /**
     * Sets sale_price_max
     *
     * @param float $sale_price_max sale_price_max
     *
     * @return $this
     */
    public function setSalePriceMax($sale_price_max)
    {
        $this->container['sale_price_max'] = $sale_price_max;

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

