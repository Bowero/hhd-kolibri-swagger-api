<?php
/**
 * MovingReason
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
 * MovingReason Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MovingReason
{
    /**
     * Possible values of this enum
     */
    const LIVING_ON_THEIR_OWN = 'LivingOnTheirOwn';
    const MARRIAGE_OR_LIVE_TOGETHER = 'MarriageOrLiveTogether';
    const DIVORCE = 'Divorce';
    const TOO_LARGE = 'TooLarge';
    const TOO_SMALL = 'TooSmall';
    const WANT_TO_BUY = 'WantToBuy';
    const WANT_TO_RENT = 'WantToRent';
    const ARCHITECTURAL_QUALITY = 'ArchitecturalQuality';
    const NUISANCE_OF_RESIDENTS = 'NuisanceOfResidents';
    const BETTER_ACCESSIBILITY = 'BetterAccessibility';
    const LESS_PARKING_PRESSURE = 'LessParkingPressure';
    const KIND_OF_BUILDINGS = 'KindOfBuildings';
    const RESIDENTS = 'Residents';
    const SERVICES = 'Services';
    const INSECURITY_OR_CRIME = 'InsecurityOrCrime';
    const HEALTHCARE_OR_NEED_FOR_CARE = 'HealthcareOrNeedForCare';
    const STUDY = 'Study';
    const WORK = 'Work';
    const CLOSER_TO_FAMILY_FRIENDS_OR_ACQUAINTANCES = 'CloserToFamilyFriendsOrAcquaintances';
    const OTHER_REASON = 'OtherReason';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIVING_ON_THEIR_OWN,
            self::MARRIAGE_OR_LIVE_TOGETHER,
            self::DIVORCE,
            self::TOO_LARGE,
            self::TOO_SMALL,
            self::WANT_TO_BUY,
            self::WANT_TO_RENT,
            self::ARCHITECTURAL_QUALITY,
            self::NUISANCE_OF_RESIDENTS,
            self::BETTER_ACCESSIBILITY,
            self::LESS_PARKING_PRESSURE,
            self::KIND_OF_BUILDINGS,
            self::RESIDENTS,
            self::SERVICES,
            self::INSECURITY_OR_CRIME,
            self::HEALTHCARE_OR_NEED_FOR_CARE,
            self::STUDY,
            self::WORK,
            self::CLOSER_TO_FAMILY_FRIENDS_OR_ACQUAINTANCES,
            self::OTHER_REASON,
        ];
    }
}


