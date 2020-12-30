# Swagger\Client\RemindersApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**remindersDisableReminder**](RemindersApi.md#remindersDisableReminder) | **POST** /v3/{RealEstateAgencyId}/Reminders/DisableReminder | Disable selected reminder
[**remindersRescheduleReminder**](RemindersApi.md#remindersRescheduleReminder) | **POST** /v3/{RealEstateAgencyId}/Reminders/RescheduleReminder | Reschedule selected reminder
[**remindersSearch**](RemindersApi.md#remindersSearch) | **POST** /v3/{RealEstateAgencyId}/Reminders/Search | Search for reminders.


# **remindersDisableReminder**
> remindersDisableReminder($request, $real_estate_agency_id)

Disable selected reminder

Let a user disable a reminder selected by its reminder Id.  *** **Required permission :**    * [reminder.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\DisableReminderRequest(); // \Swagger\Client\Model\DisableReminderRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->remindersDisableReminder($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->remindersDisableReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DisableReminderRequest**](../Model/DisableReminderRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remindersRescheduleReminder**
> remindersRescheduleReminder($request, $real_estate_agency_id)

Reschedule selected reminder

Let a user reschedule a reminder selected by its reminder Id.  *** **Required permission :**    * [reminder.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RescheduleReminderRequest(); // \Swagger\Client\Model\RescheduleReminderRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->remindersRescheduleReminder($request, $real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->remindersRescheduleReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RescheduleReminderRequest**](../Model/RescheduleReminderRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remindersSearch**
> \Swagger\Client\Model\RemindersSearchResponse remindersSearch($request, $real_estate_agency_id)

Search for reminders.

method allows the user search for reminders using given search query.  *** **Required permission :**    * [reminder.search]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RemindersSearchRequest(); // \Swagger\Client\Model\RemindersSearchRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->remindersSearch($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->remindersSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RemindersSearchRequest**](../Model/RemindersSearchRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RemindersSearchResponse**](../Model/RemindersSearchResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

