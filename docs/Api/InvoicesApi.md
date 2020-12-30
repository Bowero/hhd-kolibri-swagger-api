# Swagger\Client\InvoicesApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicesArchive**](InvoicesApi.md#invoicesArchive) | **POST** /v3/{RealEstateAgencyId}/Invoices/Archive | Archive selected invoice
[**invoicesDefineNew**](InvoicesApi.md#invoicesDefineNew) | **POST** /v3/{RealEstateAgencyId}/Invoices/DefineNew | Defines a new invoice instance, without saving it.
[**invoicesDelete**](InvoicesApi.md#invoicesDelete) | **DELETE** /v3/{RealEstateAgencyId}/Invoices | Delete selected invoice
[**invoicesExport**](InvoicesApi.md#invoicesExport) | **POST** /v3/{RealEstateAgencyId}/Invoices/Export | Search for invoices and export result to Excel.
[**invoicesRead**](InvoicesApi.md#invoicesRead) | **GET** /v3/{RealEstateAgencyId}/Invoices | Fetch a single invoice.
[**invoicesSave**](InvoicesApi.md#invoicesSave) | **POST** /v3/{RealEstateAgencyId}/Invoices | Save given invoice
[**invoicesSearch**](InvoicesApi.md#invoicesSearch) | **POST** /v3/{RealEstateAgencyId}/Invoices/Search | Search for invoices.
[**invoicesSearchAndExport**](InvoicesApi.md#invoicesSearchAndExport) | **GET** /v3/{RealEstateAgencyId}/Invoices/SearchAndExport | Search for invoices and export result to Excel.
[**invoicesUnarchive**](InvoicesApi.md#invoicesUnarchive) | **POST** /v3/{RealEstateAgencyId}/Invoices/Unarchive | 
[**invoicesUndelete**](InvoicesApi.md#invoicesUndelete) | **POST** /v3/{RealEstateAgencyId}/Invoices/Undelete | Undelete selected invoice


# **invoicesArchive**
> invoicesArchive($request, $real_estate_agency_id)

Archive selected invoice

Lets a user archive an invoice selected by its id  *** **Required permission :**    * [invoice.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ArchiveRequest(); // \Swagger\Client\Model\ArchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->invoicesArchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesArchive: ', $e->getMessage(), PHP_EOL;
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

# **invoicesDefineNew**
> \Swagger\Client\Model\InvoicesSingleItemResponse invoicesDefineNew($request, $real_estate_agency_id)

Defines a new invoice instance, without saving it.

Get a new invoice instance with default values set, but not saved into the database.  *** **Required permission :**    * [invoice.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\InvoicesDefineNewRequest(); // \Swagger\Client\Model\InvoicesDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->invoicesDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\InvoicesDefineNewRequest**](../Model/InvoicesDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InvoicesSingleItemResponse**](../Model/InvoicesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesDelete**
> invoicesDelete($id, $real_estate_agency_id)

Delete selected invoice

Let a user delete a invoice selected by its invoice Id.  *** **Required permission :**    * [invoice.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->invoicesDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesDelete: ', $e->getMessage(), PHP_EOL;
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

# **invoicesExport**
> \SplFileObject invoicesExport($request, $real_estate_agency_id)

Search for invoices and export result to Excel.

This method allows the user to search for invoices using given search query and get the result in an Excel file. Use this POST method if the search request is too large for GET requests.  *** **Required permission :**    * [invoice.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\InvoicesSearchRequest(); // \Swagger\Client\Model\InvoicesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->invoicesExport($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\InvoicesSearchRequest**](../Model/InvoicesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesRead**
> \Swagger\Client\Model\InvoicesSingleItemResponse invoicesRead($id, $real_estate_agency_id)

Fetch a single invoice.

method allows the user to fetch the full invoice details of a single invoice by its Id.  *** **Required permission :**    * [invoice.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->invoicesRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InvoicesSingleItemResponse**](../Model/InvoicesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesSave**
> \Swagger\Client\Model\InvoicesSingleItemResponse invoicesSave($request, $real_estate_agency_id)

Save given invoice

Let a user save (new/existing) invoice.  *** **Required permission :**    * [invoice.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\InvoicesSaveRequest(); // \Swagger\Client\Model\InvoicesSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->invoicesSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\InvoicesSaveRequest**](../Model/InvoicesSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InvoicesSingleItemResponse**](../Model/InvoicesSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesSearch**
> \Swagger\Client\Model\InvoicesSearchResponse invoicesSearch($request, $real_estate_agency_id)

Search for invoices.

method allows the user search for invoices using given search query.  *** **Required permission :**    * [invoice.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\InvoicesSearchRequest(); // \Swagger\Client\Model\InvoicesSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->invoicesSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\InvoicesSearchRequest**](../Model/InvoicesSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InvoicesSearchResponse**](../Model/InvoicesSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesSearchAndExport**
> \SplFileObject invoicesSearchAndExport($real_estate_agency_id, $invoice_id, $skip_system_invoices_are_missing_check, $status_filter, $order_by, $term_fields, $parent_id, $culture, $overdue_from, $overdue_until, $invoice_date_from, $invoice_date_until, $filter_by_active, $order, $skip, $take, $term)

Search for invoices and export result to Excel.

This method allows the user to search for invoices using given search query and get the result in an Excel file.  *** **Required permission :**    * [invoice.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$invoice_id = "invoice_id_example"; // string | Search by a specific invoice Id. Used to return/refresh one search result.
$skip_system_invoices_are_missing_check = true; // bool | Search by a specific invoice Id. Used to return/refresh one search result.
$status_filter = array(new \Swagger\Client\Model\\Swagger\Client\Model\InvoiceStatus()); // \Swagger\Client\Model\InvoiceStatus[] | Only return invoices with given status.
$order_by = "order_by_example"; // string | Order the results by the indicated invoice field.
$term_fields = array(new \Swagger\Client\Model\\Swagger\Client\Model\InvoiceTermField()); // \Swagger\Client\Model\InvoiceTermField[] | 
$parent_id = "parent_id_example"; // string | Specify a parent ID to search invoices based on either an Assignment id or a Relation id.
$culture = "culture_example"; // string | The culture name in the format languagecode2-contry/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\")
$overdue_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$overdue_until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_date_until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$filter_by_active = "filter_by_active_example"; // string | Show archived or active items. Default: 'ActiveOnly': show active items.
$order = "order_example"; // string | Order search results ascending or descending.
$skip = 56; // int | Number of results to skip.
$take = 56; // int | Number of results to return. If a value higher than 100 is provided, it is set to 100.
$term = "term_example"; // string | Search by given text term in the fields indicated by TermFields

try {
    $result = $apiInstance->invoicesSearchAndExport($real_estate_agency_id, $invoice_id, $skip_system_invoices_are_missing_check, $status_filter, $order_by, $term_fields, $parent_id, $culture, $overdue_from, $overdue_until, $invoice_date_from, $invoice_date_until, $filter_by_active, $order, $skip, $take, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesSearchAndExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **invoice_id** | **string**| Search by a specific invoice Id. Used to return/refresh one search result. | [optional]
 **skip_system_invoices_are_missing_check** | **bool**| Search by a specific invoice Id. Used to return/refresh one search result. | [optional]
 **status_filter** | [**\Swagger\Client\Model\InvoiceStatus[]**](../Model/\Swagger\Client\Model\InvoiceStatus.md)| Only return invoices with given status. | [optional]
 **order_by** | **string**| Order the results by the indicated invoice field. | [optional]
 **term_fields** | [**\Swagger\Client\Model\InvoiceTermField[]**](../Model/\Swagger\Client\Model\InvoiceTermField.md)|  | [optional]
 **parent_id** | **string**| Specify a parent ID to search invoices based on either an Assignment id or a Relation id. | [optional]
 **culture** | **string**| The culture name in the format languagecode2-contry/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;) | [optional]
 **overdue_from** | **\DateTime**|  | [optional]
 **overdue_until** | **\DateTime**|  | [optional]
 **invoice_date_from** | **\DateTime**|  | [optional]
 **invoice_date_until** | **\DateTime**|  | [optional]
 **filter_by_active** | **string**| Show archived or active items. Default: &#39;ActiveOnly&#39;: show active items. | [optional]
 **order** | **string**| Order search results ascending or descending. | [optional]
 **skip** | **int**| Number of results to skip. | [optional]
 **take** | **int**| Number of results to return. If a value higher than 100 is provided, it is set to 100. | [optional]
 **term** | **string**| Search by given text term in the fields indicated by TermFields | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesUnarchive**
> invoicesUnarchive($request, $real_estate_agency_id)



**Required permission :**    * [invoice.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UnarchiveRequest(); // \Swagger\Client\Model\UnarchiveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->invoicesUnarchive($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUnarchive: ', $e->getMessage(), PHP_EOL;
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

# **invoicesUndelete**
> invoicesUndelete($request, $real_estate_agency_id)

Undelete selected invoice

Let a user undelete a invoice selected by its invoice Id.  *** **Required permission :**    * [invoice.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->invoicesUndelete($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesUndelete: ', $e->getMessage(), PHP_EOL;
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

