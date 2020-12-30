<?php
/**
 * SocialPropertyFacilityType
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
 * SocialPropertyFacilityType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SocialPropertyFacilityType
{
    /**
     * Possible values of this enum
     */
    const FIRE_DETECTION_SYSTEM_CONNECTED_TO_COMMUNICATIONS_ROOM = 'FireDetectionSystemConnectedToCommunicationsRoom';
    const PRIVATE_PARKING = 'PrivateParking';
    const ELEVATOR = 'Elevator';
    const SWIMMING_POOL = 'SwimmingPool';
    const OUTDOOR_SPACE = 'OutdoorSpace';
    const DAY_NURSERY = 'DayNursery';
    const OUT_OF_SCHOOL_CARE = 'OutOfSchoolCare';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRE_DETECTION_SYSTEM_CONNECTED_TO_COMMUNICATIONS_ROOM,
            self::PRIVATE_PARKING,
            self::ELEVATOR,
            self::SWIMMING_POOL,
            self::OUTDOOR_SPACE,
            self::DAY_NURSERY,
            self::OUT_OF_SCHOOL_CARE,
        ];
    }
}


