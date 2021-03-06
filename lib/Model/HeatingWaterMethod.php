<?php
/**
 * HeatingWaterMethod
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
 * HeatingWaterMethod Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeatingWaterMethod
{
    /**
     * Possible values of this enum
     */
    const BOILER = 'Boiler';
    const CENTRAL_HEATING = 'CentralHeating';
    const WATER_HEATER_RENTAL = 'WaterHeaterRental';
    const WATER_HEATER_OWNERSHIP = 'WaterHeaterOwnership';
    const GAS_BOILER_RENTAL = 'GasBoilerRental';
    const GAS_BOILER_OWNERSHIP = 'GasBoilerOwnership';
    const ELECTRIC_BOILER_RENTAL = 'ElectricBoilerRental';
    const ELECTRIC_BOILER_OWNERSHIP = 'ElectricBoilerOwnership';
    const SOLAR_WATER_HEATER = 'SolarWaterHeater';
    const SOLAR_PANELS = 'SolarPanels';
    const DISTRICT_HEATING = 'DistrictHeating';
    const NO_HEATING = 'NoHeating';
    const FLOW_THROUGH_BOILER = 'FlowThroughBoiler';
    const GEOTHERMAL_HEAT = 'GeothermalHeat';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOILER,
            self::CENTRAL_HEATING,
            self::WATER_HEATER_RENTAL,
            self::WATER_HEATER_OWNERSHIP,
            self::GAS_BOILER_RENTAL,
            self::GAS_BOILER_OWNERSHIP,
            self::ELECTRIC_BOILER_RENTAL,
            self::ELECTRIC_BOILER_OWNERSHIP,
            self::SOLAR_WATER_HEATER,
            self::SOLAR_PANELS,
            self::DISTRICT_HEATING,
            self::NO_HEATING,
            self::FLOW_THROUGH_BOILER,
            self::GEOTHERMAL_HEAT,
        ];
    }
}


