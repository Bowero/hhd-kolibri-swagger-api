# SearchAssignment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_assignment** | [**\DateTime**](\DateTime.md) |  | [optional] 
**locations** | [**\Swagger\Client\Model\SearchAssignmentLocation[]**](SearchAssignmentLocation.md) |  | [optional] 
**send_email_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**send_email_end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**match_mail_trigger** | [**\Swagger\Client\Model\MatchMailTrigger**](MatchMailTrigger.md) |  | [optional] 
**match_mail_period** | [**\Swagger\Client\Model\MatchMailPeriod**](MatchMailPeriod.md) |  | [optional] 
**assignment_phase** | [**\Swagger\Client\Model\AssignmentPhase**](AssignmentPhase.md) |  | [optional] 
**assignment_source** | [**\Swagger\Client\Model\AssignmentSource**](AssignmentSource.md) |  | [optional] 
**assignment_source_other_description** | **string** |  | [optional] 
**internal_memo** | **string** |  | [optional] 
**linked_relations** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**foreign_id** | **string** |  | [optional] 
**origin** | **string** |  | [optional] 
**origin_owner_id** | **string** |  | [optional] 
**origin_id** | **string** |  | [optional] 
**foreign_member_id** | **string** |  | [optional] 
**origin_member_id** | **string** |  | [optional] 
**real_estate_group** | [**\Swagger\Client\Model\RealEstateGroup**](RealEstateGroup.md) |  | [optional] 
**name** | **string** |  | [optional] 
**types_part** | [**\Swagger\Client\Model\TypePART[]**](TypePART.md) |  | [optional] 
**building_characteristics** | [**\Swagger\Client\Model\HouseCharacteristic[]**](HouseCharacteristic.md) |  | [optional] 
**apartment_types** | [**\Swagger\Client\Model\ApartmentSort[]**](ApartmentSort.md) |  | [optional] 
**apartment_characteristics** | [**\Swagger\Client\Model\ApartmentCharacteristic[]**](ApartmentCharacteristic.md) |  | [optional] 
**type_parking** | [**\Swagger\Client\Model\ParkingType[]**](ParkingType.md) |  | [optional] 
**types_part_other** | [**\Swagger\Client\Model\TypePARTOther[]**](TypePARTOther.md) |  | [optional] 
**types_bog** | [**\Swagger\Client\Model\TypeBOG[]**](TypeBOG.md) |  | [optional] 
**types_alv** | [**\Swagger\Client\Model\TypeAlv[]**](TypeAlv.md) |  | [optional] 
**types_alv_other** | [**\Swagger\Client\Model\TypeAlvOther[]**](TypeAlvOther.md) |  | [optional] 
**offer_type** | [**\Swagger\Client\Model\OfferType**](OfferType.md) |  | [optional] 
**price_start** | **float** |  | [optional] 
**price_end** | **float** |  | [optional] 
**construction_type** | [**\Swagger\Client\Model\BuildingType**](BuildingType.md) |  | [optional] 
**construction_year_begin** | **int** |  | [optional] 
**construction_year_end** | **int** |  | [optional] 
**location_places** | [**\Swagger\Client\Model\LocationPlace[]**](LocationPlace.md) |  | [optional] 
**orientation_main_garden** | [**\Swagger\Client\Model\Orientation**](Orientation.md) |  | [optional] 
**available_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**min_energy_class** | [**\Swagger\Client\Model\EnergyClass**](EnergyClass.md) |  | [optional] 
**measurement_unit** | [**\Swagger\Client\Model\MeasurementUnit**](MeasurementUnit.md) |  | [optional] 
**iso_currency_code** | **string** |  | [optional] 
**must_be_recently_modified** | **bool** |  | [optional] 
**must_be_new_on_market** | **bool** |  | [optional] 
**must_be_topper** | **bool** |  | [optional] 
**must_be_special** | **bool** |  | [optional] 
**must_have_open_house** | **bool** |  | [optional] 
**min_livable_area** | **int** |  | [optional] 
**max_livable_area** | **int** |  | [optional] 
**min_buildable_area** | **int** |  | [optional] 
**max_buildable_area** | **int** |  | [optional] 
**min_garden_area** | **int** |  | [optional] 
**max_garden_area** | **int** |  | [optional] 
**min_nr_of_rooms** | **int** |  | [optional] 
**max_nr_of_rooms** | **int** |  | [optional] 
**min_nr_of_bathrooms** | **int** |  | [optional] 
**max_nr_of_bathrooms** | **int** |  | [optional] 
**min_nr_of_bedrooms** | **int** |  | [optional] 
**max_nr_of_bedrooms** | **int** |  | [optional] 
**min_parking_capacity** | **int** |  | [optional] 
**max_parking_capacity** | **int** |  | [optional] 
**must_be_qualified_for_seniors** | **bool** |  | [optional] 
**max_energy_class** | [**\Swagger\Client\Model\EnergyClass**](EnergyClass.md) |  | [optional] 
**min_condition_inside** | [**\Swagger\Client\Model\Condition**](Condition.md) |  | [optional] 
**max_condition_inside** | [**\Swagger\Client\Model\Condition**](Condition.md) |  | [optional] 
**min_condition_outside** | [**\Swagger\Client\Model\Condition**](Condition.md) |  | [optional] 
**max_condition_outside** | [**\Swagger\Client\Model\Condition**](Condition.md) |  | [optional] 
**must_be_on_top_floor** | **bool** |  | [optional] 
**must_be_on_ground_floor** | **bool** |  | [optional] 
**facilities** | [**\Swagger\Client\Model\SearchAssignmentFacilityType[]**](SearchAssignmentFacilityType.md) |  | [optional] 
**peculiarities** | [**\Swagger\Client\Model\SearchAssignmentPeculiarityType[]**](SearchAssignmentPeculiarityType.md) |  | [optional] 
**house_sorts** | [**\Swagger\Client\Model\HouseSort[]**](HouseSort.md) |  | [optional] 
**house_types** | [**\Swagger\Client\Model\HouseType[]**](HouseType.md) |  | [optional] 
**furnishing** | [**\Swagger\Client\Model\Furnishing**](Furnishing.md) |  | [optional] 
**is_paid** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

