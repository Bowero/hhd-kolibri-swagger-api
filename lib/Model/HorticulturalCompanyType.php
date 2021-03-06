<?php
/**
 * HorticulturalCompanyType
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
 * HorticulturalCompanyType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HorticulturalCompanyType
{
    /**
     * Possible values of this enum
     */
    const GREENHOUSE = 'Greenhouse';
    const GROUND = 'Ground';
    const FRUIT_GROWING = 'FruitGrowing';
    const MUSHROOM_CULTIVATION = 'MushroomCultivation';
    const TREE_NURSERY = 'TreeNursery';
    const FLOWER_BULBS = 'FlowerBulbs';
    const GREENHOUSE_HORTICULTURE = 'GreenhouseHorticulture';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GREENHOUSE,
            self::GROUND,
            self::FRUIT_GROWING,
            self::MUSHROOM_CULTIVATION,
            self::TREE_NURSERY,
            self::FLOWER_BULBS,
            self::GREENHOUSE_HORTICULTURE,
        ];
    }
}


