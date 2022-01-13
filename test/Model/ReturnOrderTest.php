<?php
/**
 * ReturnOrderTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Returnlabel Service for Business Customers of DP-DHL Group
 *
 * # Introduction ## Overview    This is the specification of the DP-DHL Group Parcel Return Web Services for business customers. This web service allows business customers to create returnlabels on demand.  ## Pre-conditions    In order to access this service, a registration for the DP-DHL Group Customer Integration Gateway (\"CIG\") is required. Partners can register [here](https://entwickler.dhl.de/web/ep/anmeldung).    Apart from CIG credentials, a partner system has to identify itself and needs be authorized for this particular service. This requires another pair of credentials. Both credentials must be passed as request headers. (See \"Web service authentication\".)    The service can only be reached through HTTPS. HTTP requests are ignored (by CIG).    The web service is a REST interface that can be accessed by a number of libraries and tools for different programming languages and environments.   ## Error handling All error responses (4xx and 5xx) have the `Content-Type` header set to `application/problem+json` or `application/problem+xml`, if the requests `Content-Type` were `application/json` or `application/xml`.   The response content must also contain the HTTP return code as well as the reason for the error. For example  ``` {\"code\":\"INVALID_PRODUCT_SELECTION\",\"detail\":\"Invalid product/service combination.\"} ``` Note that the error code given here is a business-level error code, not the HTTP error code.  The most common HTTP codes to expect from this service are: >400: Bad Request. A client error that can denote a syntax or semantic error. Error details can be found in the return `Error` object. Do not repeat the request without changing it.  >401: Authentication failed. The caller provided the wrong credentials. Do not repeat the request without changing it.  >403: Authorization failed. The caller has provided the correct credentials, but hasn't got sufficient privileges to access a given resource. ## Web Service Authentication The caller needs two sets of credentials: The Gateway (CIG) authenticates users using [Basic HTTP Authentication](https://tools.ietf.org/html/rfc7617), passed as a `Authorization` request header  ``` 'Authorization: Basic <base-64 coded cigUser:cigPassword>' ``` The authentication of the partner system is given by the `DPDHL-User-Authentication-Token` header. The value uses the same syntax as that of the `Authentication`. ``` 'DPDHL-User-Authentication-Token: <base-64 coded partnerId:partnerPassword>' ```
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Dhl\Rest\Retoure\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ReturnOrderTest Class Doc Comment
 *
 * @category    Class
 * @description ReturnOrder
 * @package     Dhl\Rest\Retoure
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReturnOrderTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ReturnOrder"
     */
    public function testReturnOrder()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "receiver_id"
     */
    public function testPropertyReceiverId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "customer_reference"
     */
    public function testPropertyCustomerReference()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "shipment_reference"
     */
    public function testPropertyShipmentReference()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sender_address"
     */
    public function testPropertySenderAddress()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "telephone_number"
     */
    public function testPropertyTelephoneNumber()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "weight_in_grams"
     */
    public function testPropertyWeightInGrams()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "customs_document"
     */
    public function testPropertyCustomsDocument()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "return_document_type"
     */
    public function testPropertyReturnDocumentType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
