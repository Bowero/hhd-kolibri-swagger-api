# Swagger\Client\FinancialAdministrationsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financialAdministrationsRead**](FinancialAdministrationsApi.md#financialAdministrationsRead) | **GET** /v3/{RealEstateAgencyId}/FinancialAdministrations | Read a single financialAdministration.
[**financialAdministrationsSave**](FinancialAdministrationsApi.md#financialAdministrationsSave) | **POST** /v3/{RealEstateAgencyId}/FinancialAdministrations | Save given financialAdministration
[**financialAdministrationsSearch**](FinancialAdministrationsApi.md#financialAdministrationsSearch) | **POST** /v3/{RealEstateAgencyId}/FinancialAdministrations/Search | Search for financialAdministrations.


# **financialAdministrationsRead**
> \Swagger\Client\Model\FinancialAdministrationsSingleItemResponse financialAdministrationsRead($id, $real_estate_agency_id)

Read a single financialAdministration.

method allows the user to read all the financialAdministration details of a single financialAdministration by its Id.  *** **Required permission :**    * [financialadministration.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FinancialAdministrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->financialAdministrationsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialAdministrationsApi->financialAdministrationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FinancialAdministrationsSingleItemResponse**](../Model/FinancialAdministrationsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialAdministrationsSave**
> \Swagger\Client\Model\FinancialAdministrationsSingleItemResponse financialAdministrationsSave($request, $real_estate_agency_id)

Save given financialAdministration

Let a user save (new/existing) financialAdministration.  *** **Required permission :**    * [financialadministration.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FinancialAdministrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FinancialAdministrationsSaveRequest(); // \Swagger\Client\Model\FinancialAdministrationsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->financialAdministrationsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialAdministrationsApi->financialAdministrationsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FinancialAdministrationsSaveRequest**](../Model/FinancialAdministrationsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FinancialAdministrationsSingleItemResponse**](../Model/FinancialAdministrationsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialAdministrationsSearch**
> \Swagger\Client\Model\FinancialAdministrationsSearchResponse financialAdministrationsSearch($request, $real_estate_agency_id)

Search for financialAdministrations.

method allows the user search for financialAdministrations using given search query.  *** **Required permission :**    * [financialadministration.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FinancialAdministrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FinancialAdministrationsSearchRequest(); // \Swagger\Client\Model\FinancialAdministrationsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->financialAdministrationsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialAdministrationsApi->financialAdministrationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FinancialAdministrationsSearchRequest**](../Model/FinancialAdministrationsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FinancialAdministrationsSearchResponse**](../Model/FinancialAdministrationsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

