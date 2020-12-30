# Swagger\Client\RealEstateAgenciesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**realEstateAgenciesRead**](RealEstateAgenciesApi.md#realEstateAgenciesRead) | **GET** /v3/{RealEstateAgencyId}/RealEstateAgencies | Read a single Real Estate Agency.
[**realEstateAgenciesRemoveLogo**](RealEstateAgenciesApi.md#realEstateAgenciesRemoveLogo) | **POST** /v3/{RealEstateAgencyId}/RealEstateAgencies/RemoveLogo | 
[**realEstateAgenciesSearch**](RealEstateAgenciesApi.md#realEstateAgenciesSearch) | **POST** /v3/RealEstateAgencies/Search | Search real estate agencies.
[**realEstateAgenciesUpdate**](RealEstateAgenciesApi.md#realEstateAgenciesUpdate) | **POST** /v3/{RealEstateAgencyId}/RealEstateAgencies | Updates an existing Real Estate Agency.
[**realEstateAgenciesUpdateLogo**](RealEstateAgenciesApi.md#realEstateAgenciesUpdateLogo) | **POST** /v3/{RealEstateAgencyId}/RealEstateAgencies/UpdateLogo | Update logo of selected Real estate agency


# **realEstateAgenciesRead**
> \Swagger\Client\Model\RealEstateAgenciesSingleItemResponse realEstateAgenciesRead($real_estate_agency_id)

Read a single Real Estate Agency.

Method allows the user to read the Real Estate Agency details of a single Real Estate Agency.  *** **Required permission :**    * [realestateagency.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RealEstateAgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->realEstateAgenciesRead($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealEstateAgenciesApi->realEstateAgenciesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RealEstateAgenciesSingleItemResponse**](../Model/RealEstateAgenciesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateAgenciesRemoveLogo**
> \Swagger\Client\Model\PhotoBlobSaveResponse realEstateAgenciesRemoveLogo($request, $real_estate_agency_id)



**Required permission :**    * [realestateagency.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RealEstateAgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PhotoBlobRemoveRequest(); // \Swagger\Client\Model\PhotoBlobRemoveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->realEstateAgenciesRemoveLogo($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealEstateAgenciesApi->realEstateAgenciesRemoveLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PhotoBlobRemoveRequest**](../Model/PhotoBlobRemoveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PhotoBlobSaveResponse**](../Model/PhotoBlobSaveResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateAgenciesSearch**
> \Swagger\Client\Model\RealEstateAgenciesSearchResponse realEstateAgenciesSearch($request)

Search real estate agencies.

Search for Real Estate Agencies. 3-legged clients will only return the realtors real estate agency. 2-legged clients can find all the agencies that have given consent to the client to access their data.  *** **Required permission :**    * [realestateagency.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RealEstateAgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RealEstateAgencySearchRequest(); // \Swagger\Client\Model\RealEstateAgencySearchRequest | 

try {
    $result = $apiInstance->realEstateAgenciesSearch($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealEstateAgenciesApi->realEstateAgenciesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RealEstateAgencySearchRequest**](../Model/RealEstateAgencySearchRequest.md)|  |

### Return type

[**\Swagger\Client\Model\RealEstateAgenciesSearchResponse**](../Model/RealEstateAgenciesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateAgenciesUpdate**
> \Swagger\Client\Model\RealEstateAgenciesSingleItemResponse realEstateAgenciesUpdate($request, $real_estate_agency_id)

Updates an existing Real Estate Agency.

Let a user update an existing Real Estate Agency.  *** **Required permission :**    * [realestateagency.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RealEstateAgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RealEstateAgenciesUpdateRequest(); // \Swagger\Client\Model\RealEstateAgenciesUpdateRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->realEstateAgenciesUpdate($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealEstateAgenciesApi->realEstateAgenciesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RealEstateAgenciesUpdateRequest**](../Model/RealEstateAgenciesUpdateRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RealEstateAgenciesSingleItemResponse**](../Model/RealEstateAgenciesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **realEstateAgenciesUpdateLogo**
> \Swagger\Client\Model\PhotoBlobSaveResponse realEstateAgenciesUpdateLogo($request, $real_estate_agency_id)

Update logo of selected Real estate agency

Let a user update the logo without fetching/saving the whole Real estate agency.  *** **Required permission :**    * [realestateagency.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RealEstateAgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PhotoBlobSaveRequest(); // \Swagger\Client\Model\PhotoBlobSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->realEstateAgenciesUpdateLogo($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealEstateAgenciesApi->realEstateAgenciesUpdateLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PhotoBlobSaveRequest**](../Model/PhotoBlobSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PhotoBlobSaveResponse**](../Model/PhotoBlobSaveResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

