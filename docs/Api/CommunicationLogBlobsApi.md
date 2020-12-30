# Swagger\Client\CommunicationLogBlobsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**communicationLogBlobsArchive**](CommunicationLogBlobsApi.md#communicationLogBlobsArchive) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Archive | Archive selected communicationLogBlob
[**communicationLogBlobsDefineNew**](CommunicationLogBlobsApi.md#communicationLogBlobsDefineNew) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/DefineNew | Defines a new communicationLogBlob instance, without saving it.
[**communicationLogBlobsDelete**](CommunicationLogBlobsApi.md#communicationLogBlobsDelete) | **DELETE** /v3/{RealEstateAgencyId}/CommunicationLogBlobs | Delete selected communicationLogBlob
[**communicationLogBlobsDownload**](CommunicationLogBlobsApi.md#communicationLogBlobsDownload) | **GET** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Download/{communicationLogBlobId}/{filenameandextension} | 
[**communicationLogBlobsDownloadAsEmailMessage**](CommunicationLogBlobsApi.md#communicationLogBlobsDownloadAsEmailMessage) | **GET** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/DownloadAsEmailMessage/{communicationLogBlobId} | Read a single communicationLogBlob as Email message object.
[**communicationLogBlobsRead**](CommunicationLogBlobsApi.md#communicationLogBlobsRead) | **GET** /v3/{RealEstateAgencyId}/CommunicationLogBlobs | Read a single communicationLogBlob.
[**communicationLogBlobsSave**](CommunicationLogBlobsApi.md#communicationLogBlobsSave) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs | Save given communicationLogBlob
[**communicationLogBlobsSearch**](CommunicationLogBlobsApi.md#communicationLogBlobsSearch) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Search | Search for communicationLogBlobs.
[**communicationLogBlobsUnarchive**](CommunicationLogBlobsApi.md#communicationLogBlobsUnarchive) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Unarchive | Unarchive selected communicationLogBlob
[**communicationLogBlobsUndelete**](CommunicationLogBlobsApi.md#communicationLogBlobsUndelete) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Undelete | Undelete selected communicationLogBlob
[**communicationLogBlobsUpload**](CommunicationLogBlobsApi.md#communicationLogBlobsUpload) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/Upload/{communicationLogBlobId} | 
[**communicationLogBlobsUploadAsEmailMessage**](CommunicationLogBlobsApi.md#communicationLogBlobsUploadAsEmailMessage) | **POST** /v3/{RealEstateAgencyId}/CommunicationLogBlobs/UploadAsEmailMessage | 


# **communicationLogBlobsArchive**
> communicationLogBlobsArchive($request, $real_estate_agency_id)

Archive selected communicationLogBlob

Let a user archive a communicationLogBlob selected by its communicationLogBlob Id.  *** **Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsArchive: ', $e->getMessage(), PHP_EOL;
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

# **communicationLogBlobsDefineNew**
> \Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse communicationLogBlobsDefineNew($request, $real_estate_agency_id)

Defines a new communicationLogBlob instance, without saving it.

Get a new communicationLogBlob instance with default values set, but not saved into the database.  *** **Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CommunicationLogBlobsDefineNewRequest(); // \Swagger\Client\Model\CommunicationLogBlobsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->communicationLogBlobsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CommunicationLogBlobsDefineNewRequest**](../Model/CommunicationLogBlobsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse**](../Model/CommunicationLogBlobsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsDelete**
> communicationLogBlobsDelete($id, $real_estate_agency_id)

Delete selected communicationLogBlob

Let a user delete a communicationLogBlob selected by its communicationLogBlob Id.  *** **Required permission :**    * [communicationLogBlob.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsDelete: ', $e->getMessage(), PHP_EOL;
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

# **communicationLogBlobsDownload**
> communicationLogBlobsDownload($communication_log_blob_id, $file_name_and_extension, $real_estate_agency_id)



**Required permission :**    * [communicationLogBlob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_log_blob_id = "communication_log_blob_id_example"; // string | 
$file_name_and_extension = "file_name_and_extension_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsDownload($communication_log_blob_id, $file_name_and_extension, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_log_blob_id** | **string**|  |
 **file_name_and_extension** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsDownloadAsEmailMessage**
> \Swagger\Client\Model\CommunicationLogBlobsDownloadAsEmailMessageResponse communicationLogBlobsDownloadAsEmailMessage($communication_log_blob_id, $real_estate_agency_id)

Read a single communicationLogBlob as Email message object.

method allows the user to read the communicationLogBlob converted to an email.  *** **Required permission :**    * [communicationLogBlob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_log_blob_id = "communication_log_blob_id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->communicationLogBlobsDownloadAsEmailMessage($communication_log_blob_id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsDownloadAsEmailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_log_blob_id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CommunicationLogBlobsDownloadAsEmailMessageResponse**](../Model/CommunicationLogBlobsDownloadAsEmailMessageResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsRead**
> \Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse communicationLogBlobsRead($id, $real_estate_agency_id)

Read a single communicationLogBlob.

method allows the user to read all the communicationLogBlob details of a single communicationLogBlob by its Id.  *** **Required permission :**    * [communicationLogBlob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->communicationLogBlobsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse**](../Model/CommunicationLogBlobsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsSave**
> \Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse communicationLogBlobsSave($request, $real_estate_agency_id)

Save given communicationLogBlob

Let a user save (new/existing) communicationLogBlob.  *** **Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CommunicationLogBlobsSaveRequest(); // \Swagger\Client\Model\CommunicationLogBlobsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->communicationLogBlobsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CommunicationLogBlobsSaveRequest**](../Model/CommunicationLogBlobsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CommunicationLogBlobsSingleItemResponse**](../Model/CommunicationLogBlobsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsSearch**
> \Swagger\Client\Model\CommunicationLogBlobsSearchResponse communicationLogBlobsSearch($request, $real_estate_agency_id)

Search for communicationLogBlobs.

method allows the user search for communicationLogBlobs using given search query.  *** **Required permission :**    * [communicationLogBlob.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CommunicationLogBlobsSearchRequest(); // \Swagger\Client\Model\CommunicationLogBlobsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->communicationLogBlobsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CommunicationLogBlobsSearchRequest**](../Model/CommunicationLogBlobsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CommunicationLogBlobsSearchResponse**](../Model/CommunicationLogBlobsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsUnarchive**
> communicationLogBlobsUnarchive($request, $real_estate_agency_id)

Unarchive selected communicationLogBlob

Let a user unarchive a communicationLogBlob selected by its communicationLogBlob Id.  *** **Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **communicationLogBlobsUndelete**
> communicationLogBlobsUndelete($request, $real_estate_agency_id)

Undelete selected communicationLogBlob

Let a user undelete a communicationLogBlob selected by its communicationLogBlob Id.  *** **Required permission :**    * [communicationLogBlob.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsUndelete: ', $e->getMessage(), PHP_EOL;
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

# **communicationLogBlobsUpload**
> communicationLogBlobsUpload($communication_log_blob_id, $real_estate_agency_id)



**Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_log_blob_id = "communication_log_blob_id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsUpload($communication_log_blob_id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_log_blob_id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communicationLogBlobsUploadAsEmailMessage**
> communicationLogBlobsUploadAsEmailMessage($request, $real_estate_agency_id)



**Required permission :**    * [communicationLogBlob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommunicationLogBlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CommunicationLogBlobsUploadAsEmailMessageRequest(); // \Swagger\Client\Model\CommunicationLogBlobsUploadAsEmailMessageRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->communicationLogBlobsUploadAsEmailMessage($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationLogBlobsApi->communicationLogBlobsUploadAsEmailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CommunicationLogBlobsUploadAsEmailMessageRequest**](../Model/CommunicationLogBlobsUploadAsEmailMessageRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

