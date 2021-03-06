<?php
/**
 * PointOfInterestType
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
 * PointOfInterestType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointOfInterestType
{
    /**
     * Possible values of this enum
     */
    const HIGHWAY_EXIT = 'HighwayExit';
    const RAILWAY_STATION = 'RailwayStation';
    const NS_CONTENT = 'NsContent';
    const BUS_HUB = 'BusHub';
    const TRAM_HUB = 'TramHub';
    const METRO_HUB = 'MetroHub';
    const BUS_STOP = 'BusStop';
    const TRAM_STOP = 'TramStop';
    const METRO_STOP = 'MetroStop';
    const BANK_BRANCH = 'BankBranch';
    const ATM = 'ATM';
    const RECREATION = 'Recreation';
    const SUPERMARKET = 'Supermarket';
    const SHOP = 'Shop';
    const RESTAURANT = 'Restaurant';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HIGHWAY_EXIT,
            self::RAILWAY_STATION,
            self::NS_CONTENT,
            self::BUS_HUB,
            self::TRAM_HUB,
            self::METRO_HUB,
            self::BUS_STOP,
            self::TRAM_STOP,
            self::METRO_STOP,
            self::BANK_BRANCH,
            self::ATM,
            self::RECREATION,
            self::SUPERMARKET,
            self::SHOP,
            self::RESTAURANT,
        ];
    }
}


