<?php
/**
 * Error
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Returnlabel Service for Business Customers of DP-DHL Group
 *
 * # Introduction ## Overview    This is the specification of the DP-DHL Group Parcel Return Web Services for business customers. This web service allows business customers to create returnlabels on demand.  ## Pre-conditions    In order to access this service, a registration for the DP-DHL Group Customer Integration Gateway (\"CIG\") is required. Partners can register [here](https://entwickler.dhl.de/web/ep/anmeldung).    Apart from CIG credentials, a partner system has to identify itself and needs be authorized for this particular service. This requires another pair of credentials. Both credentials must be passed as request headers. (See \"Web service authentication\".)    The service can only be reached through HTTPS. HTTP requests are ignored (by CIG).    The web service is a REST interface that can be accessed by a number of libraries and tools for different programming languages and environments.   ## Error handling All error responses (4xx and 5xx) have the `Content-Type` header set to `application/problem+json` or `application/problem+xml`, if the requests `Content-Type` were `application/json` or `application/xml`.   The response content must also contain the HTTP return code as well as the reason for the error. For example  ``` {\"code\":\"INVALID_PRODUCT_SELECTION\",\"detail\":\"Invalid product/service combination.\"} ``` Note that the error code given here is a business-level error code, not the HTTP error code.  The most common HTTP codes to expect from this service are: >400: Bad Request. A client error that can denote a syntax or semantic error. Error details can be found in the return `Error` object. Do not repeat the request without changing it.  >401: Authentication failed. The caller provided the wrong credentials. Do not repeat the request without changing it.  >403: Authorization failed. The caller has provided the correct credentials, but hasn't got sufficient privileges to access a given resource. ## Web Service Authentication The caller needs two sets of credentials: The Gateway (CIG) authenticates users using [Basic HTTP Authentication](https://tools.ietf.org/html/rfc7617), passed as a `Authorization` request header  ``` 'Authorization: Basic <base-64 coded cigUser:cigPassword>' ``` The authentication of the partner system is given by the `DPDHL-User-Authentication-Token` header. The value uses the same syntax as that of the `Authentication`. ``` 'DPDHL-User-Authentication-Token: <base-64 coded partnerId:partnerPassword>' ``` # Scenarios ## Scenario: Creating a returnlabel The single scenario supported by this service is creating a returnlabel. This is achieved by posting a return order to the URI '/{billingNumber}/returns'. The service will respond with a return label.
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Retoure\Model;

use \ArrayAccess;
use \Dhl\Rest\Retoure\ObjectSerializer;

/**
 * Error Class Doc Comment
 *
 * @category Class
 * @description Error information.
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Error implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'int',
        'detail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'detail' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'detail' => 'detail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'detail' => 'setDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'detail' => 'getDetail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = $data['code'] ?? null;
        $this->container['detail'] = $data['detail'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code The business-level error code.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail Reason the error occurred. This string is provided for user-friendliness and may change in future. (Note':' This is a business cause, not the HTTP error.)
     *
     * @return self
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


