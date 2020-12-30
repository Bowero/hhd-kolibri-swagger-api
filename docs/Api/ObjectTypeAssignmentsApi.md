# Swagger\Client\ObjectTypeAssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**objectTypeAssignmentsArchive**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsArchive) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/Archive | 
[**objectTypeAssignmentsDefineNew**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsDefineNew) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/DefineNew | Defines a new objectTypeAssignment instance, without saving it.
[**objectTypeAssignmentsDelete**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsDelete) | **DELETE** /v3/{RealEstateAgencyId}/ObjectTypeAssignments | Delete selected objectTypeAssignment
[**objectTypeAssignmentsLinkRelation**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsLinkRelation) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/LinkRelation | Link a relation to the specified object type assignments network.
[**objectTypeAssignmentsRead**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsRead) | **GET** /v3/{RealEstateAgencyId}/ObjectTypeAssignments | Read a single objectTypeAssignment.
[**objectTypeAssignmentsSave**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsSave) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments | Save given objectTypeAssignment
[**objectTypeAssignmentsUnarchive**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsUnarchive) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/Unarchive | 
[**objectTypeAssignmentsUndelete**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsUndelete) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/Undelete | Undelete selected objectTypeAssignment
[**objectTypeAssignmentsUnlinkRelation**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsUnlinkRelation) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/UnlinkRelation | Unlink a relation from the specified object type assignments network.
[**objectTypeAssignmentsUpdateAvailability**](ObjectTypeAssignmentsApi.md#objectTypeAssignmentsUpdateAvailability) | **POST** /v3/{RealEstateAgencyId}/ObjectTypeAssignments/UpdateAvailability | Update objectTypeAssignment availability.


# **objectTypeAssignmentsArchive**
> objectTypeAssignmentsArchive($request, $real_estate_agency_id)



**Required permission :**    * [objecttypeassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsArchive: ', $e->getMessage(), PHP_EOL;
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

# **objectTypeAssignmentsDefineNew**
> \Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse objectTypeAssignmentsDefineNew($request, $real_estate_agency_id)

Defines a new objectTypeAssignment instance, without saving it.

Get a new objectTypeAssignment instance with default values set, but not saved into the database.  *** **Required permission :**    * [objecttypeassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectTypeAssignmentsDefineNewRequest(); // \Swagger\Client\Model\ObjectTypeAssignmentsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectTypeAssignmentsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectTypeAssignmentsDefineNewRequest**](../Model/ObjectTypeAssignmentsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse**](../Model/ObjectTypeAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectTypeAssignmentsDelete**
> objectTypeAssignmentsDelete($id, $real_estate_agency_id)

Delete selected objectTypeAssignment

Let a user delete a objectTypeAssignment selected by its objectTypeAssignment Id.  *** **Required permission :**    * [objecttypeassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsDelete: ', $e->getMessage(), PHP_EOL;
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

# **objectTypeAssignmentsLinkRelation**
> objectTypeAssignmentsLinkRelation($request, $real_estate_agency_id)

Link a relation to the specified object type assignments network.

**Required permission :**    * [objecttypeassignment.create_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectTypeAssignmentLinkRelationRequest(); // \Swagger\Client\Model\ObjectTypeAssignmentLinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsLinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsLinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectTypeAssignmentLinkRelationRequest**](../Model/ObjectTypeAssignmentLinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectTypeAssignmentsRead**
> \Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse objectTypeAssignmentsRead($id, $real_estate_agency_id)

Read a single objectTypeAssignment.

method allows the user to read all the objectTypeAssignment details of a single objectTypeAssignment by its Id.  *** **Required permission :**    * [objecttypeassignment.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectTypeAssignmentsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse**](../Model/ObjectTypeAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectTypeAssignmentsSave**
> \Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse objectTypeAssignmentsSave($request, $real_estate_agency_id)

Save given objectTypeAssignment

Let a user save (new/existing) objectTypeAssignment.  *** **Required permission :**    * [objecttypeassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectTypeAssignmentsSaveRequest(); // \Swagger\Client\Model\ObjectTypeAssignmentsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectTypeAssignmentsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectTypeAssignmentsSaveRequest**](../Model/ObjectTypeAssignmentsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse**](../Model/ObjectTypeAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectTypeAssignmentsUnarchive**
> objectTypeAssignmentsUnarchive($request, $real_estate_agency_id)



**Required permission :**    * [objecttypeassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **objectTypeAssignmentsUndelete**
> objectTypeAssignmentsUndelete($request, $real_estate_agency_id)

Undelete selected objectTypeAssignment

Let a user undelete a objectTypeAssignment selected by its objectTypeAssignment Id.  *** **Required permission :**    * [objecttypeassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsUndelete: ', $e->getMessage(), PHP_EOL;
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

# **objectTypeAssignmentsUnlinkRelation**
> objectTypeAssignmentsUnlinkRelation($request, $real_estate_agency_id)

Unlink a relation from the specified object type assignments network.

**Required permission :**    * [objecttypeassignment.delete_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectTypeAssignmentUnlinkRelationRequest(); // \Swagger\Client\Model\ObjectTypeAssignmentUnlinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectTypeAssignmentsUnlinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsUnlinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectTypeAssignmentUnlinkRelationRequest**](../Model/ObjectTypeAssignmentUnlinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectTypeAssignmentsUpdateAvailability**
> \Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse objectTypeAssignmentsUpdateAvailability($request, $real_estate_agency_id)

Update objectTypeAssignment availability.

Mark selected objectTypeAssignment as sold (under conditions), rented (under conditions), withdrawn or available again.  *** **Required permission :**    * [objecttypeassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectTypeAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectTypeAssignmentsUpdateAvailabilityRequest(); // \Swagger\Client\Model\ObjectTypeAssignmentsUpdateAvailabilityRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectTypeAssignmentsUpdateAvailability($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectTypeAssignmentsApi->objectTypeAssignmentsUpdateAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectTypeAssignmentsUpdateAvailabilityRequest**](../Model/ObjectTypeAssignmentsUpdateAvailabilityRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectTypeAssignmentsSingleItemResponse**](../Model/ObjectTypeAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

