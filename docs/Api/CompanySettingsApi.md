# Swagger\Client\CompanySettingsApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companySettingsCreateExchangeSingleSignOnUrl**](CompanySettingsApi.md#companySettingsCreateExchangeSingleSignOnUrl) | **POST** /v3/{RealEstateAgencyId}/CompanySettings/CreateExchangeSingleSignOnUrl | Creates and returnes the Single Sign On Url for the Venum Exchange.
[**companySettingsCreateHousenetSingleSignOnUrl**](CompanySettingsApi.md#companySettingsCreateHousenetSingleSignOnUrl) | **POST** /v3/{RealEstateAgencyId}/CompanySettings/CreateHousenetSingleSignOnUrl | Creates and returnes the Single Sign On Url for the Housenet CMS.
[**companySettingsDeactivateCollegialListings**](CompanySettingsApi.md#companySettingsDeactivateCollegialListings) | **POST** /v3/{RealEstateAgencyId}/CompanySettings/DeactivateCollegialListings | Deactivate use of collegial listings
[**companySettingsRead**](CompanySettingsApi.md#companySettingsRead) | **GET** /v3/{RealEstateAgencyId}/CompanySettings | Read company settings.
[**companySettingsRequestCollegialListingAuthorization**](CompanySettingsApi.md#companySettingsRequestCollegialListingAuthorization) | **GET** /v3/{RealEstateAgencyId}/CompanySettings/RequestCollegialListingAuthorization | Request authorization for Collegial Listings in matchmail.
[**companySettingsSave**](CompanySettingsApi.md#companySettingsSave) | **POST** /v3/{RealEstateAgencyId}/CompanySettings | Save company settings


# **companySettingsCreateExchangeSingleSignOnUrl**
> string companySettingsCreateExchangeSingleSignOnUrl($real_estate_agency_id)

Creates and returnes the Single Sign On Url for the Venum Exchange.

**Required permission :**    * [companysettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->companySettingsCreateExchangeSingleSignOnUrl($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsCreateExchangeSingleSignOnUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

**string**

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsCreateHousenetSingleSignOnUrl**
> string companySettingsCreateHousenetSingleSignOnUrl($real_estate_agency_id)

Creates and returnes the Single Sign On Url for the Housenet CMS.

**Required permission :**    * [companysettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->companySettingsCreateHousenetSingleSignOnUrl($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsCreateHousenetSingleSignOnUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

**string**

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsDeactivateCollegialListings**
> companySettingsDeactivateCollegialListings($real_estate_agency_id)

Deactivate use of collegial listings

With this method, it is possible to deactivate collegial listings. When creating matchmail, collegial listings will no longer be used to fill content.               *** **Required permission :**    * [companysettings.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $apiInstance->companySettingsDeactivateCollegialListings($real_estate_agency_id);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsDeactivateCollegialListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsRead**
> \Swagger\Client\Model\CompanySettingsSingleItemResponse companySettingsRead($real_estate_agency_id)

Read company settings.

method allows the user to read the company settings by the company id.  *** **Required permission :**    * [companysettings.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->companySettingsRead($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsSingleItemResponse**](../Model/CompanySettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsRequestCollegialListingAuthorization**
> string companySettingsRequestCollegialListingAuthorization($real_estate_agency_id)

Request authorization for Collegial Listings in matchmail.

This method can be used by NVM companies, to request authorization for Kolibri to use Collegial Listings in matchmail. Calling this method will return a URL, that should be opened client-side. When the action on this URL is finished, the callback will ensure Kolibri gets the data that is needed to access Collegial Listings in matchmail.               *** **Required permission :**    * [companysettings.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->companySettingsRequestCollegialListingAuthorization($real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsRequestCollegialListingAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |

### Return type

**string**

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySettingsSave**
> \Swagger\Client\Model\CompanySettingsSingleItemResponse companySettingsSave($request, $real_estate_agency_id)

Save company settings

This method allows the user to save the company settings for a company  *** **Required permission :**    * [companysettings.write]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CompanySettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CompanySettingsSaveRequest(); // \Swagger\Client\Model\CompanySettingsSaveRequest | 
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 

try {
    $result = $apiInstance->companySettingsSave($request, $real_estate_agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanySettingsApi->companySettingsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CompanySettingsSaveRequest**](../Model/CompanySettingsSaveRequest.md)|  |
 **real_estate_agency_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CompanySettingsSingleItemResponse**](../Model/CompanySettingsSingleItemResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

