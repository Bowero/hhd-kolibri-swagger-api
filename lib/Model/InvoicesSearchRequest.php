<?php
/**
 * InvoicesSearchRequest
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
 * InvoicesSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesSearchRequest extends SearchRequest 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoicesSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_id' => 'string',
        'skip_system_invoices_are_missing_check' => 'bool',
        'status_filter' => '\Swagger\Client\Model\InvoiceStatus[]',
        'order_by' => 'object',
        'term_fields' => '\Swagger\Client\Model\InvoiceTermField[]',
        'parent_id' => 'string',
        'culture' => 'string',
        'overdue_from' => '\DateTime',
        'overdue_until' => '\DateTime',
        'invoice_date_from' => '\DateTime',
        'invoice_date_until' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_id' => 'guid',
        'skip_system_invoices_are_missing_check' => null,
        'status_filter' => null,
        'order_by' => null,
        'term_fields' => null,
        'parent_id' => 'guid',
        'culture' => null,
        'overdue_from' => 'date-time',
        'overdue_until' => 'date-time',
        'invoice_date_from' => 'date-time',
        'invoice_date_until' => 'date-time'
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
        'invoice_id' => 'invoiceId',
        'skip_system_invoices_are_missing_check' => 'skipSystemInvoicesAreMissingCheck',
        'status_filter' => 'statusFilter',
        'order_by' => 'orderBy',
        'term_fields' => 'termFields',
        'parent_id' => 'parentId',
        'culture' => 'culture',
        'overdue_from' => 'overdueFrom',
        'overdue_until' => 'overdueUntil',
        'invoice_date_from' => 'invoiceDateFrom',
        'invoice_date_until' => 'invoiceDateUntil'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'skip_system_invoices_are_missing_check' => 'setSkipSystemInvoicesAreMissingCheck',
        'status_filter' => 'setStatusFilter',
        'order_by' => 'setOrderBy',
        'term_fields' => 'setTermFields',
        'parent_id' => 'setParentId',
        'culture' => 'setCulture',
        'overdue_from' => 'setOverdueFrom',
        'overdue_until' => 'setOverdueUntil',
        'invoice_date_from' => 'setInvoiceDateFrom',
        'invoice_date_until' => 'setInvoiceDateUntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'skip_system_invoices_are_missing_check' => 'getSkipSystemInvoicesAreMissingCheck',
        'status_filter' => 'getStatusFilter',
        'order_by' => 'getOrderBy',
        'term_fields' => 'getTermFields',
        'parent_id' => 'getParentId',
        'culture' => 'getCulture',
        'overdue_from' => 'getOverdueFrom',
        'overdue_until' => 'getOverdueUntil',
        'invoice_date_from' => 'getInvoiceDateFrom',
        'invoice_date_until' => 'getInvoiceDateUntil'
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

        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['skip_system_invoices_are_missing_check'] = isset($data['skip_system_invoices_are_missing_check']) ? $data['skip_system_invoices_are_missing_check'] : null;
        $this->container['status_filter'] = isset($data['status_filter']) ? $data['status_filter'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['term_fields'] = isset($data['term_fields']) ? $data['term_fields'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['overdue_from'] = isset($data['overdue_from']) ? $data['overdue_from'] : null;
        $this->container['overdue_until'] = isset($data['overdue_until']) ? $data['overdue_until'] : null;
        $this->container['invoice_date_from'] = isset($data['invoice_date_from']) ? $data['invoice_date_from'] : null;
        $this->container['invoice_date_until'] = isset($data['invoice_date_until']) ? $data['invoice_date_until'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id Search by a specific invoice Id. Used to return/refresh one search result.
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets skip_system_invoices_are_missing_check
     *
     * @return bool
     */
    public function getSkipSystemInvoicesAreMissingCheck()
    {
        return $this->container['skip_system_invoices_are_missing_check'];
    }

    /**
     * Sets skip_system_invoices_are_missing_check
     *
     * @param bool $skip_system_invoices_are_missing_check Search by a specific invoice Id. Used to return/refresh one search result.
     *
     * @return $this
     */
    public function setSkipSystemInvoicesAreMissingCheck($skip_system_invoices_are_missing_check)
    {
        $this->container['skip_system_invoices_are_missing_check'] = $skip_system_invoices_are_missing_check;

        return $this;
    }

    /**
     * Gets status_filter
     *
     * @return \Swagger\Client\Model\InvoiceStatus[]
     */
    public function getStatusFilter()
    {
        return $this->container['status_filter'];
    }

    /**
     * Sets status_filter
     *
     * @param \Swagger\Client\Model\InvoiceStatus[] $status_filter Only return invoices with given status.
     *
     * @return $this
     */
    public function setStatusFilter($status_filter)
    {
        $this->container['status_filter'] = $status_filter;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return object
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param object $order_by Order the results by the indicated invoice field.
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Swagger\Client\Model\InvoiceTermField[]
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Swagger\Client\Model\InvoiceTermField[] $term_fields term_fields
     *
     * @return $this
     */
    public function setTermFields($term_fields)
    {
        $this->container['term_fields'] = $term_fields;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id Specify a parent ID to search invoices based on either an Assignment id or a Relation id.
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture The culture name in the format languagecode2-contry/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\")
     *
     * @return $this
     */
    public function setCulture($culture)
    {
        if (!is_null($culture) && (mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling InvoicesSearchRequest., must be smaller than or equal to 5.');
        }
        if (!is_null($culture) && (mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling InvoicesSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets overdue_from
     *
     * @return \DateTime
     */
    public function getOverdueFrom()
    {
        return $this->container['overdue_from'];
    }

    /**
     * Sets overdue_from
     *
     * @param \DateTime $overdue_from overdue_from
     *
     * @return $this
     */
    public function setOverdueFrom($overdue_from)
    {
        $this->container['overdue_from'] = $overdue_from;

        return $this;
    }

    /**
     * Gets overdue_until
     *
     * @return \DateTime
     */
    public function getOverdueUntil()
    {
        return $this->container['overdue_until'];
    }

    /**
     * Sets overdue_until
     *
     * @param \DateTime $overdue_until overdue_until
     *
     * @return $this
     */
    public function setOverdueUntil($overdue_until)
    {
        $this->container['overdue_until'] = $overdue_until;

        return $this;
    }

    /**
     * Gets invoice_date_from
     *
     * @return \DateTime
     */
    public function getInvoiceDateFrom()
    {
        return $this->container['invoice_date_from'];
    }

    /**
     * Sets invoice_date_from
     *
     * @param \DateTime $invoice_date_from invoice_date_from
     *
     * @return $this
     */
    public function setInvoiceDateFrom($invoice_date_from)
    {
        $this->container['invoice_date_from'] = $invoice_date_from;

        return $this;
    }

    /**
     * Gets invoice_date_until
     *
     * @return \DateTime
     */
    public function getInvoiceDateUntil()
    {
        return $this->container['invoice_date_until'];
    }

    /**
     * Sets invoice_date_until
     *
     * @param \DateTime $invoice_date_until invoice_date_until
     *
     * @return $this
     */
    public function setInvoiceDateUntil($invoice_date_until)
    {
        $this->container['invoice_date_until'] = $invoice_date_until;

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


