<?php
/**
 * ReturnOrder
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
 * ReturnOrder Class Doc Comment
 *
 * @category Class
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReturnOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'receiver_id' => 'string',
        'customer_reference' => 'string',
        'shipment_reference' => 'string',
        'sender_address' => '\Dhl\Rest\Retoure\Model\SimpleAddress',
        'email' => 'string',
        'telephone_number' => 'string',
        'weight_in_grams' => 'int',
        'value' => 'float',
        'customs_document' => '\Dhl\Rest\Retoure\Model\CustomsDocument',
        'return_document_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'receiver_id' => null,
        'customer_reference' => null,
        'shipment_reference' => null,
        'sender_address' => null,
        'email' => 'email',
        'telephone_number' => 'string',
        'weight_in_grams' => null,
        'value' => null,
        'customs_document' => null,
        'return_document_type' => null
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
        'receiver_id' => 'receiverId',
        'customer_reference' => 'customerReference',
        'shipment_reference' => 'shipmentReference',
        'sender_address' => 'senderAddress',
        'email' => 'email',
        'telephone_number' => 'telephoneNumber',
        'weight_in_grams' => 'weightInGrams',
        'value' => 'value',
        'customs_document' => 'customsDocument',
        'return_document_type' => 'returnDocumentType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receiver_id' => 'setReceiverId',
        'customer_reference' => 'setCustomerReference',
        'shipment_reference' => 'setShipmentReference',
        'sender_address' => 'setSenderAddress',
        'email' => 'setEmail',
        'telephone_number' => 'setTelephoneNumber',
        'weight_in_grams' => 'setWeightInGrams',
        'value' => 'setValue',
        'customs_document' => 'setCustomsDocument',
        'return_document_type' => 'setReturnDocumentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receiver_id' => 'getReceiverId',
        'customer_reference' => 'getCustomerReference',
        'shipment_reference' => 'getShipmentReference',
        'sender_address' => 'getSenderAddress',
        'email' => 'getEmail',
        'telephone_number' => 'getTelephoneNumber',
        'weight_in_grams' => 'getWeightInGrams',
        'value' => 'getValue',
        'customs_document' => 'getCustomsDocument',
        'return_document_type' => 'getReturnDocumentType'
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

    const RETURN_DOCUMENT_TYPE_SHIPMENT_LABEL = 'SHIPMENT_LABEL';
    const RETURN_DOCUMENT_TYPE_QR_LABEL = 'QR_LABEL';
    const RETURN_DOCUMENT_TYPE_BOTH = 'BOTH';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReturnDocumentTypeAllowableValues()
    {
        return [
            self::RETURN_DOCUMENT_TYPE_SHIPMENT_LABEL,
            self::RETURN_DOCUMENT_TYPE_QR_LABEL,
            self::RETURN_DOCUMENT_TYPE_BOTH,
        ];
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
        $this->container['receiver_id'] = $data['receiver_id'] ?? null;
        $this->container['customer_reference'] = $data['customer_reference'] ?? null;
        $this->container['shipment_reference'] = $data['shipment_reference'] ?? null;
        $this->container['sender_address'] = $data['sender_address'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['telephone_number'] = $data['telephone_number'] ?? null;
        $this->container['weight_in_grams'] = $data['weight_in_grams'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['customs_document'] = $data['customs_document'] ?? null;
        $this->container['return_document_type'] = $data['return_document_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['receiver_id'] === null) {
            $invalidProperties[] = "'receiver_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'receiver_id', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['receiver_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'receiver_id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['customer_reference']) && (mb_strlen($this->container['customer_reference']) > 30)) {
            $invalidProperties[] = "invalid value for 'customer_reference', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['customer_reference']) && (mb_strlen($this->container['customer_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'customer_reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipment_reference']) && (mb_strlen($this->container['shipment_reference']) > 30)) {
            $invalidProperties[] = "invalid value for 'shipment_reference', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['shipment_reference']) && (mb_strlen($this->container['shipment_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipment_reference', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['sender_address'] === null) {
            $invalidProperties[] = "'sender_address' can't be null";
        }
        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 70)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['telephone_number']) && (mb_strlen($this->container['telephone_number']) > 35)) {
            $invalidProperties[] = "invalid value for 'telephone_number', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['telephone_number']) && (mb_strlen($this->container['telephone_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'telephone_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['weight_in_grams']) && ($this->container['weight_in_grams'] < 0)) {
            $invalidProperties[] = "invalid value for 'weight_in_grams', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] < 0)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getReturnDocumentTypeAllowableValues();
        if (!is_null($this->container['return_document_type']) && !in_array($this->container['return_document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'return_document_type', must be one of '%s'",
                $this->container['return_document_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets receiver_id
     *
     * @return string
     */
    public function getReceiverId()
    {
        return $this->container['receiver_id'];
    }

    /**
     * Sets receiver_id
     *
     * @param string $receiver_id receiver_id
     *
     * @return self
     */
    public function setReceiverId($receiver_id)
    {
        if ((mb_strlen($receiver_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $receiver_id when calling ReturnOrder., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($receiver_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $receiver_id when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['receiver_id'] = $receiver_id;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string|null $customer_reference customer_reference
     *
     * @return self
     */
    public function setCustomerReference($customer_reference)
    {
        if (!is_null($customer_reference) && (mb_strlen($customer_reference) > 30)) {
            throw new \InvalidArgumentException('invalid length for $customer_reference when calling ReturnOrder., must be smaller than or equal to 30.');
        }
        if (!is_null($customer_reference) && (mb_strlen($customer_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customer_reference when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets shipment_reference
     *
     * @return string|null
     */
    public function getShipmentReference()
    {
        return $this->container['shipment_reference'];
    }

    /**
     * Sets shipment_reference
     *
     * @param string|null $shipment_reference shipment_reference
     *
     * @return self
     */
    public function setShipmentReference($shipment_reference)
    {
        if (!is_null($shipment_reference) && (mb_strlen($shipment_reference) > 30)) {
            throw new \InvalidArgumentException('invalid length for $shipment_reference when calling ReturnOrder., must be smaller than or equal to 30.');
        }
        if (!is_null($shipment_reference) && (mb_strlen($shipment_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipment_reference when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['shipment_reference'] = $shipment_reference;

        return $this;
    }

    /**
     * Gets sender_address
     *
     * @return \Dhl\Rest\Retoure\Model\SimpleAddress
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param \Dhl\Rest\Retoure\Model\SimpleAddress $sender_address sender_address
     *
     * @return self
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 70)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ReturnOrder., must be smaller than or equal to 70.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets telephone_number
     *
     * @return string|null
     */
    public function getTelephoneNumber()
    {
        return $this->container['telephone_number'];
    }

    /**
     * Sets telephone_number
     *
     * @param string|null $telephone_number telephone_number
     *
     * @return self
     */
    public function setTelephoneNumber($telephone_number)
    {
        if (!is_null($telephone_number) && (mb_strlen($telephone_number) > 35)) {
            throw new \InvalidArgumentException('invalid length for $telephone_number when calling ReturnOrder., must be smaller than or equal to 35.');
        }
        if (!is_null($telephone_number) && (mb_strlen($telephone_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $telephone_number when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['telephone_number'] = $telephone_number;

        return $this;
    }

    /**
     * Gets weight_in_grams
     *
     * @return int|null
     */
    public function getWeightInGrams()
    {
        return $this->container['weight_in_grams'];
    }

    /**
     * Sets weight_in_grams
     *
     * @param int|null $weight_in_grams weight_in_grams
     *
     * @return self
     */
    public function setWeightInGrams($weight_in_grams)
    {

        if (!is_null($weight_in_grams) && ($weight_in_grams < 0)) {
            throw new \InvalidArgumentException('invalid value for $weight_in_grams when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['weight_in_grams'] = $weight_in_grams;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {

        if (!is_null($value) && ($value < 0)) {
            throw new \InvalidArgumentException('invalid value for $value when calling ReturnOrder., must be bigger than or equal to 0.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets customs_document
     *
     * @return \Dhl\Rest\Retoure\Model\CustomsDocument|null
     */
    public function getCustomsDocument()
    {
        return $this->container['customs_document'];
    }

    /**
     * Sets customs_document
     *
     * @param \Dhl\Rest\Retoure\Model\CustomsDocument|null $customs_document customs_document
     *
     * @return self
     */
    public function setCustomsDocument($customs_document)
    {
        $this->container['customs_document'] = $customs_document;

        return $this;
    }

    /**
     * Gets return_document_type
     *
     * @return string|null
     */
    public function getReturnDocumentType()
    {
        return $this->container['return_document_type'];
    }

    /**
     * Sets return_document_type
     *
     * @param string|null $return_document_type The type of document(s) to return in the response':' The SHIPMENT_LABEL only, the QR_LABEL or BOTH.
     *
     * @return self
     */
    public function setReturnDocumentType($return_document_type)
    {
        $allowedValues = $this->getReturnDocumentTypeAllowableValues();
        if (!is_null($return_document_type) && !in_array($return_document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'return_document_type', must be one of '%s'",
                    $return_document_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['return_document_type'] = $return_document_type;

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

