# Dhl\Rest\Retoure\LocationsApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/shipping/returns/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLocations()**](LocationsApi.md#getLocations) | **GET** /locations | Get available return locations |


## `getLocations()`

```php
getLocations($country_code, $postal_code, $receiver_id, $billing_number, $max_result): \Dhl\Rest\Retoure\Model\Receiver[]
```

Get available return locations

The response should be a list of Receiver, each containing the following information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKey
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKey('dhl-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKeyPrefix('dhl-api-key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Dhl\Rest\Retoure\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\Country(); // \Dhl\Rest\Retoure\Model\Country | The ISO3 code of the location
$postal_code = 'postal_code_example'; // string | The postal code code of the location
$receiver_id = 'receiver_id_example'; // string | The receiver id of the location
$billing_number = 'billing_number_example'; // string
$max_result = 56; // int | The result should be containable.

try {
    $result = $apiInstance->getLocations($country_code, $postal_code, $receiver_id, $billing_number, $max_result);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | [**\Dhl\Rest\Retoure\Model\Country**](../Model/.md)| The ISO3 code of the location | [optional] |
| **postal_code** | **string**| The postal code code of the location | [optional] |
| **receiver_id** | **string**| The receiver id of the location | [optional] |
| **billing_number** | **string**|  | [optional] |
| **max_result** | **int**| The result should be containable. | [optional] |

### Return type

[**\Dhl\Rest\Retoure\Model\Receiver[]**](../Model/Receiver.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
