# AssignmentsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignment_ids** | **string[]** | Search by specific assignment Ids. Used to return/refresh one search result. | [optional] 
**assignment_phases** | [**\Swagger\Client\Model\AssignmentPhase[]**](AssignmentPhase.md) | Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) | [optional] 
**availabilty_statuses** | [**\Swagger\Client\Model\AvailabilityStatus[]**](AvailabilityStatus.md) |  | [optional] 
**country_code** | **string** | Filter by selected Country Code. | [optional] 
**employee_ids** | **string[]** | Filter by selected Employee Ids. | [optional] 
**filter_by_assignment_types** | [**\Swagger\Client\Model\AssignmentType[]**](AssignmentType.md) | Filter by selected assignment types. | [optional] 
**filter_by_real_estate_groups** | [**\Swagger\Client\Model\RealEstateGroup[]**](RealEstateGroup.md) | Filter by selected real estate groups (residential, commercial,...). | [optional] 
**for_rent** | **bool** | If true assingments that are for rent are returned.. | [optional] 
**for_sale** | **bool** | If true assingments that are for sale are returned.. | [optional] 
**include_statistics** | **bool** | Return statistics, like lists of unique localities of the assignments and total commissions. | [optional] 
**listing_types** | [**\Swagger\Client\Model\ListingType[]**](ListingType.md) |  | [optional] 
**localities** | **string[]** | Filter by selected Localities. | [optional] 
**office_ids** | **string[]** | Filter by selected Office Ids. | [optional] 
**order_by** | **object** | Order the results by the indicated assignment field. | [optional] 
**relation_ids** | **string[]** | Filter by selected Relation Ids. | [optional] 
**term_fields** | [**\Swagger\Client\Model\AssignmentTermField[]**](AssignmentTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 
**filter_by_project_assignment_ids** | **string[]** | Filter by selected Project Ids. | [optional] 
**filter_by_object_type_assignment_ids** | **string[]** | Filter by selected Object Type Ids. | [optional] 
**filter_by_acquisition_assignment_ids** | **string[]** | Filter by selected Acquisition Assignment Ids. | [optional] 
**ignore_old_versions** | **bool** | Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. | [optional] 
**has_key** | **bool** | Only return assignment that have a key, or not. | [optional] 
**filter_by_key_numbers** | **int[]** | Filter by assignments key numbers. | [optional] 
**filter_by_furnishings** | [**\Swagger\Client\Model\Furnishing[]**](Furnishing.md) | Filter by assignment furnishing. | [optional] 
**filter_by_min_price** | **float** | The minimal asking price | [optional] 
**filter_by_max_price** | **float** | The maximal asking price | [optional] 
**filter_by_number_of_bedrooms_min** | **int** | The minimal number of bedrooms | [optional] 
**filter_by_number_of_bedrooms_max** | **int** | The maximal number of bedrooms | [optional] 
**is_cancelled** | **bool** | Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. | [optional] 
**acquisition_statuses** | [**\Swagger\Client\Model\AcquisitionStatus[]**](AcquisitionStatus.md) | Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments | [optional] 
**available_from_min** | [**\DateTime**](\DateTime.md) | Return rent assignments with an availability from date higher than the provided date time value. | [optional] 
**available_from_max** | [**\DateTime**](\DateTime.md) | Return rent assignments with an availability from date lower than the provided date time value. | [optional] 
**available_until_min** | [**\DateTime**](\DateTime.md) | Return rent assignments with an availability until date higher than the provided date time value. | [optional] 
**available_until_max** | [**\DateTime**](\DateTime.md) | Return rent assignments with an availability until date lower than the provided date time value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


