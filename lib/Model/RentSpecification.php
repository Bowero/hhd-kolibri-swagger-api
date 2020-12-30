<?php
/**
 * RentSpecification
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
 * RentSpecification Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RentSpecification
{
    /**
     * Possible values of this enum
     */
    const SERVICE_CHARGES = 'ServiceCharges';
    const GAS = 'Gas';
    const WATER = 'Water';
    const ELECTRICITY = 'Electricity';
    const FURNISHED = 'Furnished';
    const UPHOLSTERED = 'Upholstered';
    const INTERNET = 'Internet';
    const TELEVISION = 'Television';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVICE_CHARGES,
            self::GAS,
            self::WATER,
            self::ELECTRICITY,
            self::FURNISHED,
            self::UPHOLSTERED,
            self::INTERNET,
            self::TELEVISION,
        ];
    }
}


