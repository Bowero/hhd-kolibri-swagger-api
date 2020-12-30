# Swagger\Client\DossierItemsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dossierItemsDefineNew**](DossierItemsApi.md#dossierItemsDefineNew) | **POST** /v3/{RealEstateAgencyId}/DossierItems/DefineNew | Defines a new dossierItem instance, without saving it.
[**dossierItemsDelete**](DossierItemsApi.md#dossierItemsDelete) | **DELETE** /v3/{RealEstateAgencyId}/DossierItems | Delete selected dossier item.
[**dossierItemsRead**](DossierItemsApi.md#dossierItemsRead) | **GET** /v3/{RealEstateAgencyId}/DossierItems | Read a single dossierItem.
[**dossierItemsSave**](DossierItemsApi.md#dossierItemsSave) | **POST** /v3/{RealEstateAgencyId}/DossierItems | Save given dossier item.
[**dossierItemsSearch**](DossierItemsApi.md#dossierItemsSearch) | **POST** /v3/{RealEstateAgencyId}/DossierItems/Search | Search for dossier items.
[**dossierItemsUndelete**](DossierItemsApi.md#dossierItemsUndelete) | **POST** /v3/{RealEstateAgencyId}/DossierItems/Undelete | Undelete selected dossier item.


# **dossierItemsDefineNew**
> \Swagger\Client\Model\DossierItemsSingleItemResponse dossierItemsDefineNew($request, $real_estate_agency_id)

Defines a new dossierItem instance, without saving it.

Get a new dossierItem instance with default values set, but not saved into the database.  *** **Required permission :**    * [dossieritem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DossierItemsDefineNewRequest(); // \Swagger\Client\Model\DossierItemsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->dossierItemsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DossierItemsDefineNewRequest**](../Model/DossierItemsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DossierItemsSingleItemResponse**](../Model/DossierItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dossierItemsDelete**
> dossierItemsDelete($id, $real_estate_agency_id)

Delete selected dossier item.

Let a user delete a dossier item selected by its dossier item Id.  *** **Required permission :**    * [dossieritem.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Delete dossier item by given id.
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->dossierItemsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Delete dossier item by given id. |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dossierItemsRead**
> \Swagger\Client\Model\DossierItemsSingleItemResponse dossierItemsRead($id, $real_estate_agency_id)

Read a single dossierItem.

method allows the user to read all the dossierItem details of a single dossierItem by its Id.  *** **Required permission :**    * [dossieritem.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->dossierItemsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DossierItemsSingleItemResponse**](../Model/DossierItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dossierItemsSave**
> \Swagger\Client\Model\DossierItemsSingleItemResponse dossierItemsSave($request, $real_estate_agency_id)

Save given dossier item.

Let a user save (new/existing) dossier items.  *** **Required permission :**    * [dossieritem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DossierItemsSaveRequest(); // \Swagger\Client\Model\DossierItemsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->dossierItemsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DossierItemsSaveRequest**](../Model/DossierItemsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DossierItemsSingleItemResponse**](../Model/DossierItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dossierItemsSearch**
> \Swagger\Client\Model\DossierItemsSearchResponse dossierItemsSearch($request, $real_estate_agency_id)

Search for dossier items.

method allows the user search for dossier items using given search query.  *** **Required permission :**    * [dossieritem.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DossierItemsSearchRequest(); // \Swagger\Client\Model\DossierItemsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->dossierItemsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DossierItemsSearchRequest**](../Model/DossierItemsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DossierItemsSearchResponse**](../Model/DossierItemsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dossierItemsUndelete**
> \Swagger\Client\Model\DossierItemsSingleItemResponse dossierItemsUndelete($request, $real_estate_agency_id)

Undelete selected dossier item.

Let a user undelete a dossier item selected by its dossier item Id.             After an undelete the dossier item gets a new Id.  *** **Required permission :**    * [dossieritem.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DossierItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DossierItemsUndeleteRequest(); // \Swagger\Client\Model\DossierItemsUndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->dossierItemsUndelete($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DossierItemsApi->dossierItemsUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DossierItemsUndeleteRequest**](../Model/DossierItemsUndeleteRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DossierItemsSingleItemResponse**](../Model/DossierItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

