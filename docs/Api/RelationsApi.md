# Swagger\Client\RelationsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**relationsExport**](RelationsApi.md#relationsExport) | **POST** /v3/{RealEstateAgencyId}/Relations/Export | Search for relations and export result to Excel.
[**relationsSearch**](RelationsApi.md#relationsSearch) | **POST** /v3/{RealEstateAgencyId}/Relations/Search | Search for relations.
[**relationsSearchAndExport**](RelationsApi.md#relationsSearchAndExport) | **GET** /v3/{RealEstateAgencyId}/Relations/SearchAndExport | Search for relations and export result to Excel.


# **relationsExport**
> relationsExport($request, $real_estate_agency_id)

Search for relations and export result to Excel.

This method allows the user to search for relations (employees, offices, contact persons, contact companies) using given search query and get the result in an Excel file. Use this POST method if the search request is too large for GET requests.  *** **Required permission :**    * [relation.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RelationsSearchRequest(); // \Swagger\Client\Model\RelationsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->relationsExport($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RelationsSearchRequest**](../Model/RelationsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationsSearch**
> \Swagger\Client\Model\RelationsSearchResponse relationsSearch($request, $real_estate_agency_id)

Search for relations.

This method allows the user to search for relations (employees, offices, contact persons, contact companies) using given search query.  *** **Required permission :**    * [relation.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RelationsSearchRequest(); // \Swagger\Client\Model\RelationsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->relationsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RelationsSearchRequest**](../Model/RelationsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RelationsSearchResponse**](../Model/RelationsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationsSearchAndExport**
> relationsSearchAndExport($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term)

Search for relations and export result to Excel.

This method allows the user to search for relations (employees, offices, contact persons, contact companies) using given search query and get the result in an Excel file.  *** **Required permission :**    * [relation.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$filter_by_relation_group_ids = array("filter_by_relation_group_ids_example"); // string[] | Filter by selected relation group id's.
$filter_by_relation_types = array(new \Swagger\Client\Model\\Swagger\Client\Model\RelationType()); // \Swagger\Client\Model\RelationType[] | Filter by selected relation types.
$include_statistics = true; // bool | Return statistics, like lists of unique localities of the relations.
$include_back_office_employees = false; // bool | Include back office employees if FilterByRelationTypes contains employees.
$order_by = "order_by_example"; // string | Order the results by the indicated relation field.
$relation_id = "relation_id_example"; // string | Search by a specific relation Id. Used to return/refresh one search result.
$term_fields = array(new \Swagger\Client\Model\\Swagger\Client\Model\RelationTermField()); // \Swagger\Client\Model\RelationTermField[] | Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
$culture = "culture_example"; // string | The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").
$min_date_time_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by items created at or after the minimum datetime created.
$max_date_time_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by items created at or before the given maximum datetime created.
$min_date_time_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by items created at or after the minimum datetime modified.
$max_date_time_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by items modified at or before the given maximum datetime modified.
$email_addresses = array("email_addresses_example"); // string[] | Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned.
$relation_ids = array("relation_ids_example"); // string[] | Search by specific task Ids. Used to return/refresh one search result.
$phone_number = "phone_number_example"; // string | 
$has_phone_number = true; // bool | 
$filter_by_active = "filter_by_active_example"; // string | Show archived or active items. Default: 'ActiveOnly': show active items.
$order = "order_example"; // string | Order search results ascending or descending.
$skip = 56; // int | Number of results to skip.
$take = 56; // int | Number of results to return. If a value higher than 100 is provided, it is set to 100.
$term = "term_example"; // string | Search by given text term in the fields indicated by TermFields

try {
    $apiInstance->relationsSearchAndExport($real_estate_agency_id, $filter_by_relation_group_ids, $filter_by_relation_types, $include_statistics, $include_back_office_employees, $order_by, $relation_id, $term_fields, $culture, $min_date_time_created, $max_date_time_created, $min_date_time_modified, $max_date_time_modified, $email_addresses, $relation_ids, $phone_number, $has_phone_number, $filter_by_active, $order, $skip, $take, $term);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsSearchAndExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **filter_by_relation_group_ids** | [**string[]**](../Model/string.md)| Filter by selected relation group id&#39;s. | [optional]
 **filter_by_relation_types** | [**\Swagger\Client\Model\RelationType[]**](../Model/\Swagger\Client\Model\RelationType.md)| Filter by selected relation types. | [optional]
 **include_statistics** | **bool**| Return statistics, like lists of unique localities of the relations. | [optional]
 **include_back_office_employees** | **bool**| Include back office employees if FilterByRelationTypes contains employees. | [optional] [default to false]
 **order_by** | **string**| Order the results by the indicated relation field. | [optional]
 **relation_id** | **string**| Search by a specific relation Id. Used to return/refresh one search result. | [optional]
 **term_fields** | [**\Swagger\Client\Model\RelationTermField[]**](../Model/\Swagger\Client\Model\RelationTermField.md)| Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional]
 **culture** | **string**| The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional]
 **min_date_time_created** | **\DateTime**| Filter by items created at or after the minimum datetime created. | [optional]
 **max_date_time_created** | **\DateTime**| Filter by items created at or before the given maximum datetime created. | [optional]
 **min_date_time_modified** | **\DateTime**| Filter by items created at or after the minimum datetime modified. | [optional]
 **max_date_time_modified** | **\DateTime**| Filter by items modified at or before the given maximum datetime modified. | [optional]
 **email_addresses** | [**string[]**](../Model/string.md)| Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. | [optional]
 **relation_ids** | [**string[]**](../Model/string.md)| Search by specific task Ids. Used to return/refresh one search result. | [optional]
 **phone_number** | **string**|  | [optional]
 **has_phone_number** | **bool**|  | [optional]
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

