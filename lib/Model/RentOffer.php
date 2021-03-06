<?php
/**
 * RentOffer
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
 * RentOffer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RentOffer extends Offer 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RentOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'advance' => 'float',
        'availability_is_temporary' => 'bool',
        'available_from' => '\DateTime',
        'available_until' => '\DateTime',
        'basic_rent' => 'float',
        'commission_contact_months_rent' => 'float',
        'commission_customer_months_rent' => 'float',
        'commission_owner_months_rent' => 'float',
        'contract_free_rental_period_in_months' => 'int',
        'date_reservation' => '\DateTime',
        'deposit' => 'float',
        'furniture' => 'float',
        'inspection_list' => '\DateTime',
        'is_vacant_property_act' => 'bool',
        'maximum_lease_term' => '\Swagger\Client\Model\LeaseTerm',
        'minimum_lease_term' => '\Swagger\Client\Model\LeaseTerm',
        'points_evaluation_system' => 'int',
        'realized_per_month' => 'float',
        'rent_condition' => '\Swagger\Client\Model\RentCondition',
        'rented_from' => '\DateTime',
        'rented_until' => '\DateTime',
        'date_sign_deed' => '\DateTime',
        'rent_price' => 'float',
        'target_rent_price' => 'float',
        'rent_commission_total' => 'float',
        'rent_price_is_indexed' => 'bool',
        'rent_price_max' => 'float',
        'rent_price_office_space' => 'float',
        'rent_price_per_unit' => 'float',
        'rent_price_per_unit_size' => '\Swagger\Client\Model\UnitSize',
        'rent_price_terrain' => 'float',
        'rent_specifications' => '\Swagger\Client\Model\RentSpecification[]',
        'short_term' => 'bool',
        'soft_furnishings' => 'float',
        'start_date_rent' => '\DateTime',
        'value_assignment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'advance' => 'decimal',
        'availability_is_temporary' => null,
        'available_from' => 'date-time',
        'available_until' => 'date-time',
        'basic_rent' => 'decimal',
        'commission_contact_months_rent' => 'decimal',
        'commission_customer_months_rent' => 'decimal',
        'commission_owner_months_rent' => 'decimal',
        'contract_free_rental_period_in_months' => 'int32',
        'date_reservation' => 'date-time',
        'deposit' => 'decimal',
        'furniture' => 'decimal',
        'inspection_list' => 'date-time',
        'is_vacant_property_act' => null,
        'maximum_lease_term' => null,
        'minimum_lease_term' => null,
        'points_evaluation_system' => 'int32',
        'realized_per_month' => 'decimal',
        'rent_condition' => null,
        'rented_from' => 'date-time',
        'rented_until' => 'date-time',
        'date_sign_deed' => 'date-time',
        'rent_price' => 'decimal',
        'target_rent_price' => 'decimal',
        'rent_commission_total' => 'decimal',
        'rent_price_is_indexed' => null,
        'rent_price_max' => 'decimal',
        'rent_price_office_space' => 'decimal',
        'rent_price_per_unit' => 'decimal',
        'rent_price_per_unit_size' => null,
        'rent_price_terrain' => 'decimal',
        'rent_specifications' => null,
        'short_term' => null,
        'soft_furnishings' => 'decimal',
        'start_date_rent' => 'date-time',
        'value_assignment' => 'decimal'
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
        'advance' => 'advance',
        'availability_is_temporary' => 'availabilityIsTemporary',
        'available_from' => 'availableFrom',
        'available_until' => 'availableUntil',
        'basic_rent' => 'basicRent',
        'commission_contact_months_rent' => 'commissionContactMonthsRent',
        'commission_customer_months_rent' => 'commissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'commissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'contractFreeRentalPeriodInMonths',
        'date_reservation' => 'dateReservation',
        'deposit' => 'deposit',
        'furniture' => 'furniture',
        'inspection_list' => 'inspectionList',
        'is_vacant_property_act' => 'isVacantPropertyAct',
        'maximum_lease_term' => 'maximumLeaseTerm',
        'minimum_lease_term' => 'minimumLeaseTerm',
        'points_evaluation_system' => 'pointsEvaluationSystem',
        'realized_per_month' => 'realizedPerMonth',
        'rent_condition' => 'rentCondition',
        'rented_from' => 'rentedFrom',
        'rented_until' => 'rentedUntil',
        'date_sign_deed' => 'dateSignDeed',
        'rent_price' => 'rentPrice',
        'target_rent_price' => 'targetRentPrice',
        'rent_commission_total' => 'rentCommissionTotal',
        'rent_price_is_indexed' => 'rentPriceIsIndexed',
        'rent_price_max' => 'rentPriceMax',
        'rent_price_office_space' => 'rentPriceOfficeSpace',
        'rent_price_per_unit' => 'rentPricePerUnit',
        'rent_price_per_unit_size' => 'rentPricePerUnitSize',
        'rent_price_terrain' => 'rentPriceTerrain',
        'rent_specifications' => 'rentSpecifications',
        'short_term' => 'shortTerm',
        'soft_furnishings' => 'softFurnishings',
        'start_date_rent' => 'startDateRent',
        'value_assignment' => 'valueAssignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advance' => 'setAdvance',
        'availability_is_temporary' => 'setAvailabilityIsTemporary',
        'available_from' => 'setAvailableFrom',
        'available_until' => 'setAvailableUntil',
        'basic_rent' => 'setBasicRent',
        'commission_contact_months_rent' => 'setCommissionContactMonthsRent',
        'commission_customer_months_rent' => 'setCommissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'setCommissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'setContractFreeRentalPeriodInMonths',
        'date_reservation' => 'setDateReservation',
        'deposit' => 'setDeposit',
        'furniture' => 'setFurniture',
        'inspection_list' => 'setInspectionList',
        'is_vacant_property_act' => 'setIsVacantPropertyAct',
        'maximum_lease_term' => 'setMaximumLeaseTerm',
        'minimum_lease_term' => 'setMinimumLeaseTerm',
        'points_evaluation_system' => 'setPointsEvaluationSystem',
        'realized_per_month' => 'setRealizedPerMonth',
        'rent_condition' => 'setRentCondition',
        'rented_from' => 'setRentedFrom',
        'rented_until' => 'setRentedUntil',
        'date_sign_deed' => 'setDateSignDeed',
        'rent_price' => 'setRentPrice',
        'target_rent_price' => 'setTargetRentPrice',
        'rent_commission_total' => 'setRentCommissionTotal',
        'rent_price_is_indexed' => 'setRentPriceIsIndexed',
        'rent_price_max' => 'setRentPriceMax',
        'rent_price_office_space' => 'setRentPriceOfficeSpace',
        'rent_price_per_unit' => 'setRentPricePerUnit',
        'rent_price_per_unit_size' => 'setRentPricePerUnitSize',
        'rent_price_terrain' => 'setRentPriceTerrain',
        'rent_specifications' => 'setRentSpecifications',
        'short_term' => 'setShortTerm',
        'soft_furnishings' => 'setSoftFurnishings',
        'start_date_rent' => 'setStartDateRent',
        'value_assignment' => 'setValueAssignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advance' => 'getAdvance',
        'availability_is_temporary' => 'getAvailabilityIsTemporary',
        'available_from' => 'getAvailableFrom',
        'available_until' => 'getAvailableUntil',
        'basic_rent' => 'getBasicRent',
        'commission_contact_months_rent' => 'getCommissionContactMonthsRent',
        'commission_customer_months_rent' => 'getCommissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'getCommissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'getContractFreeRentalPeriodInMonths',
        'date_reservation' => 'getDateReservation',
        'deposit' => 'getDeposit',
        'furniture' => 'getFurniture',
        'inspection_list' => 'getInspectionList',
        'is_vacant_property_act' => 'getIsVacantPropertyAct',
        'maximum_lease_term' => 'getMaximumLeaseTerm',
        'minimum_lease_term' => 'getMinimumLeaseTerm',
        'points_evaluation_system' => 'getPointsEvaluationSystem',
        'realized_per_month' => 'getRealizedPerMonth',
        'rent_condition' => 'getRentCondition',
        'rented_from' => 'getRentedFrom',
        'rented_until' => 'getRentedUntil',
        'date_sign_deed' => 'getDateSignDeed',
        'rent_price' => 'getRentPrice',
        'target_rent_price' => 'getTargetRentPrice',
        'rent_commission_total' => 'getRentCommissionTotal',
        'rent_price_is_indexed' => 'getRentPriceIsIndexed',
        'rent_price_max' => 'getRentPriceMax',
        'rent_price_office_space' => 'getRentPriceOfficeSpace',
        'rent_price_per_unit' => 'getRentPricePerUnit',
        'rent_price_per_unit_size' => 'getRentPricePerUnitSize',
        'rent_price_terrain' => 'getRentPriceTerrain',
        'rent_specifications' => 'getRentSpecifications',
        'short_term' => 'getShortTerm',
        'soft_furnishings' => 'getSoftFurnishings',
        'start_date_rent' => 'getStartDateRent',
        'value_assignment' => 'getValueAssignment'
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

        $this->container['advance'] = isset($data['advance']) ? $data['advance'] : null;
        $this->container['availability_is_temporary'] = isset($data['availability_is_temporary']) ? $data['availability_is_temporary'] : null;
        $this->container['available_from'] = isset($data['available_from']) ? $data['available_from'] : null;
        $this->container['available_until'] = isset($data['available_until']) ? $data['available_until'] : null;
        $this->container['basic_rent'] = isset($data['basic_rent']) ? $data['basic_rent'] : null;
        $this->container['commission_contact_months_rent'] = isset($data['commission_contact_months_rent']) ? $data['commission_contact_months_rent'] : null;
        $this->container['commission_customer_months_rent'] = isset($data['commission_customer_months_rent']) ? $data['commission_customer_months_rent'] : null;
        $this->container['commission_owner_months_rent'] = isset($data['commission_owner_months_rent']) ? $data['commission_owner_months_rent'] : null;
        $this->container['contract_free_rental_period_in_months'] = isset($data['contract_free_rental_period_in_months']) ? $data['contract_free_rental_period_in_months'] : null;
        $this->container['date_reservation'] = isset($data['date_reservation']) ? $data['date_reservation'] : null;
        $this->container['deposit'] = isset($data['deposit']) ? $data['deposit'] : null;
        $this->container['furniture'] = isset($data['furniture']) ? $data['furniture'] : null;
        $this->container['inspection_list'] = isset($data['inspection_list']) ? $data['inspection_list'] : null;
        $this->container['is_vacant_property_act'] = isset($data['is_vacant_property_act']) ? $data['is_vacant_property_act'] : null;
        $this->container['maximum_lease_term'] = isset($data['maximum_lease_term']) ? $data['maximum_lease_term'] : null;
        $this->container['minimum_lease_term'] = isset($data['minimum_lease_term']) ? $data['minimum_lease_term'] : null;
        $this->container['points_evaluation_system'] = isset($data['points_evaluation_system']) ? $data['points_evaluation_system'] : null;
        $this->container['realized_per_month'] = isset($data['realized_per_month']) ? $data['realized_per_month'] : null;
        $this->container['rent_condition'] = isset($data['rent_condition']) ? $data['rent_condition'] : null;
        $this->container['rented_from'] = isset($data['rented_from']) ? $data['rented_from'] : null;
        $this->container['rented_until'] = isset($data['rented_until']) ? $data['rented_until'] : null;
        $this->container['date_sign_deed'] = isset($data['date_sign_deed']) ? $data['date_sign_deed'] : null;
        $this->container['rent_price'] = isset($data['rent_price']) ? $data['rent_price'] : null;
        $this->container['target_rent_price'] = isset($data['target_rent_price']) ? $data['target_rent_price'] : null;
        $this->container['rent_commission_total'] = isset($data['rent_commission_total']) ? $data['rent_commission_total'] : null;
        $this->container['rent_price_is_indexed'] = isset($data['rent_price_is_indexed']) ? $data['rent_price_is_indexed'] : null;
        $this->container['rent_price_max'] = isset($data['rent_price_max']) ? $data['rent_price_max'] : null;
        $this->container['rent_price_office_space'] = isset($data['rent_price_office_space']) ? $data['rent_price_office_space'] : null;
        $this->container['rent_price_per_unit'] = isset($data['rent_price_per_unit']) ? $data['rent_price_per_unit'] : null;
        $this->container['rent_price_per_unit_size'] = isset($data['rent_price_per_unit_size']) ? $data['rent_price_per_unit_size'] : null;
        $this->container['rent_price_terrain'] = isset($data['rent_price_terrain']) ? $data['rent_price_terrain'] : null;
        $this->container['rent_specifications'] = isset($data['rent_specifications']) ? $data['rent_specifications'] : null;
        $this->container['short_term'] = isset($data['short_term']) ? $data['short_term'] : null;
        $this->container['soft_furnishings'] = isset($data['soft_furnishings']) ? $data['soft_furnishings'] : null;
        $this->container['start_date_rent'] = isset($data['start_date_rent']) ? $data['start_date_rent'] : null;
        $this->container['value_assignment'] = isset($data['value_assignment']) ? $data['value_assignment'] : null;
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
     * Gets advance
     *
     * @return float
     */
    public function getAdvance()
    {
        return $this->container['advance'];
    }

    /**
     * Sets advance
     *
     * @param float $advance advance
     *
     * @return $this
     */
    public function setAdvance($advance)
    {
        $this->container['advance'] = $advance;

        return $this;
    }

    /**
     * Gets availability_is_temporary
     *
     * @return bool
     */
    public function getAvailabilityIsTemporary()
    {
        return $this->container['availability_is_temporary'];
    }

    /**
     * Sets availability_is_temporary
     *
     * @param bool $availability_is_temporary availability_is_temporary
     *
     * @return $this
     */
    public function setAvailabilityIsTemporary($availability_is_temporary)
    {
        $this->container['availability_is_temporary'] = $availability_is_temporary;

        return $this;
    }

    /**
     * Gets available_from
     *
     * @return \DateTime
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /**
     * Sets available_from
     *
     * @param \DateTime $available_from available_from
     *
     * @return $this
     */
    public function setAvailableFrom($available_from)
    {
        $this->container['available_from'] = $available_from;

        return $this;
    }

    /**
     * Gets available_until
     *
     * @return \DateTime
     */
    public function getAvailableUntil()
    {
        return $this->container['available_until'];
    }

    /**
     * Sets available_until
     *
     * @param \DateTime $available_until available_until
     *
     * @return $this
     */
    public function setAvailableUntil($available_until)
    {
        $this->container['available_until'] = $available_until;

        return $this;
    }

    /**
     * Gets basic_rent
     *
     * @return float
     */
    public function getBasicRent()
    {
        return $this->container['basic_rent'];
    }

    /**
     * Sets basic_rent
     *
     * @param float $basic_rent basic_rent
     *
     * @return $this
     */
    public function setBasicRent($basic_rent)
    {
        $this->container['basic_rent'] = $basic_rent;

        return $this;
    }

    /**
     * Gets commission_contact_months_rent
     *
     * @return float
     */
    public function getCommissionContactMonthsRent()
    {
        return $this->container['commission_contact_months_rent'];
    }

    /**
     * Sets commission_contact_months_rent
     *
     * @param float $commission_contact_months_rent commission_contact_months_rent
     *
     * @return $this
     */
    public function setCommissionContactMonthsRent($commission_contact_months_rent)
    {
        $this->container['commission_contact_months_rent'] = $commission_contact_months_rent;

        return $this;
    }

    /**
     * Gets commission_customer_months_rent
     *
     * @return float
     */
    public function getCommissionCustomerMonthsRent()
    {
        return $this->container['commission_customer_months_rent'];
    }

    /**
     * Sets commission_customer_months_rent
     *
     * @param float $commission_customer_months_rent commission_customer_months_rent
     *
     * @return $this
     */
    public function setCommissionCustomerMonthsRent($commission_customer_months_rent)
    {
        $this->container['commission_customer_months_rent'] = $commission_customer_months_rent;

        return $this;
    }

    /**
     * Gets commission_owner_months_rent
     *
     * @return float
     */
    public function getCommissionOwnerMonthsRent()
    {
        return $this->container['commission_owner_months_rent'];
    }

    /**
     * Sets commission_owner_months_rent
     *
     * @param float $commission_owner_months_rent commission_owner_months_rent
     *
     * @return $this
     */
    public function setCommissionOwnerMonthsRent($commission_owner_months_rent)
    {
        $this->container['commission_owner_months_rent'] = $commission_owner_months_rent;

        return $this;
    }

    /**
     * Gets contract_free_rental_period_in_months
     *
     * @return int
     */
    public function getContractFreeRentalPeriodInMonths()
    {
        return $this->container['contract_free_rental_period_in_months'];
    }

    /**
     * Sets contract_free_rental_period_in_months
     *
     * @param int $contract_free_rental_period_in_months contract_free_rental_period_in_months
     *
     * @return $this
     */
    public function setContractFreeRentalPeriodInMonths($contract_free_rental_period_in_months)
    {
        $this->container['contract_free_rental_period_in_months'] = $contract_free_rental_period_in_months;

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
     * Gets deposit
     *
     * @return float
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param float $deposit deposit
     *
     * @return $this
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets furniture
     *
     * @return float
     */
    public function getFurniture()
    {
        return $this->container['furniture'];
    }

    /**
     * Sets furniture
     *
     * @param float $furniture furniture
     *
     * @return $this
     */
    public function setFurniture($furniture)
    {
        $this->container['furniture'] = $furniture;

        return $this;
    }

    /**
     * Gets inspection_list
     *
     * @return \DateTime
     */
    public function getInspectionList()
    {
        return $this->container['inspection_list'];
    }

    /**
     * Sets inspection_list
     *
     * @param \DateTime $inspection_list inspection_list
     *
     * @return $this
     */
    public function setInspectionList($inspection_list)
    {
        $this->container['inspection_list'] = $inspection_list;

        return $this;
    }

    /**
     * Gets is_vacant_property_act
     *
     * @return bool
     */
    public function getIsVacantPropertyAct()
    {
        return $this->container['is_vacant_property_act'];
    }

    /**
     * Sets is_vacant_property_act
     *
     * @param bool $is_vacant_property_act is_vacant_property_act
     *
     * @return $this
     */
    public function setIsVacantPropertyAct($is_vacant_property_act)
    {
        $this->container['is_vacant_property_act'] = $is_vacant_property_act;

        return $this;
    }

    /**
     * Gets maximum_lease_term
     *
     * @return \Swagger\Client\Model\LeaseTerm
     */
    public function getMaximumLeaseTerm()
    {
        return $this->container['maximum_lease_term'];
    }

    /**
     * Sets maximum_lease_term
     *
     * @param \Swagger\Client\Model\LeaseTerm $maximum_lease_term maximum_lease_term
     *
     * @return $this
     */
    public function setMaximumLeaseTerm($maximum_lease_term)
    {
        $this->container['maximum_lease_term'] = $maximum_lease_term;

        return $this;
    }

    /**
     * Gets minimum_lease_term
     *
     * @return \Swagger\Client\Model\LeaseTerm
     */
    public function getMinimumLeaseTerm()
    {
        return $this->container['minimum_lease_term'];
    }

    /**
     * Sets minimum_lease_term
     *
     * @param \Swagger\Client\Model\LeaseTerm $minimum_lease_term minimum_lease_term
     *
     * @return $this
     */
    public function setMinimumLeaseTerm($minimum_lease_term)
    {
        $this->container['minimum_lease_term'] = $minimum_lease_term;

        return $this;
    }

    /**
     * Gets points_evaluation_system
     *
     * @return int
     */
    public function getPointsEvaluationSystem()
    {
        return $this->container['points_evaluation_system'];
    }

    /**
     * Sets points_evaluation_system
     *
     * @param int $points_evaluation_system points_evaluation_system
     *
     * @return $this
     */
    public function setPointsEvaluationSystem($points_evaluation_system)
    {
        $this->container['points_evaluation_system'] = $points_evaluation_system;

        return $this;
    }

    /**
     * Gets realized_per_month
     *
     * @return float
     */
    public function getRealizedPerMonth()
    {
        return $this->container['realized_per_month'];
    }

    /**
     * Sets realized_per_month
     *
     * @param float $realized_per_month realized_per_month
     *
     * @return $this
     */
    public function setRealizedPerMonth($realized_per_month)
    {
        $this->container['realized_per_month'] = $realized_per_month;

        return $this;
    }

    /**
     * Gets rent_condition
     *
     * @return \Swagger\Client\Model\RentCondition
     */
    public function getRentCondition()
    {
        return $this->container['rent_condition'];
    }

    /**
     * Sets rent_condition
     *
     * @param \Swagger\Client\Model\RentCondition $rent_condition rent_condition
     *
     * @return $this
     */
    public function setRentCondition($rent_condition)
    {
        $this->container['rent_condition'] = $rent_condition;

        return $this;
    }

    /**
     * Gets rented_from
     *
     * @return \DateTime
     */
    public function getRentedFrom()
    {
        return $this->container['rented_from'];
    }

    /**
     * Sets rented_from
     *
     * @param \DateTime $rented_from rented_from
     *
     * @return $this
     */
    public function setRentedFrom($rented_from)
    {
        $this->container['rented_from'] = $rented_from;

        return $this;
    }

    /**
     * Gets rented_until
     *
     * @return \DateTime
     */
    public function getRentedUntil()
    {
        return $this->container['rented_until'];
    }

    /**
     * Sets rented_until
     *
     * @param \DateTime $rented_until rented_until
     *
     * @return $this
     */
    public function setRentedUntil($rented_until)
    {
        $this->container['rented_until'] = $rented_until;

        return $this;
    }

    /**
     * Gets date_sign_deed
     *
     * @return \DateTime
     */
    public function getDateSignDeed()
    {
        return $this->container['date_sign_deed'];
    }

    /**
     * Sets date_sign_deed
     *
     * @param \DateTime $date_sign_deed date_sign_deed
     *
     * @return $this
     */
    public function setDateSignDeed($date_sign_deed)
    {
        $this->container['date_sign_deed'] = $date_sign_deed;

        return $this;
    }

    /**
     * Gets rent_price
     *
     * @return float
     */
    public function getRentPrice()
    {
        return $this->container['rent_price'];
    }

    /**
     * Sets rent_price
     *
     * @param float $rent_price rent_price
     *
     * @return $this
     */
    public function setRentPrice($rent_price)
    {
        $this->container['rent_price'] = $rent_price;

        return $this;
    }

    /**
     * Gets target_rent_price
     *
     * @return float
     */
    public function getTargetRentPrice()
    {
        return $this->container['target_rent_price'];
    }

    /**
     * Sets target_rent_price
     *
     * @param float $target_rent_price target_rent_price
     *
     * @return $this
     */
    public function setTargetRentPrice($target_rent_price)
    {
        $this->container['target_rent_price'] = $target_rent_price;

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
     * Gets rent_price_is_indexed
     *
     * @return bool
     */
    public function getRentPriceIsIndexed()
    {
        return $this->container['rent_price_is_indexed'];
    }

    /**
     * Sets rent_price_is_indexed
     *
     * @param bool $rent_price_is_indexed rent_price_is_indexed
     *
     * @return $this
     */
    public function setRentPriceIsIndexed($rent_price_is_indexed)
    {
        $this->container['rent_price_is_indexed'] = $rent_price_is_indexed;

        return $this;
    }

    /**
     * Gets rent_price_max
     *
     * @return float
     */
    public function getRentPriceMax()
    {
        return $this->container['rent_price_max'];
    }

    /**
     * Sets rent_price_max
     *
     * @param float $rent_price_max rent_price_max
     *
     * @return $this
     */
    public function setRentPriceMax($rent_price_max)
    {
        $this->container['rent_price_max'] = $rent_price_max;

        return $this;
    }

    /**
     * Gets rent_price_office_space
     *
     * @return float
     */
    public function getRentPriceOfficeSpace()
    {
        return $this->container['rent_price_office_space'];
    }

    /**
     * Sets rent_price_office_space
     *
     * @param float $rent_price_office_space rent_price_office_space
     *
     * @return $this
     */
    public function setRentPriceOfficeSpace($rent_price_office_space)
    {
        $this->container['rent_price_office_space'] = $rent_price_office_space;

        return $this;
    }

    /**
     * Gets rent_price_per_unit
     *
     * @return float
     */
    public function getRentPricePerUnit()
    {
        return $this->container['rent_price_per_unit'];
    }

    /**
     * Sets rent_price_per_unit
     *
     * @param float $rent_price_per_unit rent_price_per_unit
     *
     * @return $this
     */
    public function setRentPricePerUnit($rent_price_per_unit)
    {
        $this->container['rent_price_per_unit'] = $rent_price_per_unit;

        return $this;
    }

    /**
     * Gets rent_price_per_unit_size
     *
     * @return \Swagger\Client\Model\UnitSize
     */
    public function getRentPricePerUnitSize()
    {
        return $this->container['rent_price_per_unit_size'];
    }

    /**
     * Sets rent_price_per_unit_size
     *
     * @param \Swagger\Client\Model\UnitSize $rent_price_per_unit_size rent_price_per_unit_size
     *
     * @return $this
     */
    public function setRentPricePerUnitSize($rent_price_per_unit_size)
    {
        $this->container['rent_price_per_unit_size'] = $rent_price_per_unit_size;

        return $this;
    }

    /**
     * Gets rent_price_terrain
     *
     * @return float
     */
    public function getRentPriceTerrain()
    {
        return $this->container['rent_price_terrain'];
    }

    /**
     * Sets rent_price_terrain
     *
     * @param float $rent_price_terrain rent_price_terrain
     *
     * @return $this
     */
    public function setRentPriceTerrain($rent_price_terrain)
    {
        $this->container['rent_price_terrain'] = $rent_price_terrain;

        return $this;
    }

    /**
     * Gets rent_specifications
     *
     * @return \Swagger\Client\Model\RentSpecification[]
     */
    public function getRentSpecifications()
    {
        return $this->container['rent_specifications'];
    }

    /**
     * Sets rent_specifications
     *
     * @param \Swagger\Client\Model\RentSpecification[] $rent_specifications rent_specifications
     *
     * @return $this
     */
    public function setRentSpecifications($rent_specifications)
    {
        $this->container['rent_specifications'] = $rent_specifications;

        return $this;
    }

    /**
     * Gets short_term
     *
     * @return bool
     */
    public function getShortTerm()
    {
        return $this->container['short_term'];
    }

    /**
     * Sets short_term
     *
     * @param bool $short_term short_term
     *
     * @return $this
     */
    public function setShortTerm($short_term)
    {
        $this->container['short_term'] = $short_term;

        return $this;
    }

    /**
     * Gets soft_furnishings
     *
     * @return float
     */
    public function getSoftFurnishings()
    {
        return $this->container['soft_furnishings'];
    }

    /**
     * Sets soft_furnishings
     *
     * @param float $soft_furnishings soft_furnishings
     *
     * @return $this
     */
    public function setSoftFurnishings($soft_furnishings)
    {
        $this->container['soft_furnishings'] = $soft_furnishings;

        return $this;
    }

    /**
     * Gets start_date_rent
     *
     * @return \DateTime
     */
    public function getStartDateRent()
    {
        return $this->container['start_date_rent'];
    }

    /**
     * Sets start_date_rent
     *
     * @param \DateTime $start_date_rent start_date_rent
     *
     * @return $this
     */
    public function setStartDateRent($start_date_rent)
    {
        $this->container['start_date_rent'] = $start_date_rent;

        return $this;
    }

    /**
     * Gets value_assignment
     *
     * @return float
     */
    public function getValueAssignment()
    {
        return $this->container['value_assignment'];
    }

    /**
     * Sets value_assignment
     *
     * @param float $value_assignment value_assignment
     *
     * @return $this
     */
    public function setValueAssignment($value_assignment)
    {
        $this->container['value_assignment'] = $value_assignment;

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


