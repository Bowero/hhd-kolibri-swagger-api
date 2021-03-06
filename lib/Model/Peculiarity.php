<?php
/**
 * Peculiarity
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
 * Peculiarity Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Peculiarity
{
    /**
     * Possible values of this enum
     */
    const MONUMENTAL_BUILDING = 'MonumentalBuilding';
    const MONUMENT = 'Monument';
    const PADDED = 'Padded';
    const PARTIALLY_FURNISHED = 'PartiallyFurnished';
    const PARTIALLY_LEASED = 'PartiallyLeased';
    const FURNISHED = 'Furnished';
    const DOUBLE_OCCUPANCY_POSSIBLE = 'DoubleOccupancyPossible';
    const DOUBLE_OCCUPANCY_AVAILABLE = 'DoubleOccupancyAvailable';
    const PROTECTED_TOWN_OR_VILLAGE_CONSERVATION = 'ProtectedTownOrVillageConservation';
    const ACCESSIBLE_FOR_THE_ELDERLY = 'AccessibleForTheElderly';
    const ACCESSIBLE_TO_DISABLED_PEOPLE = 'AccessibleToDisabledPeople';
    const NEEDS_RENOVATION = 'NeedsRenovation';
    const DEMOLITION_HOUSE = 'DemolitionHouse';
    const HERITAGE = 'Heritage';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONUMENTAL_BUILDING,
            self::MONUMENT,
            self::PADDED,
            self::PARTIALLY_FURNISHED,
            self::PARTIALLY_LEASED,
            self::FURNISHED,
            self::DOUBLE_OCCUPANCY_POSSIBLE,
            self::DOUBLE_OCCUPANCY_AVAILABLE,
            self::PROTECTED_TOWN_OR_VILLAGE_CONSERVATION,
            self::ACCESSIBLE_FOR_THE_ELDERLY,
            self::ACCESSIBLE_TO_DISABLED_PEOPLE,
            self::NEEDS_RENOVATION,
            self::DEMOLITION_HOUSE,
            self::HERITAGE,
        ];
    }
}


