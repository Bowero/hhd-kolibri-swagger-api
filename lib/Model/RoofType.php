<?php
/**
 * RoofType
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
 * RoofType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoofType
{
    /**
     * Possible values of this enum
     */
    const GABLE_ROOF = 'GableRoof';
    const FLAT_ROOF = 'FlatRoof';
    const PENT_ROOF = 'PentRoof';
    const MANSARD_ROOF = 'MansardRoof';
    const SIDE_GABLED_ROOF = 'SideGabledRoof';
    const COMPOSITE_ROOF = 'CompositeRoof';
    const HIP_ROOF = 'HipRoof';
    const PAVILION_ROOF = 'PavilionRoof';
    const ROOF_WITH_OWL_BOARDS = 'RoofWithOwlBoards';
    const HELM_ROOF = 'HelmRoof';
    const SAWTOOTH_ROOF = 'SawtoothRoof';
    const CANOPY_ROOF = 'CanopyRoof';
    const KAPMETPLAT = 'Kapmetplat';
    const VAULTED_ROOF = 'VaultedRoof';
    const CURVED = 'Curved';
    const SHELL_ROOF = 'ShellRoof';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GABLE_ROOF,
            self::FLAT_ROOF,
            self::PENT_ROOF,
            self::MANSARD_ROOF,
            self::SIDE_GABLED_ROOF,
            self::COMPOSITE_ROOF,
            self::HIP_ROOF,
            self::PAVILION_ROOF,
            self::ROOF_WITH_OWL_BOARDS,
            self::HELM_ROOF,
            self::SAWTOOTH_ROOF,
            self::CANOPY_ROOF,
            self::KAPMETPLAT,
            self::VAULTED_ROOF,
            self::CURVED,
            self::SHELL_ROOF,
        ];
    }
}


