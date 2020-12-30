<?php
/**
 * ApartmentCharacteristic
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
 * ApartmentCharacteristic Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApartmentCharacteristic
{
    /**
     * Possible values of this enum
     */
    const SERVICE_FLAT = 'ServiceFlat';
    const COMMON_APARTMENT = 'CommonApartment';
    const CORRIDOR_FLAT = 'CorridorFlat';
    const BELETAGE = 'Beletage';
    const BASEMENT = 'Basement';
    const DOUBLE_UPPER_HOUSE = 'DoubleUpperHouse';
    const NURSERY_FLAT = 'NurseryFlat';
    const PENTHOUSE = 'Penthouse';
    const DUPLEX = 'Duplex';
    const TRIPLEX = 'Triplex';
    const OTHER = 'Other';
    const KAVLASHVILI = 'Kavlashvili';
    const LVOVI = 'Lvovi';
    const KHRUSHOVI = 'Khrushovi';
    const TUKHARELI = 'Tukhareli';
    const CHEKHURI = 'Chekhuri';
    const KALAKURI = 'Kalakuri';
    const MOSCOW = 'Moscow';
    const NONSTANDARD = 'Nonstandard';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVICE_FLAT,
            self::COMMON_APARTMENT,
            self::CORRIDOR_FLAT,
            self::BELETAGE,
            self::BASEMENT,
            self::DOUBLE_UPPER_HOUSE,
            self::NURSERY_FLAT,
            self::PENTHOUSE,
            self::DUPLEX,
            self::TRIPLEX,
            self::OTHER,
            self::KAVLASHVILI,
            self::LVOVI,
            self::KHRUSHOVI,
            self::TUKHARELI,
            self::CHEKHURI,
            self::KALAKURI,
            self::MOSCOW,
            self::NONSTANDARD,
        ];
    }
}

