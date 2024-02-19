<?php
/**
 * OrdersApi
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Returns API
 *
 * # Introduction ## Overview                  Note:   This is the specification of the DP-DHL Group Parcel DE Returns API. This web service allows business customers to create return labels on demand.  # Scenarios ## Main Scenario: Creating a returnlabel This is achieved by posting a return order to the URI '/rest/orders'. The service will respond with a return label. ## Querying to get receiver locations The single scenario supported by this service is the determination of the receiver's location. This is achieved by getting a location to the URI '/rest/locations'. The service will respond with a Receiver.
 *
 * The version of the OpenAPI document: 1.0.4
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Retoure\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Dhl\Rest\Retoure\ApiException;
use Dhl\Rest\Retoure\Configuration;
use Dhl\Rest\Retoure\HeaderSelector;
use Dhl\Rest\Retoure\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'createReturnOrder' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
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
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation createReturnOrder
     *
     * Create a return label.
     *
     * @param  \Dhl\Rest\Retoure\Model\LabelType|null $label_type Controls which documents are returned. (optional)
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder|null $return_order The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createReturnOrder'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus
     */
    public function createReturnOrder(
        ?\Dhl\Rest\Retoure\Model\LabelType $label_type = null,
        ?\Dhl\Rest\Retoure\Model\ReturnOrder $return_order = null,
        string $contentType = self::contentTypes['createReturnOrder'][0]
    ): \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation
    {
        list($response) = $this->createReturnOrderWithHttpInfo($label_type, $return_order, $contentType);
        return $response;
    }

    /**
     * Operation createReturnOrderWithHttpInfo
     *
     * Create a return label.
     *
     * @param  \Dhl\Rest\Retoure\Model\LabelType|null $label_type Controls which documents are returned. (optional)
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder|null $return_order The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createReturnOrder'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dhl\Rest\Retoure\Model\ReturnOrderConfirmation|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReturnOrderWithHttpInfo(
        ?\Dhl\Rest\Retoure\Model\LabelType $label_type = null,
        ?\Dhl\Rest\Retoure\Model\ReturnOrder $return_order = null,
        string $contentType = self::contentTypes['createReturnOrder'][0]
    ): array
    {
        $request = $this->createReturnOrderRequest($label_type, $return_order, $contentType);

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
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Dhl\Rest\Retoure\Model\JSONStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\JSONStatus' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\JSONStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Dhl\Rest\Retoure\Model\JSONStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\JSONStatus' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\JSONStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Dhl\Rest\Retoure\Model\JSONStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\JSONStatus' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\JSONStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Dhl\Rest\Retoure\Model\JSONStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\JSONStatus' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\JSONStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Dhl\Rest\Retoure\Model\JSONStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\JSONStatus' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\JSONStatus', []),
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
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\Dhl\Rest\Retoure\Model\JSONStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\JSONStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\JSONStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\JSONStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\JSONStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createReturnOrderAsync
     *
     * Create a return label.
     *
     * @param  \Dhl\Rest\Retoure\Model\LabelType|null $label_type Controls which documents are returned. (optional)
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder|null $return_order The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createReturnOrder'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createReturnOrderAsync(
        ?\Dhl\Rest\Retoure\Model\LabelType $label_type = null,
        ?\Dhl\Rest\Retoure\Model\ReturnOrder $return_order = null,
        string $contentType = self::contentTypes['createReturnOrder'][0]
    ): PromiseInterface
    {
        return $this->createReturnOrderAsyncWithHttpInfo($label_type, $return_order, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReturnOrderAsyncWithHttpInfo
     *
     * Create a return label.
     *
     * @param  \Dhl\Rest\Retoure\Model\LabelType|null $label_type Controls which documents are returned. (optional)
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder|null $return_order The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createReturnOrder'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createReturnOrderAsyncWithHttpInfo(
        $label_type = null,
        $return_order = null,
        string $contentType = self::contentTypes['createReturnOrder'][0]
    ): PromiseInterface
    {
        $returnType = '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmation';
        $request = $this->createReturnOrderRequest($label_type, $return_order, $contentType);

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
     * Create request for operation 'createReturnOrder'
     *
     * @param  \Dhl\Rest\Retoure\Model\LabelType|null $label_type Controls which documents are returned. (optional)
     * @param  \Dhl\Rest\Retoure\Model\ReturnOrder|null $return_order The request body contains the details of the return label that should be created. E.g. sender, references and shipment details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createReturnOrder'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createReturnOrderRequest(
        $label_type = null,
        $return_order = null,
        string $contentType = self::contentTypes['createReturnOrder'][0]
    ): Request
    {




        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $label_type,
            'labelType', // param base name
            '\Dhl\Rest\Retoure\Model\LabelType', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
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
        $apiKey = $this->config->getApiKeyWithPrefix('dhl-api-key');
        if ($apiKey !== null) {
            $headers['dhl-api-key'] = $apiKey;
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
    protected function createHttpClientOption(): array
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
