# Swagger\Client\BlobsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**blobsCreateBatchDownload**](BlobsApi.md#blobsCreateBatchDownload) | **POST** /v3/{RealEstateAgencyId}/Blobs/CreateBatchDownload | Create a batch download
[**blobsDownload**](BlobsApi.md#blobsDownload) | **GET** /v3/{RealEstateAgencyId}/Blobs/Download/{filedataid}/{filenameandextension} | 
[**blobsDownload2**](BlobsApi.md#blobsDownload2) | **GET** /Download/{fileDataId}/{fileNameAndExtension} | 
[**blobsTempAccessDownload**](BlobsApi.md#blobsTempAccessDownload) | **GET** /v3/{RealEstateAgencyId}/Blobs/TempAccessDownload/{filedataid}/{filenameandextension} | 
[**blobsTempAccessDownload2**](BlobsApi.md#blobsTempAccessDownload2) | **GET** /TempAccessDownload/{fileDataId}/{fileNameAndExtension} | 
[**blobsUpload**](BlobsApi.md#blobsUpload) | **POST** /v3/{RealEstateAgencyId}/Blobs/Upload | 
[**blobsUploadFromUri**](BlobsApi.md#blobsUploadFromUri) | **POST** /v3/{RealEstateAgencyId}/Blobs/UploadFromUri | 


# **blobsCreateBatchDownload**
> \Swagger\Client\Model\BatchDownloadResponse blobsCreateBatchDownload($request, $real_estate_agency_id)

Create a batch download

Let a user save (new/existing) bid.  *** **Required permission :**    * [blob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\BatchDownloadRequest(); // \Swagger\Client\Model\BatchDownloadRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->blobsCreateBatchDownload($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsCreateBatchDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BatchDownloadRequest**](../Model/BatchDownloadRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BatchDownloadResponse**](../Model/BatchDownloadResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsDownload**
> blobsDownload($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name)



**Required permission :**    * [blob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_data_id = "file_data_id_example"; // string | 
$file_name_and_extension = "file_name_and_extension_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$convert_to_pdf = false; // bool | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->blobsDownload($file_data_id, $file_name_and_extension, $real_estate_agency_id, $convert_to_pdf, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data_id** | **string**|  |
 **file_name_and_extension** | **string**|  |
 **real_estate_agency_id** | **string**|  |
 **convert_to_pdf** | **bool**|  | [optional] [default to false]
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsDownload2**
> blobsDownload2($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name)



**Required permission :**    * [blob.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_data_id = "file_data_id_example"; // string | 
$file_name_and_extension = "file_name_and_extension_example"; // string | 
$convert_to_pdf = false; // bool | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->blobsDownload2($file_data_id, $file_name_and_extension, $convert_to_pdf, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsDownload2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data_id** | **string**|  |
 **file_name_and_extension** | **string**|  |
 **convert_to_pdf** | **bool**|  | [optional] [default to false]
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsTempAccessDownload**
> blobsTempAccessDownload($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_data_id = "file_data_id_example"; // string | 
$file_name_and_extension = "file_name_and_extension_example"; // string | 
$signed_token = "signed_token_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$convert_to_pdf = false; // bool | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->blobsTempAccessDownload($file_data_id, $file_name_and_extension, $signed_token, $real_estate_agency_id, $convert_to_pdf, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsTempAccessDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data_id** | **string**|  |
 **file_name_and_extension** | **string**|  |
 **signed_token** | **string**|  |
 **real_estate_agency_id** | **string**|  |
 **convert_to_pdf** | **bool**|  | [optional] [default to false]
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsTempAccessDownload2**
> blobsTempAccessDownload2($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_data_id = "file_data_id_example"; // string | 
$file_name_and_extension = "file_name_and_extension_example"; // string | 
$signed_token = "signed_token_example"; // string | 
$convert_to_pdf = false; // bool | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->blobsTempAccessDownload2($file_data_id, $file_name_and_extension, $signed_token, $convert_to_pdf, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsTempAccessDownload2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_data_id** | **string**|  |
 **file_name_and_extension** | **string**|  |
 **signed_token** | **string**|  |
 **convert_to_pdf** | **bool**|  | [optional] [default to false]
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsUpload**
> \Swagger\Client\Model\UploadResponse blobsUpload($real_estate_agency_id)



**Required permission :**    * [blob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->blobsUpload($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blobsUploadFromUri**
> \Swagger\Client\Model\UploadResponse blobsUploadFromUri($request, $real_estate_agency_id)



**Required permission :**    * [blob.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UploadFromUriRequest(); // \Swagger\Client\Model\UploadFromUriRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->blobsUploadFromUri($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobsApi->blobsUploadFromUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UploadFromUriRequest**](../Model/UploadFromUriRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\UploadResponse**](../Model/UploadResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

