# Swagger\Client\ContactLinksApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactLinksDelete**](ContactLinksApi.md#contactLinksDelete) | **DELETE** /v3/{RealEstateAgencyId}/ContactLinks | Delete selected contactLink
[**contactLinksSave**](ContactLinksApi.md#contactLinksSave) | **POST** /v3/{RealEstateAgencyId}/ContactLinks | Save given contactLink
[**contactLinksSearch**](ContactLinksApi.md#contactLinksSearch) | **POST** /v3/{RealEstateAgencyId}/ContactLinks/Search | Search for contactLinks.
[**contactLinksUndelete**](ContactLinksApi.md#contactLinksUndelete) | **POST** /v3/{RealEstateAgencyId}/ContactLinks/Undelete | Undelete selected contactLink


# **contactLinksDelete**
> contactLinksDelete($source_relation_id, $target_relation_id, $real_estate_agency_id)

Delete selected contactLink

Let a user delete a contactLink selected by its relation Ids.  *** **Required permission :**    * [contactlink.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_relation_id = "source_relation_id_example"; // string | 
$target_relation_id = "target_relation_id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactLinksDelete($source_relation_id, $target_relation_id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactLinksApi->contactLinksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_relation_id** | **string**|  |
 **target_relation_id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactLinksSave**
> \Swagger\Client\Model\ContactLinksSingleItemResponse contactLinksSave($request, $real_estate_agency_id)

Save given contactLink

Let a user save (new/existing) contactLink.             The source Relation (Id) must be a Contact Person, the target Relation (Id) can be a Contact Person or a Contact Company.  *** **Required permission :**    * [contactlink.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactLinksSaveRequest(); // \Swagger\Client\Model\ContactLinksSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactLinksSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLinksApi->contactLinksSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactLinksSaveRequest**](../Model/ContactLinksSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactLinksSingleItemResponse**](../Model/ContactLinksSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactLinksSearch**
> \Swagger\Client\Model\ContactLinksSearchResponse contactLinksSearch($request, $real_estate_agency_id)

Search for contactLinks.

method allows the user search for contactLinks using given search query.  *** **Required permission :**    * [contactlink.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactLinksSearchRequest(); // \Swagger\Client\Model\ContactLinksSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactLinksSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactLinksApi->contactLinksSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactLinksSearchRequest**](../Model/ContactLinksSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactLinksSearchResponse**](../Model/ContactLinksSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactLinksUndelete**
> contactLinksUndelete($request, $real_estate_agency_id)

Undelete selected contactLink

Let a user undelete a contactLink selected by its relation Ids.  *** **Required permission :**    * [contactlink.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactLinksUndeleteRequest(); // \Swagger\Client\Model\ContactLinksUndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactLinksUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactLinksApi->contactLinksUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactLinksUndeleteRequest**](../Model/ContactLinksUndeleteRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

