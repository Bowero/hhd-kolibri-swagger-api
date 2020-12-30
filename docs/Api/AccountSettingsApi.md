# Swagger\Client\AccountSettingsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountSettingsRead**](AccountSettingsApi.md#accountSettingsRead) | **GET** /v3/{RealEstateAgencyId}/AccountSettings | Read a single accountSettings.
[**accountSettingsReadByEmployeeId**](AccountSettingsApi.md#accountSettingsReadByEmployeeId) | **POST** /AccountSettingsByPersonId | Read a single accountSettings using the Id of the person of which the account settings belongs to.
[**accountSettingsReadByEmployeeId2**](AccountSettingsApi.md#accountSettingsReadByEmployeeId2) | **POST** /v3/{RealEstateAgencyId}/AccountSettings/ReadByPersonId | Read a single accountSettings using the Id of the person of which the account settings belongs to.
[**accountSettingsSave**](AccountSettingsApi.md#accountSettingsSave) | **POST** /v3/{RealEstateAgencyId}/AccountSettings | Save given accountSettings


# **accountSettingsRead**
> \Swagger\Client\Model\AccountSettingsSingleItemResponse accountSettingsRead($id, $real_estate_agency_id)

Read a single accountSettings.

method allows the user to read the full accountSettings details of a single accountSettings by its Id.  *** **Required permission :**    * [accountsettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->accountSettingsRead($id, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AccountSettingsSingleItemResponse**](../Model/AccountSettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettingsReadByEmployeeId**
> \Swagger\Client\Model\AccountSettingsSingleItemResponse accountSettingsReadByEmployeeId($request)

Read a single accountSettings using the Id of the person of which the account settings belongs to.

method allows the user to read the full accountSettings details of a single accountSettings using the Id of            the person of which the account settings belongs to.  *** **Required permission :**    * [accountsettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AccountSettingsReadByPersonIdRequest(); // \Swagger\Client\Model\AccountSettingsReadByPersonIdRequest | 

try {
    $result = $apiInstance->accountSettingsReadByEmployeeId($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsReadByEmployeeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AccountSettingsReadByPersonIdRequest**](../Model/AccountSettingsReadByPersonIdRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AccountSettingsSingleItemResponse**](../Model/AccountSettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettingsReadByEmployeeId2**
> \Swagger\Client\Model\AccountSettingsSingleItemResponse accountSettingsReadByEmployeeId2($request, $real_estate_agency_id)

Read a single accountSettings using the Id of the person of which the account settings belongs to.

method allows the user to read the full accountSettings details of a single accountSettings using the Id of            the person of which the account settings belongs to.  *** **Required permission :**    * [accountsettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AccountSettingsReadByPersonIdRequest(); // \Swagger\Client\Model\AccountSettingsReadByPersonIdRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->accountSettingsReadByEmployeeId2($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsReadByEmployeeId2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AccountSettingsReadByPersonIdRequest**](../Model/AccountSettingsReadByPersonIdRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AccountSettingsSingleItemResponse**](../Model/AccountSettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSettingsSave**
> \Swagger\Client\Model\AccountSettingsSingleItemResponse accountSettingsSave($request, $real_estate_agency_id)

Save given accountSettings

Let a user save (new/existing) accountSettings.  *** **Required permission :**    * [accountsettings.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AccountSettingsSaveRequest(); // \Swagger\Client\Model\AccountSettingsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->accountSettingsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountSettingsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AccountSettingsSaveRequest**](../Model/AccountSettingsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AccountSettingsSingleItemResponse**](../Model/AccountSettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

