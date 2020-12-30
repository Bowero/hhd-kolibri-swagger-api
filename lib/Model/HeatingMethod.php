<?php
/**
 * HeatingMethod
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
 * HeatingMethod Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeatingMethod
{
    /**
     * Possible values of this enum
     */
    const BOILER = 'Boiler';
    const COAL_STOVE = 'CoalStove';
    const BLOCK_HEATING = 'BlockHeating';
    const DISTRICT_HEATING = 'DistrictHeating';
    const HEARTH = 'Hearth';
    const HOT_AIR_HEATING = 'HotAirHeating';
    const AIR_CONDITIONING = 'AirConditioning';
    const GAS_STOVES = 'GasStoves';
    const FIREPLACE = 'Fireplace';
    const FIREPLACE_OPTION = 'FireplaceOption';
    const HEATED_FLOORS = 'HeatedFloors';
    const PARTIAL_HEATED_FLOORS = 'PartialHeatedFloors';
    const SOLAR_PANELS = 'SolarPanels';
    const NO_HEATING = 'NoHeating';
    const ELECTRIC_HEATING = 'ElectricHeating';
    const WALL_HEATING = 'WallHeating';
    const HEAT_PUMP = 'HeatPump';
    const HEAT_RECOVERY_INSTALLATION = 'HeatRecoveryInstallation';
    const GEOTHERMAL_ENERGY = 'GeothermalEnergy';
    const WOOD_STOVE = 'WoodStove';
    const GAS_STOVE = 'GasStove';
    const FREE_STANDING_HEATING = 'FreeStandingHeating';
    const AUTOMATIC_HEATING = 'AutomaticHeating';
    const STOVE = 'Stove';
    const COMBINED_HEATING = 'CombinedHeating';
    const SOLID_FUEL = 'SolidFuel';
    const ION = 'Ion';
    const WATER_HEATER = 'WaterHeater';
    const ALL_BURNER = 'AllBurner';
    const PELLET_STOVE = 'PelletStove';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOILER,
            self::COAL_STOVE,
            self::BLOCK_HEATING,
            self::DISTRICT_HEATING,
            self::HEARTH,
            self::HOT_AIR_HEATING,
            self::AIR_CONDITIONING,
            self::GAS_STOVES,
            self::FIREPLACE,
            self::FIREPLACE_OPTION,
            self::HEATED_FLOORS,
            self::PARTIAL_HEATED_FLOORS,
            self::SOLAR_PANELS,
            self::NO_HEATING,
            self::ELECTRIC_HEATING,
            self::WALL_HEATING,
            self::HEAT_PUMP,
            self::HEAT_RECOVERY_INSTALLATION,
            self::GEOTHERMAL_ENERGY,
            self::WOOD_STOVE,
            self::GAS_STOVE,
            self::FREE_STANDING_HEATING,
            self::AUTOMATIC_HEATING,
            self::STOVE,
            self::COMBINED_HEATING,
            self::SOLID_FUEL,
            self::ION,
            self::WATER_HEATER,
            self::ALL_BURNER,
            self::PELLET_STOVE,
        ];
    }
}


