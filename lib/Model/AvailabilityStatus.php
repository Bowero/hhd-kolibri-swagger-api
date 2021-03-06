<?php
/**
 * AvailabilityStatus
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
 * AvailabilityStatus Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailabilityStatus
{
    /**
     * Possible values of this enum
     */
    const AVAILABLE = 'Available';
    const UNDER_BID = 'UnderBid';
    const UNDER_OPTION = 'UnderOption';
    const SOLD_UNDER_CONDITION = 'SoldUnderCondition';
    const RENTED_UNDER_CONDITION = 'RentedUnderCondition';
    const SOLD = 'Sold';
    const RENTED = 'Rented';
    const WITHDRAWN = 'Withdrawn';
    const FARMED_UNDER_CONDITION = 'FarmedUnderCondition';
    const FARMED = 'Farmed';
    const LEASED_UNDER_CONDITION = 'LeasedUnderCondition';
    const LEASED = 'Leased';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::UNDER_BID,
            self::UNDER_OPTION,
            self::SOLD_UNDER_CONDITION,
            self::RENTED_UNDER_CONDITION,
            self::SOLD,
            self::RENTED,
            self::WITHDRAWN,
            self::FARMED_UNDER_CONDITION,
            self::FARMED,
            self::LEASED_UNDER_CONDITION,
            self::LEASED,
        ];
    }
}


