# SearchAssignmentsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_by** | **object** | Order the results by the indicated searchAssignment field. | [optional] 
**search_assignment_ids** | **string[]** | Search by specific searchAssignment Ids. Used to return/refresh one or more search results. | [optional] 
**assignment_phases** | [**\Swagger\Client\Model\AssignmentPhase[]**](AssignmentPhase.md) | Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) | [optional] 
**real_estate_groups** | [**\Swagger\Client\Model\RealEstateGroup[]**](RealEstateGroup.md) | Filter by selected real estate groups (residential, commercial, agricultural). | [optional] 
**relation_ids** | **string[]** | Filter by selected Relation Ids. | [optional] 
**offer_types** | [**\Swagger\Client\Model\OfferType[]**](OfferType.md) | Filter by offer type (sale, rent) | [optional] 
**match_mail_periods** | [**\Swagger\Client\Model\MatchMailPeriod[]**](MatchMailPeriod.md) | Filter by match mail periods (Never, daily, weekly) | [optional] 
**term_fields** | [**\Swagger\Client\Model\SearchAssignmentTermField[]**](SearchAssignmentTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**alv_types** | [**\Swagger\Client\Model\TypeAlv[]**](TypeAlv.md) | Search for given ALV types (CattleFarming, MeatCalves, etc.). | [optional] 
**bog_types** | [**\Swagger\Client\Model\TypeBOG[]**](TypeBOG.md) | Search for given BOG types (Leisure, Warehouse, etc.). | [optional] 
**part_types** | [**\Swagger\Client\Model\TypePART[]**](TypePART.md) | Search for given PART types (Apartment, SummerCottage, etc.). | [optional] 
**filter_by_paid** | **object** | Show paid or not paid items. Default: &#39;PaidOrNotPaid&#39;: show all items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


