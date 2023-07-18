# Dhl\Rest\Retoure\ReturnsApi

All URIs are relative to /services/sandbox/rest/returns, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rootPost()**](ReturnsApi.md#rootPost) | **POST** / | Request for returnlabels. |


## `rootPost()`

```php
rootPost($return_order): \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation
```

Request for returnlabels.

Contains all details needed to create a returnlabel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: userAuth
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKey('DPDHL-User-Authentication-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DPDHL-User-Authentication-Token', 'Bearer');

// Configure HTTP basic authorization: appAuth
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Dhl\Rest\Retoure\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order = new \Dhl\Rest\Retoure\Model\ReturnOrder(); // \Dhl\Rest\Retoure\Model\ReturnOrder | The object contains the details of the sender, the returnshipment and references.

try {
    $result = $apiInstance->rootPost($return_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->rootPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_order** | [**\Dhl\Rest\Retoure\Model\ReturnOrder**](../Model/ReturnOrder.md)| The object contains the details of the sender, the returnshipment and references. | [optional] |

### Return type

[**\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation**](../Model/ReturnOrderConfirmation.md)

### Authorization

[userAuth](../../README.md#userAuth), [appAuth](../../README.md#appAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
