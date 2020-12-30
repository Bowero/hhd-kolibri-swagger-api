# Swagger\Client\FolderTreesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**folderTreesDefineNew**](FolderTreesApi.md#folderTreesDefineNew) | **POST** /v3/{RealEstateAgencyId}/FolderTrees/DefineNew | Defines a new folderTree instance, without saving it.
[**folderTreesDelete**](FolderTreesApi.md#folderTreesDelete) | **DELETE** /v3/{RealEstateAgencyId}/FolderTrees | Delete selected folderTree
[**folderTreesRead**](FolderTreesApi.md#folderTreesRead) | **GET** /v3/{RealEstateAgencyId}/FolderTrees | Read a single folderTree.
[**folderTreesSave**](FolderTreesApi.md#folderTreesSave) | **POST** /v3/{RealEstateAgencyId}/FolderTrees | Save given folderTree
[**folderTreesSearch**](FolderTreesApi.md#folderTreesSearch) | **POST** /v3/{RealEstateAgencyId}/FolderTrees/Search | Search for folderTrees.
[**folderTreesUndelete**](FolderTreesApi.md#folderTreesUndelete) | **POST** /v3/{RealEstateAgencyId}/FolderTrees/Undelete | Undelete selected folderTree


# **folderTreesDefineNew**
> \Swagger\Client\Model\FolderTreesSingleItemResponse folderTreesDefineNew($request, $real_estate_agency_id)

Defines a new folderTree instance, without saving it.

Get a new folderTree instance with default values set, but not saved into the database.  *** **Required permission :**    * [folder_tree.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FolderTreesDefineNewRequest(); // \Swagger\Client\Model\FolderTreesDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->folderTreesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FolderTreesDefineNewRequest**](../Model/FolderTreesDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FolderTreesSingleItemResponse**](../Model/FolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderTreesDelete**
> folderTreesDelete($id, $real_estate_agency_id)

Delete selected folderTree

Let a user delete a folderTree selected by its folderTree Id.  *** **Required permission :**    * [folder_tree.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->folderTreesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesDelete: ', $e->getMessage(), PHP_EOL;
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

# **folderTreesRead**
> \Swagger\Client\Model\FolderTreesSingleItemResponse folderTreesRead($id, $real_estate_agency_id, $culture)

Read a single folderTree.

method allows the user to read all the folderTree details of a single folderTree by its Id.  *** **Required permission :**    * [folder_tree.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$culture = "culture_example"; // string | The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").

try {
    $result = $apiInstance->folderTreesRead($id, $real_estate_agency_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |
 **culture** | **string**| The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional]

### Return type

[**\Swagger\Client\Model\FolderTreesSingleItemResponse**](../Model/FolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderTreesSave**
> \Swagger\Client\Model\FolderTreesSingleItemResponse folderTreesSave($request, $real_estate_agency_id)

Save given folderTree

Let a user save (new/existing) folderTree.  *** **Required permission :**    * [folder_tree.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FolderTreesSaveRequest(); // \Swagger\Client\Model\FolderTreesSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->folderTreesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FolderTreesSaveRequest**](../Model/FolderTreesSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FolderTreesSingleItemResponse**](../Model/FolderTreesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderTreesSearch**
> \Swagger\Client\Model\FolderTreesSearchResponse folderTreesSearch($request, $real_estate_agency_id)

Search for folderTrees.

method allows the user search for folderTrees using given search query.  *** **Required permission :**    * [folder_tree.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FolderTreesSearchRequest(); // \Swagger\Client\Model\FolderTreesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->folderTreesSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FolderTreesSearchRequest**](../Model/FolderTreesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\FolderTreesSearchResponse**](../Model/FolderTreesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **folderTreesUndelete**
> folderTreesUndelete($request, $real_estate_agency_id)

Undelete selected folderTree

Let a user undelete a folderTree selected by its folderTree Id.  *** **Required permission :**    * [folder_tree.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolderTreesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->folderTreesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling FolderTreesApi->folderTreesUndelete: ', $e->getMessage(), PHP_EOL;
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

