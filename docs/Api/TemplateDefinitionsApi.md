# Swagger\Client\TemplateDefinitionsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateDefinitionsArchive**](TemplateDefinitionsApi.md#templateDefinitionsArchive) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/Archive | Archive selected TemplateDefinition
[**templateDefinitionsDefineNew**](TemplateDefinitionsApi.md#templateDefinitionsDefineNew) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/DefineNew | Defines a new TemplateDefinition instance, without saving it.
[**templateDefinitionsDelete**](TemplateDefinitionsApi.md#templateDefinitionsDelete) | **DELETE** /v3/{RealEstateAgencyId}/TemplateDefinitions | Delete selected TemplateDefinition
[**templateDefinitionsMerge**](TemplateDefinitionsApi.md#templateDefinitionsMerge) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/Merge | Returns a merged TemplateDefinition instance.
[**templateDefinitionsMergeText**](TemplateDefinitionsApi.md#templateDefinitionsMergeText) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/MergeText | Merge text based on specified text instead of a Template Definition.
[**templateDefinitionsRead**](TemplateDefinitionsApi.md#templateDefinitionsRead) | **GET** /v3/{RealEstateAgencyId}/TemplateDefinitions | Read a single TemplateDefinition.
[**templateDefinitionsSave**](TemplateDefinitionsApi.md#templateDefinitionsSave) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions | Save given TemplateDefinition
[**templateDefinitionsSearch**](TemplateDefinitionsApi.md#templateDefinitionsSearch) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/Search | Search for TemplateDefinitions.
[**templateDefinitionsSearchMergeFields**](TemplateDefinitionsApi.md#templateDefinitionsSearchMergeFields) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/SearchMergeFields | 
[**templateDefinitionsUnarchive**](TemplateDefinitionsApi.md#templateDefinitionsUnarchive) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/Unarchive | Unarchive selected TemplateDefinition
[**templateDefinitionsUndelete**](TemplateDefinitionsApi.md#templateDefinitionsUndelete) | **POST** /v3/{RealEstateAgencyId}/TemplateDefinitions/Undelete | Undelete selected templateDefinition


# **templateDefinitionsArchive**
> templateDefinitionsArchive($request, $real_estate_agency_id)

Archive selected TemplateDefinition

Let a user archive a TemplateDefinition selected by its Id.  *** **Required permission :**    * [template_definition.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsArchive: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionsDefineNew**
> \Swagger\Client\Model\TemplateDefinitionSingleItemResponse templateDefinitionsDefineNew($request, $real_estate_agency_id)

Defines a new TemplateDefinition instance, without saving it.

**Required permission :**    * [template_definition.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionDefineNewRequest(); // \Swagger\Client\Model\TemplateDefinitionDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionDefineNewRequest**](../Model/TemplateDefinitionDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionSingleItemResponse**](../Model/TemplateDefinitionSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsDelete**
> templateDefinitionsDelete($id, $real_estate_agency_id)

Delete selected TemplateDefinition

Let a user delete a TemplateDefinition selected by its Id.  *** **Required permission :**    * [template_definition.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsDelete: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionsMerge**
> \Swagger\Client\Model\TemplateDefinitionSingleItemResponse templateDefinitionsMerge($request, $real_estate_agency_id)

Returns a merged TemplateDefinition instance.

**Required permission :**    * [template_definition.execute]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionMergeRequest(); // \Swagger\Client\Model\TemplateDefinitionMergeRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsMerge($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionMergeRequest**](../Model/TemplateDefinitionMergeRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionSingleItemResponse**](../Model/TemplateDefinitionSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsMergeText**
> \Swagger\Client\Model\TemplateDefinitionMergeTextResponse templateDefinitionsMergeText($request, $real_estate_agency_id)

Merge text based on specified text instead of a Template Definition.

**Required permission :**    * [template_definition.execute]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionMergeTextRequest(); // \Swagger\Client\Model\TemplateDefinitionMergeTextRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsMergeText($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsMergeText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionMergeTextRequest**](../Model/TemplateDefinitionMergeTextRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionMergeTextResponse**](../Model/TemplateDefinitionMergeTextResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsRead**
> \Swagger\Client\Model\TemplateDefinitionSingleItemResponse templateDefinitionsRead($id, $real_estate_agency_id)

Read a single TemplateDefinition.

This method allows the user to read the full Template Definition details of a TemplateDefinition by its Id.  *** **Required permission :**    * [template_definition.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionSingleItemResponse**](../Model/TemplateDefinitionSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsSave**
> \Swagger\Client\Model\TemplateDefinitionSingleItemResponse templateDefinitionsSave($request, $real_estate_agency_id)

Save given TemplateDefinition

Let a user save a/an (new/existing) TemplateDefinition.  *** **Required permission :**    * [template_definition.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionSaveRequest(); // \Swagger\Client\Model\TemplateDefinitionSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionSaveRequest**](../Model/TemplateDefinitionSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionSingleItemResponse**](../Model/TemplateDefinitionSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsSearch**
> \Swagger\Client\Model\TemplateDefinitionSearchResponse templateDefinitionsSearch($request, $real_estate_agency_id)

Search for TemplateDefinitions.

Method allows the user search for TemplateDefinitions using given search query.  *** **Required permission :**    * [template_definition.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionSearchRequest(); // \Swagger\Client\Model\TemplateDefinitionSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionSearchRequest**](../Model/TemplateDefinitionSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionSearchResponse**](../Model/TemplateDefinitionSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsSearchMergeFields**
> \Swagger\Client\Model\TemplateDefinitionMergeFieldSearchResponse templateDefinitionsSearchMergeFields($request, $real_estate_agency_id)



**Required permission :**    * [template_definition.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TemplateDefinitionMergeFieldSearchRequest(); // \Swagger\Client\Model\TemplateDefinitionMergeFieldSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->templateDefinitionsSearchMergeFields($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsSearchMergeFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TemplateDefinitionMergeFieldSearchRequest**](../Model/TemplateDefinitionMergeFieldSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TemplateDefinitionMergeFieldSearchResponse**](../Model/TemplateDefinitionMergeFieldSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateDefinitionsUnarchive**
> templateDefinitionsUnarchive($request, $real_estate_agency_id)

Unarchive selected TemplateDefinition

Let a user unarchive a TemplateDefinition selected by its Id.  *** **Required permission :**    * [template_definition.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **templateDefinitionsUndelete**
> templateDefinitionsUndelete($request, $real_estate_agency_id)

Undelete selected templateDefinition

Let a user undelete a templateDefinition selected by its Id.  *** **Required permission :**    * [template_definition.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TemplateDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->templateDefinitionsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateDefinitionsApi->templateDefinitionsUndelete: ', $e->getMessage(), PHP_EOL;
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

