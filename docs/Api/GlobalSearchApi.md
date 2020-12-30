# Swagger\Client\GlobalSearchApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**globalSearchSearch**](GlobalSearchApi.md#globalSearchSearch) | **POST** /v3/{RealEstateAgencyId}/GlobalSearch/Search | Search for assignments, relations (tasks and agenda items).


# **globalSearchSearch**
> \Swagger\Client\Model\GlobalSearchSearchResponse globalSearchSearch($request, $real_estate_agency_id)

Search for assignments, relations (tasks and agenda items).

This method allows the user to search for assignments, relations (employees, offices, contact persons, contact companies),             (tasks and agenda items) using given search query.             Required permissions: Assignments.Read, Relation.Read, Office.Read or Employee.Read.               *** **Required permission :**    * [globalsearch.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GlobalSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\GlobalSearchSearchRequest(); // \Swagger\Client\Model\GlobalSearchSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->globalSearchSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchApi->globalSearchSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\GlobalSearchSearchRequest**](../Model/GlobalSearchSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GlobalSearchSearchResponse**](../Model/GlobalSearchSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

