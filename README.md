# OpenAPIClient-php



# Introduction
## Overview

  This is the specification of the DP-DHL Group Parcel Return Web Services for business customers. This web service allows business customers to create returnlabels on demand.

## Pre-conditions

  In order to access this service, a registration for the DP-DHL Group Customer Integration Gateway (\"CIG\") is required. Partners can register [here](https://entwickler.dhl.de/web/ep/anmeldung).

  Apart from CIG credentials, a partner system has to identify itself and needs be authorized for this particular service. This requires another pair of credentials. Both credentials must be passed as request headers. (See \"Web service authentication\".)

  The service can only be reached through HTTPS. HTTP requests are ignored (by CIG).

  The web service is a REST interface that can be accessed by a number of libraries and tools for different programming languages and environments.


## Error handling
All error responses (4xx and 5xx) have the `Content-Type` header set to `application/problem+json` or `application/problem+xml`, if the requests `Content-Type` were `application/json` or `application/xml`. 

The response content must also contain the HTTP return code as well as the reason for the error. For example

```
{\"code\":\"INVALID_PRODUCT_SELECTION\",\"detail\":\"Invalid product/service combination.\"}
```
Note that the error code given here is a business-level error code, not the HTTP error code.

The most common HTTP codes to expect from this service are:
>400: Bad Request. A client error that can denote a syntax or semantic error. Error details can be found in the return `Error` object. Do not repeat the request without changing it.

>401: Authentication failed. The caller provided the wrong credentials. Do not repeat the request without changing it.

>403: Authorization failed. The caller has provided the correct credentials, but hasn't got sufficient privileges to access a given resource.
## Web Service Authentication
The caller needs two sets of credentials:
The Gateway (CIG) authenticates users using [Basic HTTP Authentication](https://tools.ietf.org/html/rfc7617), passed as a `Authorization` request header

```
'Authorization: Basic <base-64 coded cigUser:cigPassword>'
```
The authentication of the partner system is given by the `DPDHL-User-Authentication-Token` header. The value uses the same syntax as that of the `Authentication`.
```
'DPDHL-User-Authentication-Token: <base-64 coded partnerId:partnerPassword>'
```



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nogrod/dhl-retoure-php-sdk.git"
    }
  ],
  "require": {
    "nogrod/dhl-retoure-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */services/sandbox/rest/returns*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ReturnsApi* | [**rootPost**](docs/Api/ReturnsApi.md#rootpost) | **POST** / | Request for returnlabels.

## Models

- [Country](docs/Model/Country.md)
- [CustomsDocument](docs/Model/CustomsDocument.md)
- [CustomsDocumentPosition](docs/Model/CustomsDocumentPosition.md)
- [Error](docs/Model/Error.md)
- [ReturnOrder](docs/Model/ReturnOrder.md)
- [ReturnOrderConfirmation](docs/Model/ReturnOrderConfirmation.md)
- [SimpleAddress](docs/Model/SimpleAddress.md)

## Authorization

Authentication schemes defined for the API:
### appAuth

- **Type**: HTTP basic authentication

### userAuth

- **Type**: API key
- **API key parameter name**: DPDHL-User-Authentication-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
