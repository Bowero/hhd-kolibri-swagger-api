<?php
/**
 * TimelineActionSubType
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
 * TimelineActionSubType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimelineActionSubType
{
    /**
     * Possible values of this enum
     */
    const MANDATE = 'Mandate';
    const DATE_WITHDRAWN = 'DateWithdrawn';
    const DATE_AUCTION = 'DateAuction';
    const ENDDATE_RESERVATION = 'EnddateReservation';
    const DATE_AGREEMENTDATE = 'DateAgreementdate';
    const DATE_SOLD = 'DateSold';
    const DATE_TRANSFER = 'DateTransfer';
    const ENDDATE_BANK_WARRANTY = 'EnddateBankWarranty';
    const DATE_RENTED = 'DateRented';
    const PRICE_CHANGE = 'PriceChange';
    const EMAIL = 'Email';
    const PHONE_CALL = 'PhoneCall';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANDATE,
            self::DATE_WITHDRAWN,
            self::DATE_AUCTION,
            self::ENDDATE_RESERVATION,
            self::DATE_AGREEMENTDATE,
            self::DATE_SOLD,
            self::DATE_TRANSFER,
            self::ENDDATE_BANK_WARRANTY,
            self::DATE_RENTED,
            self::PRICE_CHANGE,
            self::EMAIL,
            self::PHONE_CALL,
        ];
    }
}


