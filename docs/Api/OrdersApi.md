# Dhl\Rest\Retoure\OrdersApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/shipping/returns/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReturnOrder()**](OrdersApi.md#createReturnOrder) | **POST** /orders | Create a return label. |


## `createReturnOrder()`

```php
createReturnOrder($label_type, $doc_format, $print_format, $print_resolution, $qr_validity_period, $return_order): \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation
```

Create a return label.

Creates a return label by given information.

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


$apiInstance = new Dhl\Rest\Retoure\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_type = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\LabelType(); // \Dhl\Rest\Retoure\Model\LabelType | Controls which documents are returned.
$doc_format = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\DocFormat(); // \Dhl\Rest\Retoure\Model\DocFormat | **Defines** the **printable** document format to be used for label documents.
$print_format = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\PrintFormat(); // \Dhl\Rest\Retoure\Model\PrintFormat | **Defines** the print medium for the shipping label. The different option vary from standard paper sizes DIN A4 and DIN A6 to specific label print formats. 910-300-* are the label print formats for Zebra printers (DocFormat ZPL2) and can also be used for DocFormat PDF. **Country restrictions:** `910-300-600` and `910-300-610` are only available for German domestic returns; `910-300-400` and `910-300-410` are available for German and French returns. Requesting an unsupported combination of receiver country and printFormat is rejected.
$print_resolution = new \Dhl\Rest\Retoure\Model\\Dhl\Rest\Retoure\Model\PrintResolution(); // \Dhl\Rest\Retoure\Model\PrintResolution | **Defines** the resolution of the shipping label. Use this parameter only if you set docFormat to ZPL2.
$qr_validity_period = 30; // int | **Defines** the validity period of the QR code.
$return_order = new \Dhl\Rest\Retoure\Model\ReturnOrder(); // \Dhl\Rest\Retoure\Model\ReturnOrder | The request body contains the details of the return label that should be created. E.g. sender, references and shipment details.

try {
    $result = $apiInstance->createReturnOrder($label_type, $doc_format, $print_format, $print_resolution, $qr_validity_period, $return_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createReturnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_type** | [**\Dhl\Rest\Retoure\Model\LabelType**](../Model/.md)| Controls which documents are returned. | [optional] |
| **doc_format** | [**\Dhl\Rest\Retoure\Model\DocFormat**](../Model/.md)| **Defines** the **printable** document format to be used for label documents. | [optional] |
| **print_format** | [**\Dhl\Rest\Retoure\Model\PrintFormat**](../Model/.md)| **Defines** the print medium for the shipping label. The different option vary from standard paper sizes DIN A4 and DIN A6 to specific label print formats. 910-300-* are the label print formats for Zebra printers (DocFormat ZPL2) and can also be used for DocFormat PDF. **Country restrictions:** &#x60;910-300-600&#x60; and &#x60;910-300-610&#x60; are only available for German domestic returns; &#x60;910-300-400&#x60; and &#x60;910-300-410&#x60; are available for German and French returns. Requesting an unsupported combination of receiver country and printFormat is rejected. | [optional] |
| **print_resolution** | [**\Dhl\Rest\Retoure\Model\PrintResolution**](../Model/.md)| **Defines** the resolution of the shipping label. Use this parameter only if you set docFormat to ZPL2. | [optional] |
| **qr_validity_period** | **int**| **Defines** the validity period of the QR code. | [optional] [default to 30] |
| **return_order** | [**\Dhl\Rest\Retoure\Model\ReturnOrder**](../Model/ReturnOrder.md)| The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. | [optional] |

### Return type

[**\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation**](../Model/ReturnOrderConfirmation.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
