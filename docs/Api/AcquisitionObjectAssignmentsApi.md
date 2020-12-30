# Swagger\Client\AcquisitionObjectAssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acquisitionObjectAssignmentsArchive**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsArchive) | **POST** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments/Archive | Archive selected acquisitionObjectAssignment
[**acquisitionObjectAssignmentsDefineNew**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsDefineNew) | **POST** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments/DefineNew | Defines a new acquisitionObjectAssignment instance, without saving it.
[**acquisitionObjectAssignmentsDelete**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsDelete) | **DELETE** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments | Delete selected acquisitionObjectAssignment
[**acquisitionObjectAssignmentsRead**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsRead) | **GET** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments | Read a single acquisitionObjectAssignment.
[**acquisitionObjectAssignmentsSave**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsSave) | **POST** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments | Save given acquisitionObjectAssignment
[**acquisitionObjectAssignmentsUnarchive**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsUnarchive) | **POST** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments/Unarchive | Unarchive selected acquisitionObjectAssignment
[**acquisitionObjectAssignmentsUndelete**](AcquisitionObjectAssignmentsApi.md#acquisitionObjectAssignmentsUndelete) | **POST** /v3/{RealEstateAgencyId}/AcquisitionObjectAssignments/Undelete | Undelete selected acquisitionObjectAssignment


# **acquisitionObjectAssignmentsArchive**
> acquisitionObjectAssignmentsArchive($request, $real_estate_agency_id)

Archive selected acquisitionObjectAssignment

Let a user archive a acquisitionObjectAssignment selected by its acquisitionObjectAssignment Id.  *** **Required permission :**    * [acquisitionobjectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionObjectAssignmentsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsArchive: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionObjectAssignmentsDefineNew**
> \Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse acquisitionObjectAssignmentsDefineNew($request, $real_estate_agency_id)

Defines a new acquisitionObjectAssignment instance, without saving it.

Get a new acquisitionObjectAssignment instance with default values set, but not saved into the database.  *** **Required permission :**    * [acquisitionobjectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionObjectAssignmentsDefineNewRequest(); // \Swagger\Client\Model\AcquisitionObjectAssignmentsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionObjectAssignmentsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionObjectAssignmentsDefineNewRequest**](../Model/AcquisitionObjectAssignmentsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse**](../Model/AcquisitionObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionObjectAssignmentsDelete**
> acquisitionObjectAssignmentsDelete($id, $real_estate_agency_id)

Delete selected acquisitionObjectAssignment

Let a user delete a acquisitionObjectAssignment selected by its acquisitionObjectAssignment Id.  *** **Required permission :**    * [acquisitionobjectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionObjectAssignmentsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsDelete: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionObjectAssignmentsRead**
> \Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse acquisitionObjectAssignmentsRead($id, $real_estate_agency_id)

Read a single acquisitionObjectAssignment.

method allows the user to read all the acquisitionObjectAssignment details of a single acquisitionObjectAssignment by its Id.  *** **Required permission :**    * [acquisitionobjectassignment.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionObjectAssignmentsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse**](../Model/AcquisitionObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionObjectAssignmentsSave**
> \Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse acquisitionObjectAssignmentsSave($request, $real_estate_agency_id)

Save given acquisitionObjectAssignment

Let a user save (new/existing) acquisitionObjectAssignment.  *** **Required permission :**    * [acquisitionobjectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionObjectAssignmentsSaveRequest(); // \Swagger\Client\Model\AcquisitionObjectAssignmentsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionObjectAssignmentsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionObjectAssignmentsSaveRequest**](../Model/AcquisitionObjectAssignmentsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionObjectAssignmentsSingleItemResponse**](../Model/AcquisitionObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionObjectAssignmentsUnarchive**
> acquisitionObjectAssignmentsUnarchive($request, $real_estate_agency_id)

Unarchive selected acquisitionObjectAssignment

Let a user unarchive a acquisitionObjectAssignment selected by its acquisitionObjectAssignment Id.  *** **Required permission :**    * [acquisitionobjectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionObjectAssignmentsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionObjectAssignmentsUndelete**
> acquisitionObjectAssignmentsUndelete($request, $real_estate_agency_id)

Undelete selected acquisitionObjectAssignment

Let a user undelete a acquisitionObjectAssignment selected by its acquisitionObjectAssignment Id.  *** **Required permission :**    * [acquisitionobjectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionObjectAssignmentsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionObjectAssignmentsApi->acquisitionObjectAssignmentsUndelete: ', $e->getMessage(), PHP_EOL;
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

