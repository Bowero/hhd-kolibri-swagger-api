# Swagger\Client\AcquisitionAssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acquisitionAssignmentsArchive**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsArchive) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/Archive | Archive selected acquisitionAssignment
[**acquisitionAssignmentsDefineNew**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsDefineNew) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/DefineNew | Defines a new acquisitionAssignment instance, without saving it.
[**acquisitionAssignmentsDelete**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsDelete) | **DELETE** /v3/{RealEstateAgencyId}/AcquisitionAssignments | Delete selected acquisitionAssignment
[**acquisitionAssignmentsLinkRelation**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsLinkRelation) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/LinkRelation | Link a relation to the specified Acquisition assignments network.
[**acquisitionAssignmentsRead**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsRead) | **GET** /v3/{RealEstateAgencyId}/AcquisitionAssignments | Read a single acquisitionAssignment.
[**acquisitionAssignmentsSave**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsSave) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments | Save given acquisitionAssignment
[**acquisitionAssignmentsUnarchive**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsUnarchive) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/Unarchive | Unarchive selected acquisitionAssignment
[**acquisitionAssignmentsUndelete**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsUndelete) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/Undelete | Undelete selected acquisitionAssignment
[**acquisitionAssignmentsUnlinkRelation**](AcquisitionAssignmentsApi.md#acquisitionAssignmentsUnlinkRelation) | **POST** /v3/{RealEstateAgencyId}/AcquisitionAssignments/UnlinkRelation | Unlink a relation from the specified Acquisition assignments network.


# **acquisitionAssignmentsArchive**
> acquisitionAssignmentsArchive($request, $real_estate_agency_id)

Archive selected acquisitionAssignment

Let a user archive a acquisitionAssignment selected by its acquisitionAssignment Id.  *** **Required permission :**    * [acquisitionassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsArchive: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionAssignmentsDefineNew**
> \Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse acquisitionAssignmentsDefineNew($request, $real_estate_agency_id)

Defines a new acquisitionAssignment instance, without saving it.

Get a new acquisitionAssignment instance with default values set, but not saved into the database.  *** **Required permission :**    * [acquisitionassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequest(); // \Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionAssignmentsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionAssignmentsDefineNewRequest**](../Model/AcquisitionAssignmentsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse**](../Model/AcquisitionAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionAssignmentsDelete**
> acquisitionAssignmentsDelete($id, $real_estate_agency_id)

Delete selected acquisitionAssignment

Let a user delete a acquisitionAssignment selected by its acquisitionAssignment Id.  *** **Required permission :**    * [acquisitionassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsDelete: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionAssignmentsLinkRelation**
> acquisitionAssignmentsLinkRelation($request, $real_estate_agency_id)

Link a relation to the specified Acquisition assignments network.

**Required permission :**    * [acquisitionassignment.create_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionAssignmentLinkRelationRequest(); // \Swagger\Client\Model\AcquisitionAssignmentLinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsLinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsLinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionAssignmentLinkRelationRequest**](../Model/AcquisitionAssignmentLinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionAssignmentsRead**
> \Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse acquisitionAssignmentsRead($id, $real_estate_agency_id)

Read a single acquisitionAssignment.

method allows the user to read all the acquisitionAssignment details of a single acquisitionAssignment by its Id.  *** **Required permission :**    * [acquisitionassignment.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionAssignmentsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse**](../Model/AcquisitionAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionAssignmentsSave**
> \Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse acquisitionAssignmentsSave($request, $real_estate_agency_id)

Save given acquisitionAssignment

Let a user save (new/existing) acquisitionAssignment.  *** **Required permission :**    * [acquisitionassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionAssignmentsSaveRequest(); // \Swagger\Client\Model\AcquisitionAssignmentsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->acquisitionAssignmentsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionAssignmentsSaveRequest**](../Model/AcquisitionAssignmentsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AcquisitionAssignmentsSingleItemResponse**](../Model/AcquisitionAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **acquisitionAssignmentsUnarchive**
> acquisitionAssignmentsUnarchive($request, $real_estate_agency_id)

Unarchive selected acquisitionAssignment

Let a user unarchive a acquisitionAssignment selected by its acquisitionAssignment Id.  *** **Required permission :**    * [acquisitionassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionAssignmentsUndelete**
> acquisitionAssignmentsUndelete($request, $real_estate_agency_id)

Undelete selected acquisitionAssignment

Let a user undelete a acquisitionAssignment selected by its acquisitionAssignment Id.  *** **Required permission :**    * [acquisitionassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsUndelete: ', $e->getMessage(), PHP_EOL;
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

# **acquisitionAssignmentsUnlinkRelation**
> acquisitionAssignmentsUnlinkRelation($request, $real_estate_agency_id)

Unlink a relation from the specified Acquisition assignments network.

**Required permission :**    * [acquisitionassignment.delete_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AcquisitionAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AcquisitionAssignmentUnlinkRelationRequest(); // \Swagger\Client\Model\AcquisitionAssignmentUnlinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->acquisitionAssignmentsUnlinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AcquisitionAssignmentsApi->acquisitionAssignmentsUnlinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AcquisitionAssignmentUnlinkRelationRequest**](../Model/AcquisitionAssignmentUnlinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

