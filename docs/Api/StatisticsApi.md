# Swagger\Client\StatisticsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsRead**](StatisticsApi.md#statisticsRead) | **GET** /v3/{RealEstateAgencyId}/Statistics | Read the (transaction) statistics for given Real Estate Agency. Statistics can be filtered by employee Id (if given).


# **statisticsRead**
> \Swagger\Client\Model\StatisticsSingleItemResponse statisticsRead($real_estate_agency_id, $employee_id)

Read the (transaction) statistics for given Real Estate Agency. Statistics can be filtered by employee Id (if given).

**Required permission :**    * [statistics.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$employee_id = "employee_id_example"; // string | Id of employee to get specific statistics for given employe.

try {
    $result = $apiInstance->statisticsRead($real_estate_agency_id, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **employee_id** | **string**| Id of employee to get specific statistics for given employe. | [optional]

### Return type

[**\Swagger\Client\Model\StatisticsSingleItemResponse**](../Model/StatisticsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

