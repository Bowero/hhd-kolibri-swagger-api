<?php
/**
 * CattleFarmingSubtype
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
 * CattleFarmingSubtype Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CattleFarmingSubtype
{
    /**
     * Possible values of this enum
     */
    const DAIRY_CATTLE = 'DairyCattle';
    const SUCKLER_COWS = 'SucklerCows';
    const VEAL_BULLS = 'VealBulls';
    const BREEDING_YOUNG_CATTLE = 'BreedingYoungCattle';
    const VEAL_CALVES = 'VealCalves';
    const ROSE_CALVES = 'RoseCalves';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAIRY_CATTLE,
            self::SUCKLER_COWS,
            self::VEAL_BULLS,
            self::BREEDING_YOUNG_CATTLE,
            self::VEAL_CALVES,
            self::ROSE_CALVES,
        ];
    }
}


