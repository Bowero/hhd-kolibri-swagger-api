# Swagger\Client\TemplateDefinitionCategoriesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateDefinitionCategoriesArchive**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesArchive) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories/Archive | Archive selected TemplateDefinitionCategory
[**templateDefinitionCategoriesDefineNew**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesDefineNew) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories/DefineNew | Defines a new TemplateDefinitionCategory instance, without saving it.
[**templateDefinitionCategoriesDelete**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesDelete) | **DELETE** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories | Delete selected TemplateDefinition category
[**templateDefinitionCategoriesRead**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesRead) | **GET** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories | Read a single TemplateDefinition Category.
[**templateDefinitionCategoriesSave**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesSave) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories | Save given TemplateDefinitionCategory
[**templateDefinitionCategoriesSearch**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesSearch) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories/Search | Search for TemplateDefinition categories.
[**templateDefinitionCategoriesUnarchive**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesUnarchive) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories/Unarchive | Unarchive selected TemplateDefinitionCategory
[**templateDefinitionCategoriesUndelete**](TemplateDefinitionCategoriesApi.md#templateDefinitionCategoriesUndelete) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitionCategories/Undelete | Undelete selected templateDefinitionCategory


# **templateDefinitionCategoriesArchive**
> templateDefinitionCategoriesArchive($request, $real_estate_agency_id)

Archive selected TemplateDefinitionCategory

Let a user archive a TemplateDefinitionCategory selected by its Id.  *** **Required permission :**    * [template_definition_category.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionCategoriesArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesArchive: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionCategoriesDefineNew**
> \Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse templateDefinitionCategoriesDefineNew($request, $real_estate_agency_id)

Defines a new TemplateDefinitionCategory instance, without saving it.

**Required permission :**    * [template_definition_category.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionCategoryDefineNewRequest(); // \Swagger\Client\Model\TemplateDefinitionCategoryDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionCategoriesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionCategoryDefineNewRequest**](../Model/TemplateDefinitionCategoryDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse**](../Model/TemplateDefinitionCategorySingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionCategoriesDelete**
> templateDefinitionCategoriesDelete($id, $real_estate_agency_id)

Delete selected TemplateDefinition category

Let a user delete a TemplateDefinition category selected by its Id.  *** **Required permission :**    * [template_definition_category.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionCategoriesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesDelete: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionCategoriesRead**
> \Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse templateDefinitionCategoriesRead($id, $real_estate_agency_id)

Read a single TemplateDefinition Category.

This method allows the user to read the full Template Definition category details of a TemplateDefinition category by its Id.  *** **Required permission :**    * [template_definition_category.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionCategoriesRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse**](../Model/TemplateDefinitionCategorySingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionCategoriesSave**
> \Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse templateDefinitionCategoriesSave($request, $real_estate_agency_id)

Save given TemplateDefinitionCategory

Let a user save a/an (new/existing) TemplateDefinitionCategory.  *** **Required permission :**    * [template_definition_category.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionCategorySaveRequest(); // \Swagger\Client\Model\TemplateDefinitionCategorySaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionCategoriesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionCategorySaveRequest**](../Model/TemplateDefinitionCategorySaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionCategorySingleItemResponse**](../Model/TemplateDefinitionCategorySingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionCategoriesSearch**
> \Swagger\Client\Model\TemplateDefinitionCategoriesSearchResponse templateDefinitionCategoriesSearch($request, $real_estate_agency_id)

Search for TemplateDefinition categories.

Method allows the user search for TemplateDefinition categories using given search query.  *** **Required permission :**    * [template_definition_category.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionCategoriesSearchRequest(); // \Swagger\Client\Model\TemplateDefinitionCategoriesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionCategoriesSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionCategoriesSearchRequest**](../Model/TemplateDefinitionCategoriesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionCategoriesSearchResponse**](../Model/TemplateDefinitionCategoriesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionCategoriesUnarchive**
> templateDefinitionCategoriesUnarchive($request, $real_estate_agency_id)

Unarchive selected TemplateDefinitionCategory

Let a user unarchive a TemplateDefinitionCategory selected by its Id.  *** **Required permission :**    * [template_definition_category.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionCategoriesUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionCategoriesUndelete**
> templateDefinitionCategoriesUndelete($request, $real_estate_agency_id)

Undelete selected templateDefinitionCategory

Let a user undelete a templateDefinitionCategory selected by its Id.  *** **Required permission :**    * [template_definition_category.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionCategoriesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionCategoriesApi->templateDefinitionCategoriesUndelete: ', $e->getMessage(), PHP_EOL;
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

