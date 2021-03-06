<?php
/**
 * Facility
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
 * Facility Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Facility
{
    /**
     * Possible values of this enum
     */
    const INSTALLATION_FIXTURES = 'InstallationFixtures';
    const ELEVATORS = 'Elevators';
    const OPENABLE_WINDOWS = 'OpenableWindows';
    const FLEX_SPOTS = 'FlexSpots';
    const CABLE_DUCT = 'CableDuct';
    const SYSTEM_CEILING = 'SystemCeiling';
    const TOILET = 'Toilet';
    const PANTRY = 'Pantry';
    const HEATING = 'Heating';
    const ROOM_LAYOUT = 'RoomLayout';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INSTALLATION_FIXTURES,
            self::ELEVATORS,
            self::OPENABLE_WINDOWS,
            self::FLEX_SPOTS,
            self::CABLE_DUCT,
            self::SYSTEM_CEILING,
            self::TOILET,
            self::PANTRY,
            self::HEATING,
            self::ROOM_LAYOUT,
        ];
    }
}


