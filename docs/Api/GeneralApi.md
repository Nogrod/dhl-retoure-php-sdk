# Dhl\Rest\Retoure\GeneralApi

All URIs are relative to https://api-sandbox.dhl.com/parcel/de/shipping/returns/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rootGet()**](GeneralApi.md#rootGet) | **GET** / | Return API version |


## `rootGet()`

```php
rootGet(): \Dhl\Rest\Retoure\Model\RootGet200Response
```

Return API version

Returns the current version of the API as major.minor.patch. Supports content negotiation (json and html) and does __not__ require authentication. This can be used as healthcheck or to identify which version of the API is being used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Dhl\Rest\Retoure\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->rootGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->rootGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dhl\Rest\Retoure\Model\RootGet200Response**](../Model/RootGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
