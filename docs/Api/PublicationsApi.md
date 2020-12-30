# Swagger\Client\PublicationsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicationsActivate**](PublicationsApi.md#publicationsActivate) | **POST** /v3/{RealEstateAgencyId}/Publications/Activate | Activate selected publication.
[**publicationsDeactivate**](PublicationsApi.md#publicationsDeactivate) | **POST** /v3/{RealEstateAgencyId}/Publications/Deactivate | Deactivate selected publication.
[**publicationsRead**](PublicationsApi.md#publicationsRead) | **GET** /v3/{RealEstateAgencyId}/Publications | 
[**publicationsSearch**](PublicationsApi.md#publicationsSearch) | **POST** /v3/{RealEstateAgencyId}/Publications/Search | Search for publications.


# **publicationsActivate**
> \Swagger\Client\Model\OkResult publicationsActivate($request, $real_estate_agency_id)

Activate selected publication.

Let a user activate a publication selected by a Media Partner Id and an Assignment Id.  *** **Required permission :**    * [publication.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PublicationsActivateRequest(); // \Swagger\Client\Model\PublicationsActivateRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->publicationsActivate($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->publicationsActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PublicationsActivateRequest**](../Model/PublicationsActivateRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationsDeactivate**
> \Swagger\Client\Model\OkResult publicationsDeactivate($request, $real_estate_agency_id)

Deactivate selected publication.

Let a user deactivate a publication selected by a Media Partner Id and an Assignment Id.  *** **Required permission :**    * [publication.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PublicationsDeactivateRequest(); // \Swagger\Client\Model\PublicationsDeactivateRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->publicationsDeactivate($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->publicationsDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PublicationsDeactivateRequest**](../Model/PublicationsDeactivateRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationsRead**
> \Swagger\Client\Model\PublicationSingleItemResponse publicationsRead($id, $real_estate_agency_id)



**Required permission :**    * [publication.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->publicationsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->publicationsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublicationSingleItemResponse**](../Model/PublicationSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicationsSearch**
> \Swagger\Client\Model\PublicationsSearchResponse publicationsSearch($request, $real_estate_agency_id)

Search for publications.

method allows the user search for publications using given search query.  *** **Required permission :**    * [publication.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PublicationsSearchRequest(); // \Swagger\Client\Model\PublicationsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->publicationsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->publicationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PublicationsSearchRequest**](../Model/PublicationsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublicationsSearchResponse**](../Model/PublicationsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

