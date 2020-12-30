# Swagger\Client\AssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignmentsExport**](AssignmentsApi.md#assignmentsExport) | **POST** /v3/{RealEstateAgencyId}/Assignments/Export | Search for assignments and export result to Excel.
[**assignmentsSearch**](AssignmentsApi.md#assignmentsSearch) | **POST** /v3/{RealEstateAgencyId}/Assignments/Search | Search for assignments.
[**assignmentsSearchAndExport**](AssignmentsApi.md#assignmentsSearchAndExport) | **GET** /v3/{RealEstateAgencyId}/Assignments/SearchAndExport | Search for assignments and export result to Excel.


# **assignmentsExport**
> assignmentsExport($request, $real_estate_agency_id)

Search for assignments and export result to Excel.

This method allows the user to search for assignments using given search query and get the result in an Excel file. Use this POST method if the search request is too large for GET requests.  *** **Required permission :**    * [assignment.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AssignmentsSearchRequest(); // \Swagger\Client\Model\AssignmentsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->assignmentsExport($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->assignmentsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AssignmentsSearchRequest**](../Model/AssignmentsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignmentsSearch**
> \Swagger\Client\Model\AssignmentsSearchResponse assignmentsSearch($request, $real_estate_agency_id)

Search for assignments.

This method allows the user to search for assignments (object, objecttype, project) using given search query.  *** **Required permission :**    * [assignment.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AssignmentsSearchRequest(); // \Swagger\Client\Model\AssignmentsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->assignmentsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->assignmentsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AssignmentsSearchRequest**](../Model/AssignmentsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AssignmentsSearchResponse**](../Model/AssignmentsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignmentsSearchAndExport**
> assignmentsSearchAndExport($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term)

Search for assignments and export result to Excel.

This method allows the user to search for assignments using given search query and get the result in an Excel file.  *** **Required permission :**    * [assignment.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$assignment_ids = array("assignment_ids_example"); // string[] | Search by specific assignment Ids. Used to return/refresh one search result.
$assignment_phases = array(new \Swagger\Client\Model\\Swagger\Client\Model\AssignmentPhase()); // \Swagger\Client\Model\AssignmentPhase[] | Filter by assignment phase ('Concept', 'Initiated', 'Completed')
$availabilty_statuses = array(new \Swagger\Client\Model\\Swagger\Client\Model\AvailabilityStatus()); // \Swagger\Client\Model\AvailabilityStatus[] | 
$country_code = "country_code_example"; // string | Filter by selected Country Code.
$employee_ids = array("employee_ids_example"); // string[] | Filter by selected Employee Ids.
$filter_by_assignment_types = array(new \Swagger\Client\Model\\Swagger\Client\Model\AssignmentType()); // \Swagger\Client\Model\AssignmentType[] | Filter by selected assignment types.
$filter_by_real_estate_groups = array(new \Swagger\Client\Model\\Swagger\Client\Model\RealEstateGroup()); // \Swagger\Client\Model\RealEstateGroup[] | Filter by selected real estate groups (residential, commercial,...).
$for_rent = true; // bool | If true assingments that are for rent are returned..
$for_sale = true; // bool | If true assingments that are for sale are returned..
$include_statistics = true; // bool | Return statistics, like lists of unique localities of the assignments and total commissions.
$listing_types = array(new \Swagger\Client\Model\\Swagger\Client\Model\ListingType()); // \Swagger\Client\Model\ListingType[] | 
$localities = array("localities_example"); // string[] | Filter by selected Localities.
$office_ids = array("office_ids_example"); // string[] | Filter by selected Office Ids.
$order_by = "order_by_example"; // string | Order the results by the indicated assignment field.
$relation_ids = array("relation_ids_example"); // string[] | Filter by selected Relation Ids.
$term_fields = array(new \Swagger\Client\Model\\Swagger\Client\Model\AssignmentTermField()); // \Swagger\Client\Model\AssignmentTermField[] | Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
$culture = "culture_example"; // string | The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").
$filter_by_project_assignment_ids = array("filter_by_project_assignment_ids_example"); // string[] | Filter by selected Project Ids.
$filter_by_object_type_assignment_ids = array("filter_by_object_type_assignment_ids_example"); // string[] | Filter by selected Object Type Ids.
$filter_by_acquisition_assignment_ids = array("filter_by_acquisition_assignment_ids_example"); // string[] | Filter by selected Acquisition Assignment Ids.
$ignore_old_versions = true; // bool | Assignments might be 'versions' of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent 'version' of an Assignment set IgnoreOldVersions to true.
$has_key = true; // bool | Only return assignment that have a key, or not.
$filter_by_key_numbers = array(56); // int[] | Filter by assignments key numbers.
$filter_by_furnishings = array(new \Swagger\Client\Model\\Swagger\Client\Model\Furnishing()); // \Swagger\Client\Model\Furnishing[] | Filter by assignment furnishing.
$filter_by_min_price = 8.14; // float | The minimal asking price
$filter_by_max_price = 8.14; // float | The maximal asking price
$filter_by_number_of_bedrooms_min = 56; // int | The minimal number of bedrooms
$filter_by_number_of_bedrooms_max = 56; // int | The maximal number of bedrooms
$is_cancelled = true; // bool | Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments.
$acquisition_statuses = array(new \Swagger\Client\Model\\Swagger\Client\Model\AcquisitionStatus()); // \Swagger\Client\Model\AcquisitionStatus[] | Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments
$available_from_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return rent assignments with an availability from date higher than the provided date time value.
$available_from_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return rent assignments with an availability from date lower than the provided date time value.
$available_until_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return rent assignments with an availability until date higher than the provided date time value.
$available_until_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return rent assignments with an availability until date lower than the provided date time value.
$filter_by_active = "filter_by_active_example"; // string | Show archived or active items. Default: 'ActiveOnly': show active items.
$order = "order_example"; // string | Order search results ascending or descending.
$skip = 56; // int | Number of results to skip.
$take = 56; // int | Number of results to return. If a value higher than 100 is provided, it is set to 100.
$term = "term_example"; // string | Search by given text term in the fields indicated by TermFields

try {
    $apiInstance->assignmentsSearchAndExport($real_estate_agency_id, $assignment_ids, $assignment_phases, $availabilty_statuses, $country_code, $employee_ids, $filter_by_assignment_types, $filter_by_real_estate_groups, $for_rent, $for_sale, $include_statistics, $listing_types, $localities, $office_ids, $order_by, $relation_ids, $term_fields, $culture, $filter_by_project_assignment_ids, $filter_by_object_type_assignment_ids, $filter_by_acquisition_assignment_ids, $ignore_old_versions, $has_key, $filter_by_key_numbers, $filter_by_furnishings, $filter_by_min_price, $filter_by_max_price, $filter_by_number_of_bedrooms_min, $filter_by_number_of_bedrooms_max, $is_cancelled, $acquisition_statuses, $available_from_min, $available_from_max, $available_until_min, $available_until_max, $filter_by_active, $order, $skip, $take, $term);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentsApi->assignmentsSearchAndExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **assignment_ids** | [**string[]**](../Model/string.md)| Search by specific assignment Ids. Used to return/refresh one search result. | [optional]
 **assignment_phases** | [**\Swagger\Client\Model\AssignmentPhase[]**](../Model/\Swagger\Client\Model\AssignmentPhase.md)| Filter by assignment phase (&#39;Concept&#39;, &#39;Initiated&#39;, &#39;Completed&#39;) | [optional]
 **availabilty_statuses** | [**\Swagger\Client\Model\AvailabilityStatus[]**](../Model/\Swagger\Client\Model\AvailabilityStatus.md)|  | [optional]
 **country_code** | **string**| Filter by selected Country Code. | [optional]
 **employee_ids** | [**string[]**](../Model/string.md)| Filter by selected Employee Ids. | [optional]
 **filter_by_assignment_types** | [**\Swagger\Client\Model\AssignmentType[]**](../Model/\Swagger\Client\Model\AssignmentType.md)| Filter by selected assignment types. | [optional]
 **filter_by_real_estate_groups** | [**\Swagger\Client\Model\RealEstateGroup[]**](../Model/\Swagger\Client\Model\RealEstateGroup.md)| Filter by selected real estate groups (residential, commercial,...). | [optional]
 **for_rent** | **bool**| If true assingments that are for rent are returned.. | [optional]
 **for_sale** | **bool**| If true assingments that are for sale are returned.. | [optional]
 **include_statistics** | **bool**| Return statistics, like lists of unique localities of the assignments and total commissions. | [optional]
 **listing_types** | [**\Swagger\Client\Model\ListingType[]**](../Model/\Swagger\Client\Model\ListingType.md)|  | [optional]
 **localities** | [**string[]**](../Model/string.md)| Filter by selected Localities. | [optional]
 **office_ids** | [**string[]**](../Model/string.md)| Filter by selected Office Ids. | [optional]
 **order_by** | **string**| Order the results by the indicated assignment field. | [optional]
 **relation_ids** | [**string[]**](../Model/string.md)| Filter by selected Relation Ids. | [optional]
 **term_fields** | [**\Swagger\Client\Model\AssignmentTermField[]**](../Model/\Swagger\Client\Model\AssignmentTermField.md)| Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional]
 **culture** | **string**| The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional]
 **filter_by_project_assignment_ids** | [**string[]**](../Model/string.md)| Filter by selected Project Ids. | [optional]
 **filter_by_object_type_assignment_ids** | [**string[]**](../Model/string.md)| Filter by selected Object Type Ids. | [optional]
 **filter_by_acquisition_assignment_ids** | [**string[]**](../Model/string.md)| Filter by selected Acquisition Assignment Ids. | [optional]
 **ignore_old_versions** | **bool**| Assignments might be &#39;versions&#39; of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent &#39;version&#39; of an Assignment set IgnoreOldVersions to true. | [optional]
 **has_key** | **bool**| Only return assignment that have a key, or not. | [optional]
 **filter_by_key_numbers** | [**int[]**](../Model/int.md)| Filter by assignments key numbers. | [optional]
 **filter_by_furnishings** | [**\Swagger\Client\Model\Furnishing[]**](../Model/\Swagger\Client\Model\Furnishing.md)| Filter by assignment furnishing. | [optional]
 **filter_by_min_price** | **float**| The minimal asking price | [optional]
 **filter_by_max_price** | **float**| The maximal asking price | [optional]
 **filter_by_number_of_bedrooms_min** | **int**| The minimal number of bedrooms | [optional]
 **filter_by_number_of_bedrooms_max** | **int**| The maximal number of bedrooms | [optional]
 **is_cancelled** | **bool**| Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments. | [optional]
 **acquisition_statuses** | [**\Swagger\Client\Model\AcquisitionStatus[]**](../Model/\Swagger\Client\Model\AcquisitionStatus.md)| Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments | [optional]
 **available_from_min** | **\DateTime**| Return rent assignments with an availability from date higher than the provided date time value. | [optional]
 **available_from_max** | **\DateTime**| Return rent assignments with an availability from date lower than the provided date time value. | [optional]
 **available_until_min** | **\DateTime**| Return rent assignments with an availability until date higher than the provided date time value. | [optional]
 **available_until_max** | **\DateTime**| Return rent assignments with an availability until date lower than the provided date time value. | [optional]
 **filter_by_active** | **string**| Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. | [optional]
 **order** | **string**| Order search results ascending or descending. | [optional]
 **skip** | **int**| Number of results to skip. | [optional]
 **take** | **int**| Number of results to return. If a value higher than 100 is provided, it is set to 100. | [optional]
 **term** | **string**| Search by given text term in the fields indicated by TermFields | [optional]

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

