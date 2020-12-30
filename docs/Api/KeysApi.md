# Swagger\Client\KeysApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keysSearch**](KeysApi.md#keysSearch) | **POST** /v3/{RealEstateAgencyId}/Keys/Search | Search for keys.


# **keysSearch**
> \Swagger\Client\Model\KeysSearchResponse keysSearch($request, $real_estate_agency_id)

Search for keys.

method allows the user search for (available, used) keys using given search query.  *** **Required permission :**    * [key.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\KeysSearchRequest(); // \Swagger\Client\Model\KeysSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->keysSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\KeysSearchRequest**](../Model/KeysSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\KeysSearchResponse**](../Model/KeysSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

