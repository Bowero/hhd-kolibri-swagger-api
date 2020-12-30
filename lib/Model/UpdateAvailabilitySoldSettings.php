<?php
/**
 * UpdateAvailabilitySoldSettings
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
 * UpdateAvailabilitySoldSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateAvailabilitySoldSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateAvailabilitySoldSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_of_transfer' => '\DateTime',
        'date_reservation' => '\DateTime',
        'date_agreement' => '\DateTime',
        'date_sold' => '\DateTime',
        'end_date_bank_warranty' => '\DateTime',
        'linked_applicants' => '\Swagger\Client\Model\LinkedRelation[]',
        'linked_notaries' => '\Swagger\Client\Model\LinkedRelation[]',
        'transaction_price' => 'float',
        'is_sale_and_lease_back' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_of_transfer' => 'date-time',
        'date_reservation' => 'date-time',
        'date_agreement' => 'date-time',
        'date_sold' => 'date-time',
        'end_date_bank_warranty' => 'date-time',
        'linked_applicants' => null,
        'linked_notaries' => null,
        'transaction_price' => 'decimal',
        'is_sale_and_lease_back' => null
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
        'date_of_transfer' => 'dateOfTransfer',
        'date_reservation' => 'dateReservation',
        'date_agreement' => 'dateAgreement',
        'date_sold' => 'dateSold',
        'end_date_bank_warranty' => 'endDateBankWarranty',
        'linked_applicants' => 'linkedApplicants',
        'linked_notaries' => 'linkedNotaries',
        'transaction_price' => 'transactionPrice',
        'is_sale_and_lease_back' => 'isSaleAndLeaseBack'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_transfer' => 'setDateOfTransfer',
        'date_reservation' => 'setDateReservation',
        'date_agreement' => 'setDateAgreement',
        'date_sold' => 'setDateSold',
        'end_date_bank_warranty' => 'setEndDateBankWarranty',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_notaries' => 'setLinkedNotaries',
        'transaction_price' => 'setTransactionPrice',
        'is_sale_and_lease_back' => 'setIsSaleAndLeaseBack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_transfer' => 'getDateOfTransfer',
        'date_reservation' => 'getDateReservation',
        'date_agreement' => 'getDateAgreement',
        'date_sold' => 'getDateSold',
        'end_date_bank_warranty' => 'getEndDateBankWarranty',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_notaries' => 'getLinkedNotaries',
        'transaction_price' => 'getTransactionPrice',
        'is_sale_and_lease_back' => 'getIsSaleAndLeaseBack'
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
        $this->container['date_of_transfer'] = isset($data['date_of_transfer']) ? $data['date_of_transfer'] : null;
        $this->container['date_reservation'] = isset($data['date_reservation']) ? $data['date_reservation'] : null;
        $this->container['date_agreement'] = isset($data['date_agreement']) ? $data['date_agreement'] : null;
        $this->container['date_sold'] = isset($data['date_sold']) ? $data['date_sold'] : null;
        $this->container['end_date_bank_warranty'] = isset($data['end_date_bank_warranty']) ? $data['end_date_bank_warranty'] : null;
        $this->container['linked_applicants'] = isset($data['linked_applicants']) ? $data['linked_applicants'] : null;
        $this->container['linked_notaries'] = isset($data['linked_notaries']) ? $data['linked_notaries'] : null;
        $this->container['transaction_price'] = isset($data['transaction_price']) ? $data['transaction_price'] : null;
        $this->container['is_sale_and_lease_back'] = isset($data['is_sale_and_lease_back']) ? $data['is_sale_and_lease_back'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['date_sold'] === null) {
            $invalidProperties[] = "'date_sold' can't be null";
        }
        if ($this->container['transaction_price'] === null) {
            $invalidProperties[] = "'transaction_price' can't be null";
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
     * Gets date_of_transfer
     *
     * @return \DateTime
     */
    public function getDateOfTransfer()
    {
        return $this->container['date_of_transfer'];
    }

    /**
     * Sets date_of_transfer
     *
     * @param \DateTime $date_of_transfer In Dutch: Datum transport.
     *
     * @return $this
     */
    public function setDateOfTransfer($date_of_transfer)
    {
        $this->container['date_of_transfer'] = $date_of_transfer;

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
     * @param \DateTime $date_reservation In Dutch: Datum voorbehoud.
     *
     * @return $this
     */
    public function setDateReservation($date_reservation)
    {
        $this->container['date_reservation'] = $date_reservation;

        return $this;
    }

    /**
     * Gets date_agreement
     *
     * @return \DateTime
     */
    public function getDateAgreement()
    {
        return $this->container['date_agreement'];
    }

    /**
     * Sets date_agreement
     *
     * @param \DateTime $date_agreement date_agreement
     *
     * @return $this
     */
    public function setDateAgreement($date_agreement)
    {
        $this->container['date_agreement'] = $date_agreement;

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
     * @param \DateTime $end_date_bank_warranty In Dutch: Einddatum bankgarantie.
     *
     * @return $this
     */
    public function setEndDateBankWarranty($end_date_bank_warranty)
    {
        $this->container['end_date_bank_warranty'] = $end_date_bank_warranty;

        return $this;
    }

    /**
     * Gets linked_applicants
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedApplicants()
    {
        return $this->container['linked_applicants'];
    }

    /**
     * Sets linked_applicants
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_applicants linked_applicants
     *
     * @return $this
     */
    public function setLinkedApplicants($linked_applicants)
    {
        $this->container['linked_applicants'] = $linked_applicants;

        return $this;
    }

    /**
     * Gets linked_notaries
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedNotaries()
    {
        return $this->container['linked_notaries'];
    }

    /**
     * Sets linked_notaries
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_notaries linked_notaries
     *
     * @return $this
     */
    public function setLinkedNotaries($linked_notaries)
    {
        $this->container['linked_notaries'] = $linked_notaries;

        return $this;
    }

    /**
     * Gets transaction_price
     *
     * @return float
     */
    public function getTransactionPrice()
    {
        return $this->container['transaction_price'];
    }

    /**
     * Sets transaction_price
     *
     * @param float $transaction_price In Dutch: Datum transport.
     *
     * @return $this
     */
    public function setTransactionPrice($transaction_price)
    {
        $this->container['transaction_price'] = $transaction_price;

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


