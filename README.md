# OpenAPIClient-php

# Introduction
## Overview               
  Note:
  This is the specification of the DP-DHL Group Parcel DE Returns API. This web service allows business customers to create return labels on demand.

# Scenarios
## Main Scenario: Creating a returnlabel
This is achieved by posting a return order to the URI '/rest/orders'. The service will respond with a return label.
## Querying to get receiver locations
The single scenario supported by this service is the determination of the receiver's location. This is achieved by getting a location to the URI '/rest/locations'. The service will respond with a Receiver.



## Installation & Usage

### Requirements

PHP 8.1 and later.

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
$country_code = new \Dhl\Rest\Retoure\Model\Country(); // Country | The ISO3 code of the location
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

## API Endpoints

All URIs are relative to *https://api-sandbox.dhl.com/parcel/de/shipping/returns/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Get available return locations
*OrdersApi* | [**createReturnOrder**](docs/Api/OrdersApi.md#createreturnorder) | **POST** /orders | Create a return label.

## Models

- [Commodity](docs/Model/Commodity.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [Country](docs/Model/Country.md)
- [CountryOfOrigin](docs/Model/CountryOfOrigin.md)
- [CustomsDetails](docs/Model/CustomsDetails.md)
- [Document](docs/Model/Document.md)
- [JSONStatus](docs/Model/JSONStatus.md)
- [LabelType](docs/Model/LabelType.md)
- [Receiver](docs/Model/Receiver.md)
- [ReturnOrder](docs/Model/ReturnOrder.md)
- [ReturnOrderConfirmation](docs/Model/ReturnOrderConfirmation.md)
- [ReturnOrderConfirmationSstatus](docs/Model/ReturnOrderConfirmationSstatus.md)
- [Value](docs/Model/Value.md)
- [Weight](docs/Model/Weight.md)

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication


### ApiKey

- **Type**: API key
- **API key parameter name**: dhl-api-key
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

- API version: `1.0.4`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
