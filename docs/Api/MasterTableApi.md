# Swagger\Client\MasterTableApi

All URIs are relative to *https://sandbox-api.kolibri24.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**masterTableIndex**](MasterTableApi.md#masterTableIndex) | **GET** /v3/{RealEstateAgencyId}/MasterTable | Read the mastertable.


# **masterTableIndex**
> \Swagger\Client\Model\TableResponse masterTableIndex($real_estate_agency_id, $culture)

Read the mastertable.

method allows the user to read the mastertable.  *** **Required permission :**    * [mastertable.read]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: implicit
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MasterTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_estate_agency_id = "real_estate_agency_id_example"; // string | 
$culture = "culture_example"; // string | The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").

try {
    $result = $apiInstance->masterTableIndex($real_estate_agency_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasterTableApi->masterTableIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_estate_agency_id** | **string**|  |
 **culture** | **string**| The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional]

### Return type

[**\Swagger\Client\Model\TableResponse**](../Model/TableResponse.md)

### Authorization

[application](../../README.md#application), [implicit](../../README.md#implicit)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

