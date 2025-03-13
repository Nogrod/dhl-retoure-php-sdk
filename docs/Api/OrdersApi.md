# Dhl\Rest\Retoure\OrdersApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/shipping/returns/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReturnOrder()**](OrdersApi.md#createReturnOrder) | **POST** /orders | Create a return label. |


## `createReturnOrder()`

```php
createReturnOrder($label_type, $return_order): \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation
```

Create a return label.

Creates a return label by given information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKey('dhl-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()->setApiKeyPrefix('dhl-api-key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Dhl\Rest\Retoure\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Dhl\Rest\Retoure\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_type = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\LabelType(); // \Dhl\Rest\Retoure\Model\LabelType | Controls which documents are returned.
$return_order = new \Dhl\Rest\Retoure\Model\ReturnOrder(); // \Dhl\Rest\Retoure\Model\ReturnOrder | The request body contains the details of the return label that should be created. E.g. sender, references and shipment details.

try {
    $result = $apiInstance->createReturnOrder($label_type, $return_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createReturnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_type** | [**\Dhl\Rest\Retoure\Model\LabelType**](../Model/.md)| Controls which documents are returned. | [optional] |
| **return_order** | [**\Dhl\Rest\Retoure\Model\ReturnOrder**](../Model/ReturnOrder.md)| The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. | [optional] |

### Return type

[**\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation**](../Model/ReturnOrderConfirmation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
