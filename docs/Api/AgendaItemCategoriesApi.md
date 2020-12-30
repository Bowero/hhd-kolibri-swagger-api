# Swagger\Client\AgendaItemCategoriesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agendaItemCategoriesArchive**](AgendaItemCategoriesApi.md#agendaItemCategoriesArchive) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/Archive | Archive selected agendaItemCategory
[**agendaItemCategoriesDefineNew**](AgendaItemCategoriesApi.md#agendaItemCategoriesDefineNew) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/DefineNew | Defines a new agendaItemCategory instance, without saving it.
[**agendaItemCategoriesDelete**](AgendaItemCategoriesApi.md#agendaItemCategoriesDelete) | **DELETE** /v3/{RealEstateAgencyId}/AgendaItemCategories | Delete selected agendaItemCategory
[**agendaItemCategoriesMoveLinkedAgendaItems**](AgendaItemCategoriesApi.md#agendaItemCategoriesMoveLinkedAgendaItems) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/MoveLinkedAgendaItems | 
[**agendaItemCategoriesRead**](AgendaItemCategoriesApi.md#agendaItemCategoriesRead) | **GET** /v3/{RealEstateAgencyId}/AgendaItemCategories | Read a single agendaItem Category.
[**agendaItemCategoriesSave**](AgendaItemCategoriesApi.md#agendaItemCategoriesSave) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories | Save given agendaItemCategory
[**agendaItemCategoriesSearch**](AgendaItemCategoriesApi.md#agendaItemCategoriesSearch) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/Search | Search for agendaItem categories.
[**agendaItemCategoriesUnarchive**](AgendaItemCategoriesApi.md#agendaItemCategoriesUnarchive) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/Unarchive | Unarchive selected agendaItemCategory
[**agendaItemCategoriesUndelete**](AgendaItemCategoriesApi.md#agendaItemCategoriesUndelete) | **POST** /v3/{RealEstateAgencyId}/AgendaItemCategories/Undelete | Undelete selected agendaItemCategory


# **agendaItemCategoriesArchive**
> agendaItemCategoriesArchive($request, $real_estate_agency_id)

Archive selected agendaItemCategory

Let a user archive a agendaItemCategory selected by its agendaItemCategory Id.  *** **Required permission :**    * [agendaitemcategory.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemCategoriesArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesArchive: ', $e->getMessage(), PHP_EOL;
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

# **agendaItemCategoriesDefineNew**
> \Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse agendaItemCategoriesDefineNew($request, $real_estate_agency_id)

Defines a new agendaItemCategory instance, without saving it.

Get a new agendaItemCategory instance with default values set, but not saved into the database.  *** **Required permission :**    * [agendaitemcategory.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemCategorysDefineNewRequest(); // \Swagger\Client\Model\AgendaItemCategorysDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemCategoriesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemCategorysDefineNewRequest**](../Model/AgendaItemCategorysDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse**](../Model/AgendaItemCategoriesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemCategoriesDelete**
> agendaItemCategoriesDelete($id, $real_estate_agency_id)

Delete selected agendaItemCategory

Let a user delete a agendaItemCategory selected by its agendaItemCategory Id.  *** **Required permission :**    * [agendaitemcategory.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemCategoriesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesDelete: ', $e->getMessage(), PHP_EOL;
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

# **agendaItemCategoriesMoveLinkedAgendaItems**
> agendaItemCategoriesMoveLinkedAgendaItems($request, $real_estate_agency_id)



**Required permission :**    * [agendaitemcategory.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaCategoryMoveRequest(); // \Swagger\Client\Model\AgendaCategoryMoveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemCategoriesMoveLinkedAgendaItems($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesMoveLinkedAgendaItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaCategoryMoveRequest**](../Model/AgendaCategoryMoveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemCategoriesRead**
> \Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse agendaItemCategoriesRead($id, $real_estate_agency_id)

Read a single agendaItem Category.

method allows the user to read the full agendaItem category details of a single agendaItem category by its Id.  *** **Required permission :**    * [agendaitemcategory.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemCategoriesRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse**](../Model/AgendaItemCategoriesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemCategoriesSave**
> \Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse agendaItemCategoriesSave($request, $real_estate_agency_id)

Save given agendaItemCategory

Let a user save (new/existing) agendaItemCategory.  *** **Required permission :**    * [agendaitemcategory.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemCategorysSaveRequest(); // \Swagger\Client\Model\AgendaItemCategorysSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemCategoriesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemCategorysSaveRequest**](../Model/AgendaItemCategorysSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemCategoriesSingleItemResponse**](../Model/AgendaItemCategoriesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemCategoriesSearch**
> \Swagger\Client\Model\AgendaItemCategoriesSearchResponse agendaItemCategoriesSearch($request, $real_estate_agency_id)

Search for agendaItem categories.

Method allows the user search for agendaItem categories using given search query.  *** **Required permission :**    * [agendaitemcategory.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemCategoriesSearchRequest(); // \Swagger\Client\Model\AgendaItemCategoriesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemCategoriesSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemCategoriesSearchRequest**](../Model/AgendaItemCategoriesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemCategoriesSearchResponse**](../Model/AgendaItemCategoriesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemCategoriesUnarchive**
> agendaItemCategoriesUnarchive($request, $real_estate_agency_id)

Unarchive selected agendaItemCategory

Let a user unarchive a agendaItemCategory selected by its agendaItemCategory Id.  *** **Required permission :**    * [agendaitemcategory.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemCategoriesUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **agendaItemCategoriesUndelete**
> agendaItemCategoriesUndelete($request, $real_estate_agency_id)

Undelete selected agendaItemCategory

Let a user undelete a agendaItemCategory selected by its agendaItemCategory Id.  *** **Required permission :**    * [agendaitemcategory.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemCategoriesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemCategoriesApi->agendaItemCategoriesUndelete: ', $e->getMessage(), PHP_EOL;
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

