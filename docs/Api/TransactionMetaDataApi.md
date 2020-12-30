# Swagger\Client\TransactionMetaDataApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionMetaDataArchive**](TransactionMetaDataApi.md#transactionMetaDataArchive) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData/Archive | Archive selected TransactionMetaData
[**transactionMetaDataDefineNew**](TransactionMetaDataApi.md#transactionMetaDataDefineNew) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData/DefineNew | Defines a new TransactionMetaData instance, without saving it.
[**transactionMetaDataDelete**](TransactionMetaDataApi.md#transactionMetaDataDelete) | **DELETE** /v3/{RealEstateAgencyId}/TransactionMetaData | Delete selected TransactionMetaData
[**transactionMetaDataRead**](TransactionMetaDataApi.md#transactionMetaDataRead) | **GET** /v3/{RealEstateAgencyId}/TransactionMetaData | Read a single TransactionMetaData.
[**transactionMetaDataSave**](TransactionMetaDataApi.md#transactionMetaDataSave) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData | Save given TransactionMetaData
[**transactionMetaDataSearch**](TransactionMetaDataApi.md#transactionMetaDataSearch) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData/Search | Search for TransactionMetaData.
[**transactionMetaDataUnarchive**](TransactionMetaDataApi.md#transactionMetaDataUnarchive) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData/Unarchive | Unarchive selected TransactionMetaData
[**transactionMetaDataUndelete**](TransactionMetaDataApi.md#transactionMetaDataUndelete) | **POST** /v3/{RealEstateAgencyId}/TransactionMetaData/Undelete | Undelete selected TransactionMetaData


# **transactionMetaDataArchive**
> transactionMetaDataArchive($request, $real_estate_agency_id)

Archive selected TransactionMetaData

Let a user archive a TransactionMetaData selected by its Id.  *** **Required permission :**    * [transaction_meta_data.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->transactionMetaDataArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ArchiveRequest**](../Model/ArchiveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataDefineNew**
> \Swagger\Client\Model\TransactionMetaDataSingleItemResponse transactionMetaDataDefineNew($request, $real_estate_agency_id)

Defines a new TransactionMetaData instance, without saving it.

**Required permission :**    * [transaction_meta_data.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TransactionMetaDataDefineNewRequest(); // \Swagger\Client\Model\TransactionMetaDataDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->transactionMetaDataDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TransactionMetaDataDefineNewRequest**](../Model/TransactionMetaDataDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TransactionMetaDataSingleItemResponse**](../Model/TransactionMetaDataSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataDelete**
> transactionMetaDataDelete($id, $real_estate_agency_id)

Delete selected TransactionMetaData

Let a user delete a TransactionMetaData selected by its Id.  *** **Required permission :**    * [transaction_meta_data.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->transactionMetaDataDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataRead**
> \Swagger\Client\Model\TransactionMetaDataSingleItemResponse transactionMetaDataRead($id, $real_estate_agency_id)

Read a single TransactionMetaData.

This method allows the user to read the full Transaction Meta Data details of a TransactionMetaData by its Id.  *** **Required permission :**    * [transaction_meta_data.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->transactionMetaDataRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TransactionMetaDataSingleItemResponse**](../Model/TransactionMetaDataSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataSave**
> \Swagger\Client\Model\TransactionMetaDataSingleItemResponse transactionMetaDataSave($request, $real_estate_agency_id)

Save given TransactionMetaData

Let a user save a/an (new/existing) TransactionMetaData.  *** **Required permission :**    * [transaction_meta_data.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TransactionMetaDataSaveRequest(); // \Swagger\Client\Model\TransactionMetaDataSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->transactionMetaDataSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TransactionMetaDataSaveRequest**](../Model/TransactionMetaDataSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TransactionMetaDataSingleItemResponse**](../Model/TransactionMetaDataSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataSearch**
> \Swagger\Client\Model\TransactionMetaDataSearchResponse transactionMetaDataSearch($request, $real_estate_agency_id)

Search for TransactionMetaData.

Method allows the user search for TransactionMetaData using given search query.  *** **Required permission :**    * [transaction_meta_data.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TransactionMetaDataSearchRequest(); // \Swagger\Client\Model\TransactionMetaDataSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->transactionMetaDataSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TransactionMetaDataSearchRequest**](../Model/TransactionMetaDataSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TransactionMetaDataSearchResponse**](../Model/TransactionMetaDataSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataUnarchive**
> transactionMetaDataUnarchive($request, $real_estate_agency_id)

Unarchive selected TransactionMetaData

Let a user unarchive a TransactionMetaData selected by its Id.  *** **Required permission :**    * [transaction_meta_data.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->transactionMetaDataUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UnarchiveRequest**](../Model/UnarchiveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMetaDataUndelete**
> transactionMetaDataUndelete($request, $real_estate_agency_id)

Undelete selected TransactionMetaData

Let a user undelete a TransactionMetaData selected by its Id.  *** **Required permission :**    * [transaction_meta_data.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionMetaDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->transactionMetaDataUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionMetaDataApi->transactionMetaDataUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UndeleteRequest**](../Model/UndeleteRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

