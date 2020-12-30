# Swagger\Client\AgendaItemsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agendaItemsAddRecurrenceException**](AgendaItemsApi.md#agendaItemsAddRecurrenceException) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/AddRecurrenceException | Adds an occurence exception to a recurring agenda item.
[**agendaItemsCancel**](AgendaItemsApi.md#agendaItemsCancel) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Cancel | Cancel selected agenda item
[**agendaItemsConfirm**](AgendaItemsApi.md#agendaItemsConfirm) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Confirm | Confirm selected agenda item
[**agendaItemsDefineNew**](AgendaItemsApi.md#agendaItemsDefineNew) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/DefineNew | Defines a new agendaItem instance, without saving it.
[**agendaItemsDelete**](AgendaItemsApi.md#agendaItemsDelete) | **DELETE** /v3/{RealEstateAgencyId}/AgendaItems | Delete selected agendaItem
[**agendaItemsExport**](AgendaItemsApi.md#agendaItemsExport) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Export | Search for agenda items and export result to Excel.
[**agendaItemsMove**](AgendaItemsApi.md#agendaItemsMove) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Move | Update selected agendaItem by changing its startDateTime or endDateTime, allDayEvent end/or attendees (employees).
[**agendaItemsRead**](AgendaItemsApi.md#agendaItemsRead) | **GET** /v3/{RealEstateAgencyId}/AgendaItems | Read a single agendaItem.
[**agendaItemsSave**](AgendaItemsApi.md#agendaItemsSave) | **POST** /v3/{RealEstateAgencyId}/AgendaItems | Save given agendaItem
[**agendaItemsSearch**](AgendaItemsApi.md#agendaItemsSearch) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Search | Search for agendaItems.
[**agendaItemsSearchAndExport**](AgendaItemsApi.md#agendaItemsSearchAndExport) | **GET** /v3/{RealEstateAgencyId}/AgendaItems/SearchAndExport | Search for agenda items and export result to Excel.
[**agendaItemsUndelete**](AgendaItemsApi.md#agendaItemsUndelete) | **POST** /v3/{RealEstateAgencyId}/AgendaItems/Undelete | Undelete selected agendaItem


# **agendaItemsAddRecurrenceException**
> \Swagger\Client\Model\AgendaItemsAddRecurrencyExceptionResponse agendaItemsAddRecurrenceException($request, $real_estate_agency_id)

Adds an occurence exception to a recurring agenda item.

Let a user create an exception to a recurring agenda item. The (parent) agenda item is changed: an exception date is added and persisted.             In case both a new start date and end date is given (not null) a new agenda item is also added and persisted, with its             parentId set to the recurring parent agenda item.  *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsAddRecurrencyExceptionRequest(); // \Swagger\Client\Model\AgendaItemsAddRecurrencyExceptionRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsAddRecurrenceException($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsAddRecurrenceException: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsAddRecurrencyExceptionRequest**](../Model/AgendaItemsAddRecurrencyExceptionRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsAddRecurrencyExceptionResponse**](../Model/AgendaItemsAddRecurrencyExceptionResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsCancel**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsCancel($request, $real_estate_agency_id)

Cancel selected agenda item

Let a user cancel a agenda item selected by its agenda item Id.  *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsCancelRequest(); // \Swagger\Client\Model\AgendaItemsCancelRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsCancel($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsCancelRequest**](../Model/AgendaItemsCancelRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsConfirm**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsConfirm($request, $real_estate_agency_id)

Confirm selected agenda item

Let a user confirm a agenda item selected by its agenda item Id.  *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsConfirmRequest(); // \Swagger\Client\Model\AgendaItemsConfirmRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsConfirm($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsConfirmRequest**](../Model/AgendaItemsConfirmRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsDefineNew**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsDefineNew($request, $real_estate_agency_id)

Defines a new agendaItem instance, without saving it.

Get a new agendaItem instance with default values set, but not saved into the database.  *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsDefineNewRequest(); // \Swagger\Client\Model\AgendaItemsDefineNewRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsDefineNew($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsDefineNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsDefineNewRequest**](../Model/AgendaItemsDefineNewRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsDelete**
> agendaItemsDelete($id, $real_estate_agency_id)

Delete selected agendaItem

Let a user delete a agendaItem selected by its agendaItem Id.  *** **Required permission :**    * [agendaitem.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->agendaItemsDelete($id, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsDelete: ', $e->getMessage(), PHP_EOL;
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

# **agendaItemsExport**
> \SplFileObject agendaItemsExport($request, $real_estate_agency_id)

Search for agenda items and export result to Excel.

This method allows the user to search for agenda items using given search query and get the result in an Excel file. Use this POST method if the search request is too large for GET requests.  *** **Required permission :**    * [agendaitem.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsSearchRequest(); // \Swagger\Client\Model\AgendaItemsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsExport($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsSearchRequest**](../Model/AgendaItemsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsMove**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsMove($request, $real_estate_agency_id)

Update selected agendaItem by changing its startDateTime or endDateTime, allDayEvent end/or attendees (employees).

In case null is given for a specific field the current field value won't be changed. E.g. when AllDayEvent is null the             value of AllDayEvent of the AgendaItem won't be updated with a new value. Also when LinkedEmployeeIds is null or empty list the             attendees (employees) of the AgendaItem won't be changed.   *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsMoveRequest(); // \Swagger\Client\Model\AgendaItemsMoveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsMove($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsMoveRequest**](../Model/AgendaItemsMoveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsRead**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsRead($id, $real_estate_agency_id)

Read a single agendaItem.

method allows the user to read the full agendaItem details of a single agendaItem by its Id.  *** **Required permission :**    * [agendaitem.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsSave**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsSave($request, $real_estate_agency_id)

Save given agendaItem

Let a user save (new/existing) agendaItem.  *** **Required permission :**    * [agendaitem.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsSaveRequest(); // \Swagger\Client\Model\AgendaItemsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsSaveRequest**](../Model/AgendaItemsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsSearch**
> \Swagger\Client\Model\AgendaItemsSearchResponse agendaItemsSearch($request, $real_estate_agency_id)

Search for agendaItems.

method allows the user search for agendaItems using given search query.  *** **Required permission :**    * [agendaitem.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AgendaItemsSearchRequest(); // \Swagger\Client\Model\AgendaItemsSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AgendaItemsSearchRequest**](../Model/AgendaItemsSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSearchResponse**](../Model/AgendaItemsSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agendaItemsSearchAndExport**
> \SplFileObject agendaItemsSearchAndExport($real_estate_agency_id, $category_ids, $category_types, $employee_ids, $order_by, $period_date_time_max, $period_date_time_min, $term_fields, $culture, $is_canceled, $is_confirmed, $return_occurences_of_recurring_agenda_items, $agenda_item_id, $agenda_item_ids, $filter_by_active, $order, $skip, $take, $term)

Search for agenda items and export result to Excel.

This method allows the user to search for agenda items using given search query and get the result in an Excel file.  *** **Required permission :**    * [agendaitem.export]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$category_ids = array("category_ids_example"); // string[] | Only return agendaItems linked at one of the categories indicated by given AgendaItem category Id's.
$category_types = array(new \Swagger\Client\Model\\Swagger\Client\Model\AgendaItemCategoryType()); // \Swagger\Client\Model\AgendaItemCategoryType[] | Only return agendaItems linked at one of the categories with a category type indicated by given AgendaItem Category Types.
$employee_ids = array("employee_ids_example"); // string[] | Search the agendaItems of the given employees.
$order_by = "order_by_example"; // string | Order the results by the indicated AgendaItem field.
$period_date_time_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Highest value agenda items should occur. Not required when searching by AgendaItemId.
$period_date_time_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Lowest value agenda items should occur. Not required when searching by AgendaItemId.
$term_fields = array(new \Swagger\Client\Model\\Swagger\Client\Model\AgendaItemTermField()); // \Swagger\Client\Model\AgendaItemTermField[] | Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
$culture = "culture_example"; // string | The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").
$is_canceled = true; // bool | If isCanceled is null, results are eiter canceled or not. If it is defined as true, only canceled results are returned. If it is defined as false, only not canceled results are returned.
$is_confirmed = true; // bool | If isConfirmed is null, results are either confirmed or not. If it is defined as true, only confirmed results are returned. If it is defined as false, only non confirmed results are returned.
$return_occurences_of_recurring_agenda_items = true; // bool | If returnOccurencesOfRecurringAgendaItems is set to true each occurence of a recurring agendaitem will be in the search results. When set to false only the recurring agendaItem (with its recurrency patter) is in the results. For the /AgendaItem/Search endpoint the default value of returnOccurencesOfRecurringAgendaItems is false. For the /AgendaItem/SearchAndExport endpoint the default value of returnOccurencesOfRecurringAgendaItems is true.
$agenda_item_id = "agenda_item_id_example"; // string | Search by a specific agendaItem Id. Used to return/refresh one search result.
$agenda_item_ids = array("agenda_item_ids_example"); // string[] | Search by specific agenda item Ids.
$filter_by_active = "filter_by_active_example"; // string | Show archived or active items. Default: 'ActiveOnly': show active items.
$order = "order_example"; // string | Order search results ascending or descending.
$skip = 56; // int | Number of results to skip.
$take = 56; // int | Number of results to return. If a value higher than 100 is provided, it is set to 100.
$term = "term_example"; // string | Search by given text term in the fields indicated by TermFields

try {
    $result = $apiInstance->agendaItemsSearchAndExport($real_estate_agency_id, $category_ids, $category_types, $employee_ids, $order_by, $period_date_time_max, $period_date_time_min, $term_fields, $culture, $is_canceled, $is_confirmed, $return_occurences_of_recurring_agenda_items, $agenda_item_id, $agenda_item_ids, $filter_by_active, $order, $skip, $take, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsSearchAndExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **category_ids** | [**string[]**](../Model/string.md)| Only return agendaItems linked at one of the categories indicated by given AgendaItem category Id&#39;s. | [optional]
 **category_types** | [**\Swagger\Client\Model\AgendaItemCategoryType[]**](../Model/\Swagger\Client\Model\AgendaItemCategoryType.md)| Only return agendaItems linked at one of the categories with a category type indicated by given AgendaItem Category Types. | [optional]
 **employee_ids** | [**string[]**](../Model/string.md)| Search the agendaItems of the given employees. | [optional]
 **order_by** | **string**| Order the results by the indicated AgendaItem field. | [optional]
 **period_date_time_max** | **\DateTime**| Highest value agenda items should occur. Not required when searching by AgendaItemId. | [optional]
 **period_date_time_min** | **\DateTime**| Lowest value agenda items should occur. Not required when searching by AgendaItemId. | [optional]
 **term_fields** | [**\Swagger\Client\Model\AgendaItemTermField[]**](../Model/\Swagger\Client\Model\AgendaItemTermField.md)| Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional]
 **culture** | **string**| The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional]
 **is_canceled** | **bool**| If isCanceled is null, results are eiter canceled or not. If it is defined as true, only canceled results are returned. If it is defined as false, only not canceled results are returned. | [optional]
 **is_confirmed** | **bool**| If isConfirmed is null, results are either confirmed or not. If it is defined as true, only confirmed results are returned. If it is defined as false, only non confirmed results are returned. | [optional]
 **return_occurences_of_recurring_agenda_items** | **bool**| If returnOccurencesOfRecurringAgendaItems is set to true each occurence of a recurring agendaitem will be in the search results. When set to false only the recurring agendaItem (with its recurrency patter) is in the results. For the /AgendaItem/Search endpoint the default value of returnOccurencesOfRecurringAgendaItems is false. For the /AgendaItem/SearchAndExport endpoint the default value of returnOccurencesOfRecurringAgendaItems is true. | [optional]
 **agenda_item_id** | **string**| Search by a specific agendaItem Id. Used to return/refresh one search result. | [optional]
 **agenda_item_ids** | [**string[]**](../Model/string.md)| Search by specific agenda item Ids. | [optional]
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

# **agendaItemsUndelete**
> \Swagger\Client\Model\AgendaItemsSingleItemResponse agendaItemsUndelete($request, $real_estate_agency_id)

Undelete selected agendaItem

Let a user undelete a agendaItem selected by its agendaItem Id.  *** **Required permission :**    * [agendaitem.delete]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AgendaItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\UndeleteRequest(); // \Swagger\Client\Model\UndeleteRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->agendaItemsUndelete($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgendaItemsApi->agendaItemsUndelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UndeleteRequest**](../Model/UndeleteRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AgendaItemsSingleItemResponse**](../Model/AgendaItemsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

