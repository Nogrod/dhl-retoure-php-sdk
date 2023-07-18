<?php
/**
 * ReturnsApi
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Retoure\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Dhl\Rest\Retoure\ApiException;
use Dhl\Rest\Retoure\Configuration;
use Dhl\Rest\Retoure\HeaderSelector;
use Dhl\Rest\Retoure\ObjectSerializer;

/**
 * ReturnsApi Class Doc Comment
 *
 * @category Class
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'rootPost' => [
            'application/json',
            'application/xml',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation rootPost
     *
     * Request for returnlabels.
     *
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder $return_order The object contains the details of the sender, the returnshipment and references. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rootPost'] to see the possible values for this operation
     *
     * @throws \Dhl\Rest\Retoure\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation|\Dhl\Rest\Retoure\Model\Error
     */
    public function rootPost($return_order = null, string $contentType = self::contentTypes['rootPost'][0])
    {
        list($response) = $this->rootPostWithHttpInfo($return_order, $contentType);
        return $response;
    }

    /**
     * Operation rootPostWithHttpInfo
     *
     * Request for returnlabels.
     *
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder $return_order The object contains the details of the sender, the returnshipment and references. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rootPost'] to see the possible values for this operation
     *
     * @throws \Dhl\Rest\Retoure\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation|\Dhl\Rest\Retoure\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function rootPostWithHttpInfo($return_order = null, string $contentType = self::contentTypes['rootPost'][0])
    {
        $request = $this->rootPostRequest($return_order, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Dhl\Rest\Retoure\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rootPostAsync
     *
     * Request for returnlabels.
     *
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder $return_order The object contains the details of the sender, the returnshipment and references. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rootPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rootPostAsync($return_order = null, string $contentType = self::contentTypes['rootPost'][0])
    {
        return $this->rootPostAsyncWithHttpInfo($return_order, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rootPostAsyncWithHttpInfo
     *
     * Request for returnlabels.
     *
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder $return_order The object contains the details of the sender, the returnshipment and references. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rootPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rootPostAsyncWithHttpInfo($return_order = null, string $contentType = self::contentTypes['rootPost'][0])
    {
        $returnType = '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation';
        $request = $this->rootPostRequest($return_order, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rootPost'
     *
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder $return_order The object contains the details of the sender, the returnshipment and references. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rootPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rootPostRequest($return_order = null, string $contentType = self::contentTypes['rootPost'][0])
    {



        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/xml', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($return_order)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($return_order));
            } else {
                $httpBody = $return_order;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('DPDHL-User-Authentication-Token');
        if ($apiKey !== null) {
            $headers['DPDHL-User-Authentication-Token'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
