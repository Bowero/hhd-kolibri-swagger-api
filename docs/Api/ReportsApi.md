# Swagger\Client\ReportsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsDownload**](ReportsApi.md#reportsDownload) | **GET** /v3/{RealEstateAgencyId}/Reports/Download/{invoiceId} | Download an invoice in PDF format
[**reportsGetDocumentFormats**](ReportsApi.md#reportsGetDocumentFormats) | **GET** /v3/{RealEstateAgencyId}/Reports/Formats | Return a list of all possible document formats to export to (E.g. pdf, csv, etc..)
[**reportsSearchTemplates**](ReportsApi.md#reportsSearchTemplates) | **POST** /v3/{RealEstateAgencyId}/Reports/SearchTemplates | Search for report templates


# **reportsDownload**
> reportsDownload($invoice_id, $signed_token, $real_estate_agency_id)

Download an invoice in PDF format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | 
$signed_token = "signed_token_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->reportsDownload($invoice_id, $signed_token, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**|  |
 **signed_token** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetDocumentFormats**
> \Swagger\Client\Model\ExtensionInfo[] reportsGetDocumentFormats($real_estate_agency_id)

Return a list of all possible document formats to export to (E.g. pdf, csv, etc..)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->reportsGetDocumentFormats($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetDocumentFormats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ExtensionInfo[]**](../Model/ExtensionInfo.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSearchTemplates**
> \Swagger\Client\Model\SearchReportTemplateResponse reportsSearchTemplates($request, $real_estate_agency_id)

Search for report templates

This method allows the user to search for templates that can be used for printing an invoice.  *** **Required permission :**    * [report.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SearchReportTemplatesRequest(); // \Swagger\Client\Model\SearchReportTemplatesRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->reportsSearchTemplates($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSearchTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SearchReportTemplatesRequest**](../Model/SearchReportTemplatesRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SearchReportTemplateResponse**](../Model/SearchReportTemplateResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

