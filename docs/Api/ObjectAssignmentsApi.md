# Swagger\Client\ObjectAssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**objectAssignmentsArchive**](ObjectAssignmentsApi.md#objectAssignmentsArchive) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/Archive | 
[**objectAssignmentsClone**](ObjectAssignmentsApi.md#objectAssignmentsClone) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/Clone | Clone an existing objectAssignment.
[**objectAssignmentsDefineNew**](ObjectAssignmentsApi.md#objectAssignmentsDefineNew) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/DefineNew | Defines a new objectAssignment instance, without saving it.
[**objectAssignmentsDefineNewFromObjectType**](ObjectAssignmentsApi.md#objectAssignmentsDefineNewFromObjectType) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/DefineNewFromObjectType | Defines a new objectAssignment instance from an objectTypeAssignment, without saving it.
[**objectAssignmentsDelete**](ObjectAssignmentsApi.md#objectAssignmentsDelete) | **DELETE** /v3/{RealEstateAgencyId}/ObjectAssignments | Delete selected objectAssignment
[**objectAssignmentsLinkRelation**](ObjectAssignmentsApi.md#objectAssignmentsLinkRelation) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/LinkRelation | Link a relation to the specified object assignments network.
[**objectAssignmentsMakeVersionOf**](ObjectAssignmentsApi.md#objectAssignmentsMakeVersionOf) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/MakeVersionOf | Bundle assignments and make Source Assignment an new version of the Target Assignment.
[**objectAssignmentsRead**](ObjectAssignmentsApi.md#objectAssignmentsRead) | **GET** /v3/{RealEstateAgencyId}/ObjectAssignments | Read a single objectAssignment.
[**objectAssignmentsSave**](ObjectAssignmentsApi.md#objectAssignmentsSave) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments | Save given objectAssignment
[**objectAssignmentsUnarchive**](ObjectAssignmentsApi.md#objectAssignmentsUnarchive) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/Unarchive | 
[**objectAssignmentsUndelete**](ObjectAssignmentsApi.md#objectAssignmentsUndelete) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/Undelete | Undelete selected objectAssignment
[**objectAssignmentsUnlinkRelation**](ObjectAssignmentsApi.md#objectAssignmentsUnlinkRelation) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/UnlinkRelation | Unlink a relation from the specified object assignments network.
[**objectAssignmentsUpdateAvailability**](ObjectAssignmentsApi.md#objectAssignmentsUpdateAvailability) | **POST** /v3/{RealEstateAgencyId}/ObjectAssignments/UpdateAvailability | Update objectAssignment availability.


# **objectAssignmentsArchive**
> objectAssignmentsArchive($request, $real_estate_agency_id)



**Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsArchive: ', $e->getMessage(), PHP_EOL;
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

# **objectAssignmentsClone**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsClone($request, $real_estate_agency_id)

Clone an existing objectAssignment.

Let a user define a new objectAssignment based on an existing objectAssignment.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentsCloneRequest(); // \Swagger\Client\Model\ObjectAssignmentsCloneRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsClone($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentsCloneRequest**](../Model/ObjectAssignmentsCloneRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsDefineNew**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsDefineNew($request, $real_estate_agency_id)

Defines a new objectAssignment instance, without saving it.

Get a new objectAssignment instance with default values set, but not saved into the database.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentsDefineNewRequest(); // \Swagger\Client\Model\ObjectAssignmentsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentsDefineNewRequest**](../Model/ObjectAssignmentsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsDefineNewFromObjectType**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsDefineNewFromObjectType($request, $real_estate_agency_id)

Defines a new objectAssignment instance from an objectTypeAssignment, without saving it.

Get a new objectAssignment instance with values copied from the given objectTypeAssignment, but not saved into the database.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentsDefineNewFromObjectTypeRequest(); // \Swagger\Client\Model\ObjectAssignmentsDefineNewFromObjectTypeRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsDefineNewFromObjectType($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsDefineNewFromObjectType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentsDefineNewFromObjectTypeRequest**](../Model/ObjectAssignmentsDefineNewFromObjectTypeRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsDelete**
> objectAssignmentsDelete($id, $real_estate_agency_id)

Delete selected objectAssignment

Let a user delete a objectAssignment selected by its objectAssignment Id.  *** **Required permission :**    * [objectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsDelete: ', $e->getMessage(), PHP_EOL;
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

# **objectAssignmentsLinkRelation**
> objectAssignmentsLinkRelation($request, $real_estate_agency_id)

Link a relation to the specified object assignments network.

**Required permission :**    * [objectassignment.create_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentLinkRelationRequest(); // \Swagger\Client\Model\ObjectAssignmentLinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsLinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsLinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentLinkRelationRequest**](../Model/ObjectAssignmentLinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsMakeVersionOf**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsMakeVersionOf($request, $real_estate_agency_id)

Bundle assignments and make Source Assignment an new version of the Target Assignment.

Versions are used to bundle Assignments and make the latest version the representative of all lower             versions of the Assignment.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\MakeVersionOfRequest(); // \Swagger\Client\Model\MakeVersionOfRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsMakeVersionOf($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsMakeVersionOf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MakeVersionOfRequest**](../Model/MakeVersionOfRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsRead**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsRead($id, $real_estate_agency_id)

Read a single objectAssignment.

method allows the user to read all the objectAssignment details of a single objectAssignment by its Id.  *** **Required permission :**    * [objectassignment.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsSave**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsSave($request, $real_estate_agency_id)

Save given objectAssignment

Let a user save (new/existing) objectAssignment.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentsSaveRequest(); // \Swagger\Client\Model\ObjectAssignmentsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentsSaveRequest**](../Model/ObjectAssignmentsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsUnarchive**
> objectAssignmentsUnarchive($request, $real_estate_agency_id)



**Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **objectAssignmentsUndelete**
> objectAssignmentsUndelete($request, $real_estate_agency_id)

Undelete selected objectAssignment

Let a user undelete a objectAssignment selected by its objectAssignment Id.  *** **Required permission :**    * [objectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsUndelete: ', $e->getMessage(), PHP_EOL;
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

# **objectAssignmentsUnlinkRelation**
> objectAssignmentsUnlinkRelation($request, $real_estate_agency_id)

Unlink a relation from the specified object assignments network.

**Required permission :**    * [objectassignment.delete_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentUnlinkRelationRequest(); // \Swagger\Client\Model\ObjectAssignmentUnlinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->objectAssignmentsUnlinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsUnlinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentUnlinkRelationRequest**](../Model/ObjectAssignmentUnlinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **objectAssignmentsUpdateAvailability**
> \Swagger\Client\Model\ObjectAssignmentsSingleItemResponse objectAssignmentsUpdateAvailability($request, $real_estate_agency_id)

Update objectAssignment availability.

Mark selected objectAssignment as sold (under conditions), rented (under conditions), withdrawn or available again.  *** **Required permission :**    * [objectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ObjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequest(); // \Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->objectAssignmentsUpdateAvailability($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectAssignmentsApi->objectAssignmentsUpdateAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ObjectAssignmentsUpdateAvailabilityRequest**](../Model/ObjectAssignmentsUpdateAvailabilityRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectAssignmentsSingleItemResponse**](../Model/ObjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

