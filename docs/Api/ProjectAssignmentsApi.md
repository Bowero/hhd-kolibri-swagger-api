# Swagger\Client\ProjectAssignmentsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectAssignmentsArchive**](ProjectAssignmentsApi.md#projectAssignmentsArchive) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/Archive | 
[**projectAssignmentsDefineNew**](ProjectAssignmentsApi.md#projectAssignmentsDefineNew) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/DefineNew | Defines a new projectAssignment instance, without saving it.
[**projectAssignmentsDelete**](ProjectAssignmentsApi.md#projectAssignmentsDelete) | **DELETE** /v3/{RealEstateAgencyId}/ProjectAssignments | Delete selected projectAssignment
[**projectAssignmentsLinkRelation**](ProjectAssignmentsApi.md#projectAssignmentsLinkRelation) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/LinkRelation | Link a relation to the specified project assignments network.
[**projectAssignmentsRead**](ProjectAssignmentsApi.md#projectAssignmentsRead) | **GET** /v3/{RealEstateAgencyId}/ProjectAssignments | Read a single projectAssignment.
[**projectAssignmentsSave**](ProjectAssignmentsApi.md#projectAssignmentsSave) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments | Save given projectAssignment
[**projectAssignmentsUnarchive**](ProjectAssignmentsApi.md#projectAssignmentsUnarchive) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/Unarchive | 
[**projectAssignmentsUndelete**](ProjectAssignmentsApi.md#projectAssignmentsUndelete) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/Undelete | Undelete selected projectAssignment
[**projectAssignmentsUnlinkRelation**](ProjectAssignmentsApi.md#projectAssignmentsUnlinkRelation) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/UnlinkRelation | Unlink a relation from the specified project assignments network.
[**projectAssignmentsUpdateAvailability**](ProjectAssignmentsApi.md#projectAssignmentsUpdateAvailability) | **POST** /v3/{RealEstateAgencyId}/ProjectAssignments/UpdateAvailability | Update projectAssignment availability.


# **projectAssignmentsArchive**
> projectAssignmentsArchive($request, $real_estate_agency_id)



**Required permission :**    * [projectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsArchive: ', $e->getMessage(), PHP_EOL;
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

# **projectAssignmentsDefineNew**
> \Swagger\Client\Model\ProjectAssignmentsSingleItemResponse projectAssignmentsDefineNew($request, $real_estate_agency_id)

Defines a new projectAssignment instance, without saving it.

Get a new projectAssignment instance with default values set, but not saved into the database.  *** **Required permission :**    * [projectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProjectAssignmentsDefineNewRequest(); // \Swagger\Client\Model\ProjectAssignmentsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->projectAssignmentsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProjectAssignmentsDefineNewRequest**](../Model/ProjectAssignmentsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectAssignmentsSingleItemResponse**](../Model/ProjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectAssignmentsDelete**
> projectAssignmentsDelete($id, $real_estate_agency_id)

Delete selected projectAssignment

Let a user delete a projectAssignment selected by its projectAssignment Id.  *** **Required permission :**    * [projectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsDelete: ', $e->getMessage(), PHP_EOL;
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

# **projectAssignmentsLinkRelation**
> projectAssignmentsLinkRelation($request, $real_estate_agency_id)

Link a relation to the specified project assignments network.

**Required permission :**    * [projectassignment.create_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProjectAssignmentLinkRelationRequest(); // \Swagger\Client\Model\ProjectAssignmentLinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsLinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsLinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProjectAssignmentLinkRelationRequest**](../Model/ProjectAssignmentLinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectAssignmentsRead**
> \Swagger\Client\Model\ProjectAssignmentsSingleItemResponse projectAssignmentsRead($id, $real_estate_agency_id)

Read a single projectAssignment.

method allows the user to read all the projectAssignment details of a single projectAssignment by its Id.  *** **Required permission :**    * [projectassignment.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->projectAssignmentsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectAssignmentsSingleItemResponse**](../Model/ProjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectAssignmentsSave**
> \Swagger\Client\Model\ProjectAssignmentsSingleItemResponse projectAssignmentsSave($request, $real_estate_agency_id)

Save given projectAssignment

Let a user save (new/existing) projectAssignment.  *** **Required permission :**    * [projectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProjectAssignmentsSaveRequest(); // \Swagger\Client\Model\ProjectAssignmentsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->projectAssignmentsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProjectAssignmentsSaveRequest**](../Model/ProjectAssignmentsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectAssignmentsSingleItemResponse**](../Model/ProjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectAssignmentsUnarchive**
> projectAssignmentsUnarchive($request, $real_estate_agency_id)



**Required permission :**    * [projectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **projectAssignmentsUndelete**
> projectAssignmentsUndelete($request, $real_estate_agency_id)

Undelete selected projectAssignment

Let a user undelete a projectAssignment selected by its projectAssignment Id.  *** **Required permission :**    * [projectassignment.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsUndelete: ', $e->getMessage(), PHP_EOL;
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

# **projectAssignmentsUnlinkRelation**
> projectAssignmentsUnlinkRelation($request, $real_estate_agency_id)

Unlink a relation from the specified project assignments network.

**Required permission :**    * [projectassignment.delete_link]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProjectAssignmentUnlinkRelationRequest(); // \Swagger\Client\Model\ProjectAssignmentUnlinkRelationRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->projectAssignmentsUnlinkRelation($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsUnlinkRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProjectAssignmentUnlinkRelationRequest**](../Model/ProjectAssignmentUnlinkRelationRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectAssignmentsUpdateAvailability**
> \Swagger\Client\Model\ProjectAssignmentsSingleItemResponse projectAssignmentsUpdateAvailability($request, $real_estate_agency_id)

Update projectAssignment availability.

Mark selected projectAssignment as sold (under conditions), rented (under conditions), withdrawn or available again.  *** **Required permission :**    * [projectassignment.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProjectAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProjectAssignmentsUpdateAvailabilityRequest(); // \Swagger\Client\Model\ProjectAssignmentsUpdateAvailabilityRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->projectAssignmentsUpdateAvailability($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectAssignmentsApi->projectAssignmentsUpdateAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProjectAssignmentsUpdateAvailabilityRequest**](../Model/ProjectAssignmentsUpdateAvailabilityRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProjectAssignmentsSingleItemResponse**](../Model/ProjectAssignmentsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

