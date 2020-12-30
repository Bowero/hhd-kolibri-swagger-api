# Swagger\Client\DefaultFolderTreesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**defaultFolderTreesDefineNew**](DefaultFolderTreesApi.md#defaultFolderTreesDefineNew) | **POST** /v3/{RealEstateAgencyId}/DefaultFolderTrees/DefineNew | Defines a new default folderTree instance, without saving it.
[**defaultFolderTreesDelete**](DefaultFolderTreesApi.md#defaultFolderTreesDelete) | **DELETE** /v3/{RealEstateAgencyId}/DefaultFolderTrees | Delete selected default folderTree
[**defaultFolderTreesRead**](DefaultFolderTreesApi.md#defaultFolderTreesRead) | **GET** /v3/{RealEstateAgencyId}/DefaultFolderTrees | Read a single default folderTree.
[**defaultFolderTreesSave**](DefaultFolderTreesApi.md#defaultFolderTreesSave) | **POST** /v3/{RealEstateAgencyId}/DefaultFolderTrees | Save given default folderTree
[**defaultFolderTreesSearch**](DefaultFolderTreesApi.md#defaultFolderTreesSearch) | **POST** /v3/{RealEstateAgencyId}/DefaultFolderTrees/Search | Search for default folderTrees.
[**defaultFolderTreesUndelete**](DefaultFolderTreesApi.md#defaultFolderTreesUndelete) | **POST** /v3/{RealEstateAgencyId}/DefaultFolderTrees/Undelete | Undelete selected default folderTree


# **defaultFolderTreesDefineNew**
> \Swagger\Client\Model\DefaultFolderTreesSingleItemResponse defaultFolderTreesDefineNew($request, $real_estate_agency_id)

Defines a new default folderTree instance, without saving it.

Get a new default folderTree instance with default values set, but not saved into the database.  *** **Required permission :**    * [default_folder_tree.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DefaultFolderTreesDefineNewRequest(); // \Swagger\Client\Model\DefaultFolderTreesDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->defaultFolderTreesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DefaultFolderTreesDefineNewRequest**](../Model/DefaultFolderTreesDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DefaultFolderTreesSingleItemResponse**](../Model/DefaultFolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultFolderTreesDelete**
> defaultFolderTreesDelete($id, $real_estate_agency_id)

Delete selected default folderTree

Let a user delete a default folderTree selected by its default folderTree Id.  *** **Required permission :**    * [default_folder_tree.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->defaultFolderTreesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesDelete: ', $e->getMessage(), PHP_EOL;
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

# **defaultFolderTreesRead**
> \Swagger\Client\Model\DefaultFolderTreesSingleItemResponse defaultFolderTreesRead($id, $real_estate_agency_id)

Read a single default folderTree.

method allows the user to read all the default folderTree details of a single default folderTree by its Id.  *** **Required permission :**    * [default_folder_tree.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->defaultFolderTreesRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DefaultFolderTreesSingleItemResponse**](../Model/DefaultFolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultFolderTreesSave**
> \Swagger\Client\Model\DefaultFolderTreesSingleItemResponse defaultFolderTreesSave($request, $real_estate_agency_id)

Save given default folderTree

Let a user save (new/existing) default folderTree.  *** **Required permission :**    * [default_folder_tree.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DefaultFolderTreesSaveRequest(); // \Swagger\Client\Model\DefaultFolderTreesSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->defaultFolderTreesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DefaultFolderTreesSaveRequest**](../Model/DefaultFolderTreesSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DefaultFolderTreesSingleItemResponse**](../Model/DefaultFolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultFolderTreesSearch**
> \Swagger\Client\Model\DefaultFolderTreesSearchResponse defaultFolderTreesSearch($request, $real_estate_agency_id)

Search for default folderTrees.

method allows the user search for default folderTrees using given search query.  *** **Required permission :**    * [default_folder_tree.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DefaultFolderTreesSearchRequest(); // \Swagger\Client\Model\DefaultFolderTreesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->defaultFolderTreesSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DefaultFolderTreesSearchRequest**](../Model/DefaultFolderTreesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DefaultFolderTreesSearchResponse**](../Model/DefaultFolderTreesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultFolderTreesUndelete**
> defaultFolderTreesUndelete($request, $real_estate_agency_id)

Undelete selected default folderTree

Let a user undelete a default folderTree selected by its default folderTree Id.  *** **Required permission :**    * [default_folder_tree.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DefaultFolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->defaultFolderTreesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultFolderTreesApi->defaultFolderTreesUndelete: ', $e->getMessage(), PHP_EOL;
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

