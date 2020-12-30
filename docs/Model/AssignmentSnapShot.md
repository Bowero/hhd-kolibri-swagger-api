# AssignmentSnapShot

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignment_phase** | **object** | Assignment phase (&#39;Concept&#39;, &#39;Initiated&#39; or &#39;Completed&#39;). | [optional] 
**availability_status** | [**\Swagger\Client\Model\AvailabilityStatus**](AvailabilityStatus.md) |  | [optional] 
**country_code** | **string** |  | [optional] 
**date_rented_reservation** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_sold** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_sold_reservation** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_transfer** | [**\DateTime**](\DateTime.md) |  | [optional] 
**display_name** | **string** |  | [optional] 
**for_rent** | **bool** | Is this a &#39;for rent&#39; assignment? | [optional] 
**for_sale** | **bool** | Is this a &#39;for sale&#39; assignment? | [optional] 
**has_cadastres** | **bool** |  | [optional] 
**is_active** | **bool** |  | [optional] 
**is_part_of_project** | **bool** | Is this assignment linked at a project assignment? | [optional] 
**construction_number** | **int** |  | [optional] 
**construction_number_string** | **string** |  | [optional] 
**key_note** | **string** |  | [optional] 
**key_nr** | **int** |  | [optional] 
**linked_applicants** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**linked_employee** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**linked_notaries** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**linked_office** | [**\Swagger\Client\Model\LinkedOffice**](LinkedOffice.md) |  | [optional] 
**linked_property_managers** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**linked_vendors** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**linked_clients** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**listing_type** | **object** | ListingType (E.g. &#39;Woonhuis&#39;, &#39;Appartement&#39; or &#39;Parkeergelegenheid&#39;). | [optional] 
**locality** | **string** |  | [optional] 
**mandate_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**photo1_url** | **string** |  | [optional] 
**photo2_url** | **string** |  | [optional] 
**photo3_url** | **string** |  | [optional] 
**postal_code** | **string** |  | [optional] 
**linked_project_assignment** | [**\Swagger\Client\Model\LinkedAssignment**](LinkedAssignment.md) |  | [optional] 
**linked_object_type_assignment** | [**\Swagger\Client\Model\LinkedAssignment**](LinkedAssignment.md) |  | [optional] 
**linked_bids** | [**\Swagger\Client\Model\LinkedBid[]**](LinkedBid.md) |  | [optional] 
**public_reference** | **string** |  | [optional] 
**real_estate_agency_id** | **string** |  | [optional] 
**real_estate_group** | [**\Swagger\Client\Model\RealEstateGroup**](RealEstateGroup.md) |  | [optional] 
**rent_commission_total** | **float** |  | [optional] 
**rent_condition** | [**\Swagger\Client\Model\RentCondition**](RentCondition.md) |  | [optional] 
**rented_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**rent_price** | **float** |  | [optional] 
**rent_price_per_unit** | **float** |  | [optional] 
**rent_price_max** | **float** |  | [optional] 
**rent_vat_condition** | [**\Swagger\Client\Model\VatCondition**](VatCondition.md) |  | [optional] 
**sale_commission_total** | **float** |  | [optional] 
**sale_condition** | [**\Swagger\Client\Model\SaleCondition**](SaleCondition.md) |  | [optional] 
**sale_price** | **float** |  | [optional] 
**sale_price_per_unit** | **float** |  | [optional] 
**sale_price_max** | **float** |  | [optional] 
**sale_vat_condition** | [**\Swagger\Client\Model\VatCondition**](VatCondition.md) |  | [optional] 
**street_name_and_number** | **string** |  | [optional] 
**total_nr_of_photos** | **int** |  | [optional] 
**total_nr_of_videos** | **int** |  | [optional] 
**type_of_assignment** | **object** | Like &#39;Pand&#39;, &#39;ObjectType&#39; or &#39;Project&#39;. | [optional] 
**video1_url** | **string** |  | [optional] 
**withdrawn_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**withdraw_reason** | [**\Swagger\Client\Model\WithdrawReason**](WithdrawReason.md) |  | [optional] 
**date_time_created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**latitude** | **float** |  | [optional] 
**longitude** | **float** |  | [optional] 
**date_time_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**linked_created_by** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**linked_modified_by** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**furnishing** | [**\Swagger\Client\Model\Furnishing**](Furnishing.md) |  | [optional] 
**number_of_bedrooms** | **int** |  | [optional] 
**number_of_bath_rooms** | **int** |  | [optional] 
**acquisition_status** | [**\Swagger\Client\Model\AcquisitionStatus**](AcquisitionStatus.md) |  | [optional] 
**is_confidential** | **bool** |  | [optional] 
**available_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**available_until** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

