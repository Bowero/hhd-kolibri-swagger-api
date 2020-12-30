<?php
/**
 * MediaPartnerCategory
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
 * MediaPartnerCategory Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaPartnerCategory
{
    /**
     * Possible values of this enum
     */
    const OTHER = 'Other';
    const PORTAL = 'Portal';
    const PRINTING = 'Printing';
    const PHOTO_AND_VIDEO = 'PhotoAndVideo';
    const PRESENTATION_COLUMN = 'PresentationColumn';
    const MAPS = 'Maps';
    const SOCIAL_MEDIA = 'SocialMedia';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::PORTAL,
            self::PRINTING,
            self::PHOTO_AND_VIDEO,
            self::PRESENTATION_COLUMN,
            self::MAPS,
            self::SOCIAL_MEDIA,
        ];
    }
}


