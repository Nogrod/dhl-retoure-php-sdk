<?php

/**
 * LocationsApi
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Returns API
 *
 * # Introduction ## Overview                  Note:   This is the specification of the DP-DHL Group Parcel DE Returns API. This web service allows business customers to create return labels on demand.  # Scenarios ## Main Scenario: Creating a returnlabel This is achieved by posting a return order to the URI '/rest/orders'. The service will respond with a return label. ## Querying to get receiver locations The single scenario supported by this service is the determination of the receiver's location. This is achieved by getting a location to the URI '/rest/locations'. The service will respond with a Receiver. # Technical Note on Authorization This API supports __two alternative ways__ to authorize yourself: 1. Combination of Apikey and Basic Authentication which you can provide with every call. 2. OAuth2 Password Flow: After having obtained your access token once, you provide this token as bearer token.   You can try it out here. More details can be found when clicking on \"Authorize\".
 *
 * The version of the OpenAPI document: 1.0.8
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * LocationsApi Class Doc Comment
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocationsApi
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
        'getLocations' => [
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation getLocations
     *
     * Get available return locations
     *
     * @param  \Dhl\Rest\Retoure\Model\Country|null $country_code The ISO3 code of the location (optional)
     * @param  string|null $postal_code The postal code code of the location (optional)
     * @param  string|null $receiver_id The receiver id of the location (optional)
     * @param  string|null $billing_number billing_number (optional)
     * @param  int|null $max_result The result should be containable. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocations'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dhl\Rest\Retoure\Model\Receiver[]|\Dhl\Rest\Retoure\Model\JSONStatus
     */
    public function getLocations(
        ?\Dhl\Rest\Retoure\Model\Country $country_code = null,
        ?string $postal_code = null,
        ?string $receiver_id = null,
        ?string $billing_number = null,
        ?int $max_result = null,
        string $contentType = self::contentTypes['getLocations'][0]
    ): array|\Dhl\Rest\Retoure\Model\JSONStatus {
        list($response) = $this->getLocationsWithHttpInfo($country_code, $postal_code, $receiver_id, $billing_number, $max_result, $contentType);
        return $response;
    }

    /**
     * Operation getLocationsWithHttpInfo
     *
     * Get available return locations
     *
     * @param  \Dhl\Rest\Retoure\Model\Country|null $country_code The ISO3 code of the location (optional)
     * @param  string|null $postal_code The postal code code of the location (optional)
     * @param  string|null $receiver_id The receiver id of the location (optional)
     * @param  string|null $billing_number (optional)
     * @param  int|null $max_result The result should be containable. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocations'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dhl\Rest\Retoure\Model\Receiver[]|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus|\Dhl\Rest\Retoure\Model\JSONStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLocationsWithHttpInfo(
        ?\Dhl\Rest\Retoure\Model\Country $country_code = null,
        ?string $postal_code = null,
        ?string $receiver_id = null,
        ?string $billing_number = null,
        ?int $max_result = null,
        string $contentType = self::contentTypes['getLocations'][0]
    ): array {
        $request = $this->getLocationsRequest($country_code, $postal_code, $receiver_id, $billing_number, $max_result, $contentType);

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


            switch ($statusCode) {
                case 200:
                    if (in_array('\Dhl\Rest\Retoure\Model\Receiver[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Dhl\Rest\Retoure\Model\Receiver[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Dhl\Rest\Retoure\Model\Receiver[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if (in_array('\Dhl\Rest\Retoure\Model\JSONStatus', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
                    if (in_array('\Dhl\Rest\Retoure\Model\JSONStatus', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
                    if (in_array('\Dhl\Rest\Retoure\Model\JSONStatus', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
                    if (in_array('\Dhl\Rest\Retoure\Model\JSONStatus', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
                    if (in_array('\Dhl\Rest\Retoure\Model\JSONStatus', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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

            $returnType = '\Dhl\Rest\Retoure\Model\Receiver[]';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dhl\Rest\Retoure\Model\Receiver[]',
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
     * Operation getLocationsAsync
     *
     * Get available return locations
     *
     * @param  \Dhl\Rest\Retoure\Model\Country|null $country_code The ISO3 code of the location (optional)
     * @param  string|null $postal_code The postal code code of the location (optional)
     * @param  string|null $receiver_id The receiver id of the location (optional)
     * @param  string|null $billing_number (optional)
     * @param  int|null $max_result The result should be containable. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocations'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getLocationsAsync(
        ?\Dhl\Rest\Retoure\Model\Country $country_code = null,
        ?string $postal_code = null,
        ?string $receiver_id = null,
        ?string $billing_number = null,
        ?int $max_result = null,
        string $contentType = self::contentTypes['getLocations'][0]
    ): PromiseInterface {
        return $this->getLocationsAsyncWithHttpInfo($country_code, $postal_code, $receiver_id, $billing_number, $max_result, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLocationsAsyncWithHttpInfo
     *
     * Get available return locations
     *
     * @param  \Dhl\Rest\Retoure\Model\Country|null $country_code The ISO3 code of the location (optional)
     * @param  string|null $postal_code The postal code code of the location (optional)
     * @param  string|null $receiver_id The receiver id of the location (optional)
     * @param  string|null $billing_number (optional)
     * @param  int|null $max_result The result should be containable. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocations'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getLocationsAsyncWithHttpInfo(
        ?\Dhl\Rest\Retoure\Model\Country $country_code = null,
        ?string $postal_code = null,
        ?string $receiver_id = null,
        ?string $billing_number = null,
        ?int $max_result = null,
        string $contentType = self::contentTypes['getLocations'][0]
    ): PromiseInterface {
        $returnType = '\Dhl\Rest\Retoure\Model\Receiver[]';
        $request = $this->getLocationsRequest($country_code, $postal_code, $receiver_id, $billing_number, $max_result, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'], true)) {
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
     * Create request for operation 'getLocations'
     *
     * @param  \Dhl\Rest\Retoure\Model\Country|null $country_code The ISO3 code of the location (optional)
     * @param  string|null $postal_code The postal code code of the location (optional)
     * @param  string|null $receiver_id The receiver id of the location (optional)
     * @param  string|null $billing_number (optional)
     * @param  int|null $max_result The result should be containable. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocations'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLocationsRequest(
        ?\Dhl\Rest\Retoure\Model\Country $country_code = null,
        ?string $postal_code = null,
        ?string $receiver_id = null,
        ?string $billing_number = null,
        ?int $max_result = null,
        string $contentType = self::contentTypes['getLocations'][0]
    ): Request {


        if ($postal_code !== null && strlen($postal_code) > 10) {
            throw new InvalidArgumentException('invalid length for "$postal_code" when calling LocationsApi.getLocations, must be smaller than or equal to 10.');
        }
        if ($postal_code !== null && strlen($postal_code) < 3) {
            throw new InvalidArgumentException('invalid length for "$postal_code" when calling LocationsApi.getLocations, must be bigger than or equal to 3.');
        }
        if ($postal_code !== null && !preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", $postal_code)) {
            throw new InvalidArgumentException("invalid value for \"postal_code\" when calling LocationsApi.getLocations, must conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.");
        }

        if ($receiver_id !== null && strlen($receiver_id) > 50) {
            throw new InvalidArgumentException('invalid length for "$receiver_id" when calling LocationsApi.getLocations, must be smaller than or equal to 50.');
        }

        if ($billing_number !== null && !preg_match("/\\d{10}\\d{2}\\w{2}/", $billing_number)) {
            throw new InvalidArgumentException("invalid value for \"billing_number\" when calling LocationsApi.getLocations, must conform to the pattern /\\d{10}\\d{2}\\w{2}/.");
        }



        $resourcePath = '/locations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $country_code?->value,
            'countryCode', // param base name
            'Country', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $postal_code,
            'postalCode', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $receiver_id,
            'receiverId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $billing_number,
            'billingNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $max_result,
            'maxResult', // param base name
            'integer', // openApiType
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
        if (count($formParams) > 0) {
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

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
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
