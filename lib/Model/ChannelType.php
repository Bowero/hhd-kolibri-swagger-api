<?php
/**
 * ChannelType
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
 * ChannelType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelType
{
    /**
     * Possible values of this enum
     */
    const PERSONAL_REMINDERS = 'PersonalReminders';
    const PERSONAL_MESSAGING = 'PersonalMessaging';
    const COMPANY_MESSAGING = 'CompanyMessaging';
    const COMPANY_PUBLICATIONS = 'CompanyPublications';
    const COMPANY_PRESENCE = 'CompanyPresence';
    const COMPANY_ENTITY = 'CompanyEntity';
    const API_UPDATES = 'ApiUpdates';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERSONAL_REMINDERS,
            self::PERSONAL_MESSAGING,
            self::COMPANY_MESSAGING,
            self::COMPANY_PUBLICATIONS,
            self::COMPANY_PRESENCE,
            self::COMPANY_ENTITY,
            self::API_UPDATES,
        ];
    }
}


