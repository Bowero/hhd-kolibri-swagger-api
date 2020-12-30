<?php
/**
 * TypeCodeHouse
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
 * TypeCodeHouse Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TypeCodeHouse
{
    /**
     * Possible values of this enum
     */
    const A_SPECIAL_ARCHITECTURAL_RESIDENCE = 'A_SpecialArchitecturalResidence';
    const A_BUNGALOW = 'A_Bungalow';
    const A_DYKE_HOUSE = 'A_DykeHouse';
    const A_DRIVEIN_RESIDENCE = 'A_DriveinResidence';
    const A_END_HOUSE = 'A_EndHouse';
    const A_CONNECTED_BUNGALOW = 'A_ConnectedBungalow';
    const A_CONNECTED_SEMI_DETACHED = 'A_ConnectedSemiDetached';
    const A_CONNECTED_HOUSE = 'A_ConnectedHouse';
    const A_MANSION = 'A_Mansion';
    const A_CORNER_HOUSE = 'A_CornerHouse';
    const A_ALMS_HOUSE = 'A_AlmsHouse';
    const A_KWADRANT_WONING = 'A_KwadrantWoning';
    const A_PATIO_BUNGALOW = 'A_PatioBungalow';
    const A_PATIO_HOUSE = 'A_PatioHouse';
    const A_PRACTICE_HOUSE = 'A_PracticeHouse';
    const A_SEMI_BUNGALOW = 'A_SemiBungalow';
    const A_SPLITLEVEL_HOUSE = 'A_SplitlevelHouse';
    const A_INTERMEDIATE_HOUSE = 'A_IntermediateHouse';
    const A_SEMI_DETACHED_HOUSE = 'A_SemiDetachedHouse';
    const A_VILLA = 'A_Villa';
    const A_DETACHED_HOUSE = 'A_DetachedHouse';
    const A_MOBILE_HOME = 'A_MobileHome';
    const B_BUSSINESS_OR_PROFIT_HOUSE = 'B_BussinessOrProfitHouse';
    const B_FARM = 'B_Farm';
    const B_BUNGALOW = 'B_Bungalow';
    const B_DYKE_HOUSE = 'B_DykeHouse';
    const B_END_HOUSE = 'B_EndHouse';
    const B_CONNECTED_SEMI_DETACHED = 'B_ConnectedSemiDetached';
    const B_CONNECTED_HOUSE = 'B_ConnectedHouse';
    const B_CANAL_HOUSE = 'B_CanalHouse';
    const B_HALF_DETACHED_HOUSE = 'B_HalfDetachedHouse';
    const B_MANSION = 'B_Mansion';
    const B_CORNER_HOUSE = 'B_CornerHouse';
    const B_ESTATE = 'B_Estate';
    const B_COUNTRY_HOUSE = 'B_CountryHouse';
    const B_BERTH = 'B_Berth';
    const B_MILL = 'B_Mill';
    const B_PRACTISE_HOUSE = 'B_PractiseHouse';
    const B_SEMI_BUNGALOW = 'B_SemiBungalow';
    const B_INTERMEDIATE_HOUSE = 'B_IntermediateHouse';
    const B_SEMI_DETACHED_HOUSE = 'B_SemiDetachedHouse';
    const B_VILLA = 'B_Villa';
    const B_DETACHED_HOUSE = 'B_DetachedHouse';
    const B_WATER_HOUSE = 'B_WaterHouse';
    const B_FARM_HOUSE = 'B_FarmHouse';
    const B_HOUSE_BOAT = 'B_HouseBoat';
    const B_MOBILE_HOME = 'B_MobileHome';
    const B_MOBILE_HOME_PITCH = 'B_MobileHomePitch';
    const B_LIVING_SHOP = 'B_LivingShop';
    const C_BUNGALOW = 'C_Bungalow';
    const C_END_HOUSE = 'C_EndHouse';
    const C_CONNECTED_BUNGALOW = 'C_ConnectedBungalow';
    const C_CONNECTED_SEMI_DETACHED = 'C_ConnectedSemiDetached';
    const C_CONNECTED_HOUSE = 'C_ConnectedHouse';
    const C_CORNER_HOUSE = 'C_CornerHouse';
    const C_SEMI_BUNGALOW = 'C_SemiBungalow';
    const C_INTERMEDIATE_HOUSE = 'C_IntermediateHouse';
    const C_SEMI_DETACHED = 'C_SemiDetached';
    const C_VILLA = 'C_Villa';
    const C_DETACHED_HOUSE = 'C_DetachedHouse';
    const C_MOBILE_HOUSE = 'C_MobileHouse';
    const D_BUNGALOW = 'D_Bungalow';
    const D_HALF_DETACHED_HOUSE = 'D_HalfDetachedHouse';
    const D_BERTH = 'D_Berth';
    const D_SEMI_BUNGALOW = 'D_SemiBungalow';
    const D_SEMI_DETACHED_HOUSE = 'D_SemiDetachedHouse';
    const D_VILLA = 'D_Villa';
    const D_DETACHED_HOUSE = 'D_DetachedHouse';
    const D_WATER_HOUSE = 'D_WaterHouse';
    const D_HOUSE_BOAT = 'D_HouseBoat';
    const D_MOBILE_HOUSE = 'D_MobileHouse';
    const D_MOBILE_HOUSE_PITCH = 'D_MobileHousePitch';
    const E_INTERMEDIATE_HOUSE = 'E_IntermediateHouse';
    const G_APARTMENT = 'G_Apartment';
    const G_DOWNSTAIRS_HOUSE = 'G_DownstairsHouse';
    const G_STORAGTE = 'G_Storagte';
    const G_BUILDING_PLOT = 'G_BuildingPlot';
    const G_UPSTAIRS_HOUSE = 'G_UpstairsHouse';
    const G_COLLECTIVE_PARKING_SPOT_WITH_RESIDENCES = 'G_CollectiveParkingSpotWithResidences';
    const G_CORRIDOR_FLAT = 'G_CorridorFlat';
    const G_GALLERY_FLAT = 'G_GalleryFlat';
    const G_GARAGE = 'G_Garage';
    const G_MAISONNETTE = 'G_Maisonnette';
    const G_PARKING_SPOT_USABLE_BY_RESIDENCES = 'G_ParkingSpotUsableByResidences';
    const G_PENTHOUSE = 'G_Penthouse';
    const G_PORCH_FLAT = 'G_PorchFlat';
    const H_APARTMENT = 'H_Apartment';
    const H_BEL_ETAGE = 'H_BelEtage';
    const H_DOWNSTAIRS_HOUSE = 'H_DownstairsHouse';
    const H_UPSTAIRS_HOUSE = 'H_UpstairsHouse';
    const H_PORCH_HOUSE = 'H_PorchHouse';
    const H_SOUTERRAIN = 'H_Souterrain';
    const I_APARTMENT = 'I_Apartment';
    const I_PENTHOUSE = 'I_Penthouse';
    const K_APARTMENT = 'K_Apartment';
    const K_DOWNSTAIRS_HOUSE = 'K_DownstairsHouse';
    const K_CORRIDOR_FLAT = 'K_CorridorFlat';
    const K_GALLERY_FLAT = 'K_GalleryFlat';
    const K_SERVICE_FLAT = 'K_ServiceFlat';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A_SPECIAL_ARCHITECTURAL_RESIDENCE,
            self::A_BUNGALOW,
            self::A_DYKE_HOUSE,
            self::A_DRIVEIN_RESIDENCE,
            self::A_END_HOUSE,
            self::A_CONNECTED_BUNGALOW,
            self::A_CONNECTED_SEMI_DETACHED,
            self::A_CONNECTED_HOUSE,
            self::A_MANSION,
            self::A_CORNER_HOUSE,
            self::A_ALMS_HOUSE,
            self::A_KWADRANT_WONING,
            self::A_PATIO_BUNGALOW,
            self::A_PATIO_HOUSE,
            self::A_PRACTICE_HOUSE,
            self::A_SEMI_BUNGALOW,
            self::A_SPLITLEVEL_HOUSE,
            self::A_INTERMEDIATE_HOUSE,
            self::A_SEMI_DETACHED_HOUSE,
            self::A_VILLA,
            self::A_DETACHED_HOUSE,
            self::A_MOBILE_HOME,
            self::B_BUSSINESS_OR_PROFIT_HOUSE,
            self::B_FARM,
            self::B_BUNGALOW,
            self::B_DYKE_HOUSE,
            self::B_END_HOUSE,
            self::B_CONNECTED_SEMI_DETACHED,
            self::B_CONNECTED_HOUSE,
            self::B_CANAL_HOUSE,
            self::B_HALF_DETACHED_HOUSE,
            self::B_MANSION,
            self::B_CORNER_HOUSE,
            self::B_ESTATE,
            self::B_COUNTRY_HOUSE,
            self::B_BERTH,
            self::B_MILL,
            self::B_PRACTISE_HOUSE,
            self::B_SEMI_BUNGALOW,
            self::B_INTERMEDIATE_HOUSE,
            self::B_SEMI_DETACHED_HOUSE,
            self::B_VILLA,
            self::B_DETACHED_HOUSE,
            self::B_WATER_HOUSE,
            self::B_FARM_HOUSE,
            self::B_HOUSE_BOAT,
            self::B_MOBILE_HOME,
            self::B_MOBILE_HOME_PITCH,
            self::B_LIVING_SHOP,
            self::C_BUNGALOW,
            self::C_END_HOUSE,
            self::C_CONNECTED_BUNGALOW,
            self::C_CONNECTED_SEMI_DETACHED,
            self::C_CONNECTED_HOUSE,
            self::C_CORNER_HOUSE,
            self::C_SEMI_BUNGALOW,
            self::C_INTERMEDIATE_HOUSE,
            self::C_SEMI_DETACHED,
            self::C_VILLA,
            self::C_DETACHED_HOUSE,
            self::C_MOBILE_HOUSE,
            self::D_BUNGALOW,
            self::D_HALF_DETACHED_HOUSE,
            self::D_BERTH,
            self::D_SEMI_BUNGALOW,
            self::D_SEMI_DETACHED_HOUSE,
            self::D_VILLA,
            self::D_DETACHED_HOUSE,
            self::D_WATER_HOUSE,
            self::D_HOUSE_BOAT,
            self::D_MOBILE_HOUSE,
            self::D_MOBILE_HOUSE_PITCH,
            self::E_INTERMEDIATE_HOUSE,
            self::G_APARTMENT,
            self::G_DOWNSTAIRS_HOUSE,
            self::G_STORAGTE,
            self::G_BUILDING_PLOT,
            self::G_UPSTAIRS_HOUSE,
            self::G_COLLECTIVE_PARKING_SPOT_WITH_RESIDENCES,
            self::G_CORRIDOR_FLAT,
            self::G_GALLERY_FLAT,
            self::G_GARAGE,
            self::G_MAISONNETTE,
            self::G_PARKING_SPOT_USABLE_BY_RESIDENCES,
            self::G_PENTHOUSE,
            self::G_PORCH_FLAT,
            self::H_APARTMENT,
            self::H_BEL_ETAGE,
            self::H_DOWNSTAIRS_HOUSE,
            self::H_UPSTAIRS_HOUSE,
            self::H_PORCH_HOUSE,
            self::H_SOUTERRAIN,
            self::I_APARTMENT,
            self::I_PENTHOUSE,
            self::K_APARTMENT,
            self::K_DOWNSTAIRS_HOUSE,
            self::K_CORRIDOR_FLAT,
            self::K_GALLERY_FLAT,
            self::K_SERVICE_FLAT,
        ];
    }
}

