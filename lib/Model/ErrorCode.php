<?php
/**
 * ErrorCode
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
 * ErrorCode Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ErrorCode
{
    /**
     * Possible values of this enum
     */
    const OTHER = 'Other';
    const NOT_FOUND = 'NotFound';
    const INVALID_MODEL_STATE = 'InvalidModelState';
    const BROKEN_BUSINESS_RULES = 'BrokenBusinessRules';
    const UNAUTHORIZED_DATA_ACCESS = 'UnauthorizedDataAccess';
    const NO_PERMISSION = 'NoPermission';
    const NO_CONSENT = 'NoConsent';
    const NULL_MODEL_STATE = 'NullModelState';
    const USER_UNKNOWN = 'UserUnknown';
    const BLOB_ALREADY_EXISTS = 'BlobAlreadyExists';
    const BAD_REQUEST = 'BadRequest';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::NOT_FOUND,
            self::INVALID_MODEL_STATE,
            self::BROKEN_BUSINESS_RULES,
            self::UNAUTHORIZED_DATA_ACCESS,
            self::NO_PERMISSION,
            self::NO_CONSENT,
            self::NULL_MODEL_STATE,
            self::USER_UNKNOWN,
            self::BLOB_ALREADY_EXISTS,
            self::BAD_REQUEST,
        ];
    }
}

