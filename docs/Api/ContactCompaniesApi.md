# Swagger\Client\ContactCompaniesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactCompaniesArchive**](ContactCompaniesApi.md#contactCompaniesArchive) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/Archive | Archive selected ContactCompany
[**contactCompaniesDefineNew**](ContactCompaniesApi.md#contactCompaniesDefineNew) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/DefineNew | Defines a new ContactCompany instance, without saving it.
[**contactCompaniesDelete**](ContactCompaniesApi.md#contactCompaniesDelete) | **DELETE** /v3/{RealEstateAgencyId}/ContactCompanies | Delete selected ContactCompany
[**contactCompaniesRead**](ContactCompaniesApi.md#contactCompaniesRead) | **GET** /v3/{RealEstateAgencyId}/ContactCompanies | Read a single ContactCompany.
[**contactCompaniesRelocate**](ContactCompaniesApi.md#contactCompaniesRelocate) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/Relocate | Update ContactCompany&#39;s address using the future address of the ContactCompany.
[**contactCompaniesRemoveLogo**](ContactCompaniesApi.md#contactCompaniesRemoveLogo) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/RemoveLogo | Remove Logo of selected ContactCompany
[**contactCompaniesSave**](ContactCompaniesApi.md#contactCompaniesSave) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies | Save given ContactCompany
[**contactCompaniesUnarchive**](ContactCompaniesApi.md#contactCompaniesUnarchive) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/Unarchive | Unarchive selected ContactCompany
[**contactCompaniesUndelete**](ContactCompaniesApi.md#contactCompaniesUndelete) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/Undelete | 
[**contactCompaniesUpdateLogo**](ContactCompaniesApi.md#contactCompaniesUpdateLogo) | **POST** /v3/{RealEstateAgencyId}/ContactCompanies/UpdateLogo | Update logo of selected ContactCompany


# **contactCompaniesArchive**
> contactCompaniesArchive($request, $real_estate_agency_id)

Archive selected ContactCompany

Let a user archive a ContactCompany selected by its ContactCompany Id.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesArchive: ', $e->getMessage(), PHP_EOL;
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

# **contactCompaniesDefineNew**
> \Swagger\Client\Model\ContactCompaniesSingleItemResponse contactCompaniesDefineNew($request, $real_estate_agency_id)

Defines a new ContactCompany instance, without saving it.

Get a new ContactCompany instance with default values set, but not saved into the database.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactCompaniesDefineNewRequest(); // \Swagger\Client\Model\ContactCompaniesDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactCompaniesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactCompaniesDefineNewRequest**](../Model/ContactCompaniesDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactCompaniesSingleItemResponse**](../Model/ContactCompaniesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCompaniesDelete**
> contactCompaniesDelete($id, $real_estate_agency_id)

Delete selected ContactCompany

Let a user delete a ContactCompany selected by its ContactCompany Id.  *** **Required permission :**    * [contactcompany.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesDelete: ', $e->getMessage(), PHP_EOL;
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

# **contactCompaniesRead**
> \Swagger\Client\Model\ContactCompaniesSingleItemResponse contactCompaniesRead($id, $real_estate_agency_id)

Read a single ContactCompany.

method allows the user to read all the ContactCompany details of a single ContactCompany by its Id.  *** **Required permission :**    * [contactcompany.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactCompaniesRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactCompaniesSingleItemResponse**](../Model/ContactCompaniesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCompaniesRelocate**
> contactCompaniesRelocate($request, $real_estate_agency_id)

Update ContactCompany's address using the future address of the ContactCompany.

ContactCompany's future address must be set and FutureAddress ActivateDate must be in the past.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactCompaniesRelocateRequest(); // \Swagger\Client\Model\ContactCompaniesRelocateRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesRelocate($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesRelocate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactCompaniesRelocateRequest**](../Model/ContactCompaniesRelocateRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCompaniesRemoveLogo**
> contactCompaniesRemoveLogo($request, $real_estate_agency_id)

Remove Logo of selected ContactCompany

Let a user remove the Logo without fetching/saving the whole ContactCompany.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PhotoBlobRemoveRequest(); // \Swagger\Client\Model\PhotoBlobRemoveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesRemoveLogo($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesRemoveLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PhotoBlobRemoveRequest**](../Model/PhotoBlobRemoveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCompaniesSave**
> \Swagger\Client\Model\ContactCompaniesSingleItemResponse contactCompaniesSave($request, $real_estate_agency_id)

Save given ContactCompany

Let a user save (new/existing) ContactCompany.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ContactCompaniesSaveRequest(); // \Swagger\Client\Model\ContactCompaniesSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactCompaniesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContactCompaniesSaveRequest**](../Model/ContactCompaniesSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContactCompaniesSingleItemResponse**](../Model/ContactCompaniesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCompaniesUnarchive**
> contactCompaniesUnarchive($request, $real_estate_agency_id)

Unarchive selected ContactCompany

Let a user unarchive a ContactCompany selected by its ContactCompany Id.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **contactCompaniesUndelete**
> contactCompaniesUndelete($request, $real_estate_agency_id)



**Required permission :**    * [contactcompany.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->contactCompaniesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesUndelete: ', $e->getMessage(), PHP_EOL;
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

# **contactCompaniesUpdateLogo**
> \Swagger\Client\Model\PhotoBlobSaveResponse contactCompaniesUpdateLogo($request, $real_estate_agency_id)

Update logo of selected ContactCompany

Let a user update the logo without fetching/saving the whole ContactCompany.  *** **Required permission :**    * [contactcompany.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PhotoBlobSaveRequest(); // \Swagger\Client\Model\PhotoBlobSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->contactCompaniesUpdateLogo($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactCompaniesApi->contactCompaniesUpdateLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PhotoBlobSaveRequest**](../Model/PhotoBlobSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PhotoBlobSaveResponse**](../Model/PhotoBlobSaveResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

