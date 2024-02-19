<?php
/**
 * ReturnOrderConfirmation
 *
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

namespace Dhl\Rest\Retoure\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Dhl\Rest\Retoure\ObjectSerializer;

/**
 * ReturnOrderConfirmation Class Doc Comment
 *
 * @description Confirmation number.
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ReturnOrderConfirmation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnOrderConfirmation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'sstatus' => '\Dhl\Rest\Retoure\Model\ReturnOrderConfirmationSstatus',
        'shipment_no' => 'string',
        'international_shipment_no' => 'string',
        'label' => '\Dhl\Rest\Retoure\Model\Document',
        'qr_label' => '\Dhl\Rest\Retoure\Model\Document',
        'routing_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sstatus' => null,
        'shipment_no' => null,
        'international_shipment_no' => null,
        'label' => null,
        'qr_label' => null,
        'routing_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'sstatus' => false,
        'shipment_no' => false,
        'international_shipment_no' => false,
        'label' => false,
        'qr_label' => false,
        'routing_code' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'sstatus' => 'sstatus',
        'shipment_no' => 'shipmentNo',
        'international_shipment_no' => 'internationalShipmentNo',
        'label' => 'label',
        'qr_label' => 'qrLabel',
        'routing_code' => 'routingCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'sstatus' => 'setSstatus',
        'shipment_no' => 'setShipmentNo',
        'international_shipment_no' => 'setInternationalShipmentNo',
        'label' => 'setLabel',
        'qr_label' => 'setQrLabel',
        'routing_code' => 'setRoutingCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'sstatus' => 'getSstatus',
        'shipment_no' => 'getShipmentNo',
        'international_shipment_no' => 'getInternationalShipmentNo',
        'label' => 'getLabel',
        'qr_label' => 'getQrLabel',
        'routing_code' => 'getRoutingCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sstatus', $data ?? [], null);
        $this->setIfExists('shipment_no', $data ?? [], null);
        $this->setIfExists('international_shipment_no', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('qr_label', $data ?? [], null);
        $this->setIfExists('routing_code', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['sstatus'] === null) {
            $invalidProperties[] = "'sstatus' can't be null";
        }
        if ($this->container['shipment_no'] === null) {
            $invalidProperties[] = "'shipment_no' can't be null";
        }
        if ((mb_strlen($this->container['shipment_no']) > 50)) {
            $invalidProperties[] = "invalid value for 'shipment_no', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['international_shipment_no']) && (mb_strlen($this->container['international_shipment_no']) > 50)) {
            $invalidProperties[] = "invalid value for 'international_shipment_no', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['routing_code'] === null) {
            $invalidProperties[] = "'routing_code' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sstatus
     *
     * @return \Dhl\Rest\Retoure\Model\ReturnOrderConfirmationSstatus
     */
    public function getSstatus(): \Dhl\Rest\Retoure\Model\ReturnOrderConfirmationSstatus
    {
        return $this->container['sstatus'];
    }

    /**
     * Sets sstatus
     *
     * @param \Dhl\Rest\Retoure\Model\ReturnOrderConfirmationSstatus $sstatus sstatus
     *
     * @return $this
     */
    public function setSstatus(\Dhl\Rest\Retoure\Model\ReturnOrderConfirmationSstatus $sstatus): static
    {
        if (is_null($sstatus)) {
            throw new InvalidArgumentException('non-nullable sstatus cannot be null');
        }
        $this->container['sstatus'] = $sstatus;

        return $this;
    }

    /**
     * Gets shipment_no
     *
     * @return string
     */
    public function getShipmentNo(): string
    {
        return $this->container['shipment_no'];
    }

    /**
     * Sets shipment_no
     *
     * @param string $shipment_no shipment_no
     *
     * @return $this
     */
    public function setShipmentNo(string $shipment_no): static
    {
        if (is_null($shipment_no)) {
            throw new InvalidArgumentException('non-nullable shipment_no cannot be null');
        }
        if ((mb_strlen($shipment_no) > 50)) {
            throw new InvalidArgumentException('invalid length for $shipment_no when calling ReturnOrderConfirmation., must be smaller than or equal to 50.');
        }

        $this->container['shipment_no'] = $shipment_no;

        return $this;
    }

    /**
     * Gets international_shipment_no
     *
     * @return string|null
     */
    public function getInternationalShipmentNo(): ?string
    {
        return $this->container['international_shipment_no'];
    }

    /**
     * Sets international_shipment_no
     *
     * @param string|null $international_shipment_no international_shipment_no
     *
     * @return $this
     */
    public function setInternationalShipmentNo(?string $international_shipment_no): static
    {
        if (is_null($international_shipment_no)) {
            throw new InvalidArgumentException('non-nullable international_shipment_no cannot be null');
        }
        if ((mb_strlen($international_shipment_no) > 50)) {
            throw new InvalidArgumentException('invalid length for $international_shipment_no when calling ReturnOrderConfirmation., must be smaller than or equal to 50.');
        }

        $this->container['international_shipment_no'] = $international_shipment_no;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \Dhl\Rest\Retoure\Model\Document
     */
    public function getLabel(): \Dhl\Rest\Retoure\Model\Document
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \Dhl\Rest\Retoure\Model\Document $label label
     *
     * @return $this
     */
    public function setLabel(\Dhl\Rest\Retoure\Model\Document $label): static
    {
        if (is_null($label)) {
            throw new InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets qr_label
     *
     * @return \Dhl\Rest\Retoure\Model\Document|null
     */
    public function getQrLabel(): ?\Dhl\Rest\Retoure\Model\Document
    {
        return $this->container['qr_label'];
    }

    /**
     * Sets qr_label
     *
     * @param \Dhl\Rest\Retoure\Model\Document|null $qr_label qr_label
     *
     * @return $this
     */
    public function setQrLabel(?\Dhl\Rest\Retoure\Model\Document $qr_label): static
    {
        if (is_null($qr_label)) {
            throw new InvalidArgumentException('non-nullable qr_label cannot be null');
        }
        $this->container['qr_label'] = $qr_label;

        return $this;
    }

    /**
     * Gets routing_code
     *
     * @return string
     */
    public function getRoutingCode(): string
    {
        return $this->container['routing_code'];
    }

    /**
     * Sets routing_code
     *
     * @param string $routing_code Routing code of the returnlabel.
     *
     * @return $this
     */
    public function setRoutingCode(string $routing_code): static
    {
        if (is_null($routing_code)) {
            throw new InvalidArgumentException('non-nullable routing_code cannot be null');
        }
        $this->container['routing_code'] = $routing_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


