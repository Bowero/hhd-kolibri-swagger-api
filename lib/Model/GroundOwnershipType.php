<?php
/**
 * GroundOwnershipType
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
 * GroundOwnershipType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroundOwnershipType
{
    /**
     * Possible values of this enum
     */
    const OWN_LAND = 'OwnLand';
    const LEASEHOLD_WITHOUT_PROPERTY_ALLOWANCE = 'LeaseholdWithoutPropertyAllowance';
    const LEASEHOLD_WITH_PROPERTY_ALLOWANCE = 'LeaseholdWithPropertyAllowance';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OWN_LAND,
            self::LEASEHOLD_WITHOUT_PROPERTY_ALLOWANCE,
            self::LEASEHOLD_WITH_PROPERTY_ALLOWANCE,
        ];
    }
}


