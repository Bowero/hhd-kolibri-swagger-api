<?php
/**
 * Condition
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
 * Condition Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Condition
{
    /**
     * Possible values of this enum
     */
    const POOR = 'Poor';
    const POOR_TO_MODERATE = 'PoorToModerate';
    const MODERATE = 'Moderate';
    const MODERATE_TO_HABITABLE = 'ModerateToHabitable';
    const HABITABLE = 'Habitable';
    const HABITABLE_TO_GOOD = 'HabitableToGood';
    const GOOD = 'Good';
    const GOOD_TO_EXCELLENT = 'GoodToExcellent';
    const EXCELLENT = 'Excellent';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::POOR,
            self::POOR_TO_MODERATE,
            self::MODERATE,
            self::MODERATE_TO_HABITABLE,
            self::HABITABLE,
            self::HABITABLE_TO_GOOD,
            self::GOOD,
            self::GOOD_TO_EXCELLENT,
            self::EXCELLENT,
        ];
    }
}


