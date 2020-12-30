<?php
/**
 * IntermediateForm
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
 * IntermediateForm Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntermediateForm
{
    /**
     * Possible values of this enum
     */
    const HOME_SALE_GUARANTEE = 'HomeSaleGuarantee';
    const MGE = 'Mge';
    const UNIT_BASED_SALES = 'UnitBasedSales';
    const INTERMEDIATE_FORM_BUY_RENT = 'IntermediateFormBuyRent';
    const DUO = 'Duo';
    const STARTER_LOAN = 'StarterLoan';
    const BUY_SUBSIDY = 'BuySubsidy';
    const BUY_BACK_SCHEME = 'BuyBackScheme';
    const BUY_START = 'BuyStart';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOME_SALE_GUARANTEE,
            self::MGE,
            self::UNIT_BASED_SALES,
            self::INTERMEDIATE_FORM_BUY_RENT,
            self::DUO,
            self::STARTER_LOAN,
            self::BUY_SUBSIDY,
            self::BUY_BACK_SCHEME,
            self::BUY_START,
        ];
    }
}

