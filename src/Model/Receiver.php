<?php
/**
 * Receiver
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

namespace Dhl\Rest\Retoure\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Dhl\Rest\Retoure\ObjectSerializer;

/**
 * Receiver Class Doc Comment
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Receiver implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Receiver';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'receiver_id' => 'string',
        'shipper_country' => '\Dhl\Rest\Retoure\Model\Country',
        'ekp' => 'string',
        'billing_number' => 'string',
        'company_name' => 'string',
        'number_range' => 'string',
        'receiver_address' => '\Dhl\Rest\Retoure\Model\ContactAddress',
        'company_address' => '\Dhl\Rest\Retoure\Model\ContactAddress',
        'contact_email' => 'string',
        'additional_email_note' => 'string',
        'sales_tax_identification_number' => 'string',
        'court' => 'string',
        'company_management' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'receiver_id' => null,
        'shipper_country' => null,
        'ekp' => null,
        'billing_number' => null,
        'company_name' => null,
        'number_range' => null,
        'receiver_address' => null,
        'company_address' => null,
        'contact_email' => 'email',
        'additional_email_note' => null,
        'sales_tax_identification_number' => null,
        'court' => null,
        'company_management' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'receiver_id' => false,
        'shipper_country' => false,
        'ekp' => false,
        'billing_number' => false,
        'company_name' => false,
        'number_range' => false,
        'receiver_address' => false,
        'company_address' => false,
        'contact_email' => false,
        'additional_email_note' => false,
        'sales_tax_identification_number' => false,
        'court' => false,
        'company_management' => false
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
        'receiver_id' => 'receiverId',
        'shipper_country' => 'shipperCountry',
        'ekp' => 'ekp',
        'billing_number' => 'billingNumber',
        'company_name' => 'companyName',
        'number_range' => 'numberRange',
        'receiver_address' => 'receiverAddress',
        'company_address' => 'companyAddress',
        'contact_email' => 'contactEmail',
        'additional_email_note' => 'additionalEmailNote',
        'sales_tax_identification_number' => 'salesTaxIdentificationNumber',
        'court' => 'court',
        'company_management' => 'companyManagement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'receiver_id' => 'setReceiverId',
        'shipper_country' => 'setShipperCountry',
        'ekp' => 'setEkp',
        'billing_number' => 'setBillingNumber',
        'company_name' => 'setCompanyName',
        'number_range' => 'setNumberRange',
        'receiver_address' => 'setReceiverAddress',
        'company_address' => 'setCompanyAddress',
        'contact_email' => 'setContactEmail',
        'additional_email_note' => 'setAdditionalEmailNote',
        'sales_tax_identification_number' => 'setSalesTaxIdentificationNumber',
        'court' => 'setCourt',
        'company_management' => 'setCompanyManagement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'receiver_id' => 'getReceiverId',
        'shipper_country' => 'getShipperCountry',
        'ekp' => 'getEkp',
        'billing_number' => 'getBillingNumber',
        'company_name' => 'getCompanyName',
        'number_range' => 'getNumberRange',
        'receiver_address' => 'getReceiverAddress',
        'company_address' => 'getCompanyAddress',
        'contact_email' => 'getContactEmail',
        'additional_email_note' => 'getAdditionalEmailNote',
        'sales_tax_identification_number' => 'getSalesTaxIdentificationNumber',
        'court' => 'getCourt',
        'company_management' => 'getCompanyManagement'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('receiver_id', $data ?? [], null);
        $this->setIfExists('shipper_country', $data ?? [], null);
        $this->setIfExists('ekp', $data ?? [], null);
        $this->setIfExists('billing_number', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('number_range', $data ?? [], null);
        $this->setIfExists('receiver_address', $data ?? [], null);
        $this->setIfExists('company_address', $data ?? [], null);
        $this->setIfExists('contact_email', $data ?? [], null);
        $this->setIfExists('additional_email_note', $data ?? [], null);
        $this->setIfExists('sales_tax_identification_number', $data ?? [], null);
        $this->setIfExists('court', $data ?? [], null);
        $this->setIfExists('company_management', $data ?? [], null);
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

        if ($this->container['receiver_id'] === null) {
            $invalidProperties[] = "'receiver_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'receiver_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['shipper_country'] === null) {
            $invalidProperties[] = "'shipper_country' can't be null";
        }
        if ($this->container['ekp'] === null) {
            $invalidProperties[] = "'ekp' can't be null";
        }
        if (!preg_match("/\\d{10}/", $this->container['ekp'])) {
            $invalidProperties[] = "invalid value for 'ekp', must be conform to the pattern /\\d{10}/.";
        }

        if ($this->container['billing_number'] === null) {
            $invalidProperties[] = "'billing_number' can't be null";
        }
        if (!preg_match("/\\d{10}\\d{2}\\w{2}/", $this->container['billing_number'])) {
            $invalidProperties[] = "invalid value for 'billing_number', must be conform to the pattern /\\d{10}\\d{2}\\w{2}/.";
        }

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ((mb_strlen($this->container['company_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['number_range'] === null) {
            $invalidProperties[] = "'number_range' can't be null";
        }
        if ((mb_strlen($this->container['number_range']) > 35)) {
            $invalidProperties[] = "invalid value for 'number_range', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['receiver_address'] === null) {
            $invalidProperties[] = "'receiver_address' can't be null";
        }
        if ($this->container['company_address'] === null) {
            $invalidProperties[] = "'company_address' can't be null";
        }
        if (!is_null($this->container['contact_email']) && (mb_strlen($this->container['contact_email']) > 70)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['contact_email']) && (mb_strlen($this->container['contact_email']) < 3)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['additional_email_note']) && (mb_strlen($this->container['additional_email_note']) > 250)) {
            $invalidProperties[] = "invalid value for 'additional_email_note', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['sales_tax_identification_number']) && (mb_strlen($this->container['sales_tax_identification_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'sales_tax_identification_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['court']) && (mb_strlen($this->container['court']) > 30)) {
            $invalidProperties[] = "invalid value for 'court', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['company_management']) && (mb_strlen($this->container['company_management']) > 50)) {
            $invalidProperties[] = "invalid value for 'company_management', the character length must be smaller than or equal to 50.";
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
     * Gets receiver_id
     *
     * @return string
     */
    public function getReceiverId(): string
    {
        return $this->container['receiver_id'];
    }

    /**
     * Sets receiver_id
     *
     * @param string $receiver_id the receiver id of the return shipment
     *
     * @return $this
     */
    public function setReceiverId(string $receiver_id): static
    {
        if (is_null($receiver_id)) {
            throw new InvalidArgumentException('non-nullable receiver_id cannot be null');
        }
        if ((mb_strlen($receiver_id) > 50)) {
            throw new InvalidArgumentException('invalid length for $receiver_id when calling Receiver., must be smaller than or equal to 50.');
        }

        $this->container['receiver_id'] = $receiver_id;

        return $this;
    }

    /**
     * Gets shipper_country
     *
     * @return \Dhl\Rest\Retoure\Model\Country
     */
    public function getShipperCountry(): \Dhl\Rest\Retoure\Model\Country
    {
        return $this->container['shipper_country'];
    }

    /**
     * Sets shipper_country
     *
     * @param \Dhl\Rest\Retoure\Model\Country $shipper_country shipper_country
     *
     * @return $this
     */
    public function setShipperCountry(\Dhl\Rest\Retoure\Model\Country $shipper_country): static
    {
        if (is_null($shipper_country)) {
            throw new InvalidArgumentException('non-nullable shipper_country cannot be null');
        }
        $this->container['shipper_country'] = $shipper_country;

        return $this;
    }

    /**
     * Gets ekp
     *
     * @return string
     */
    public function getEkp(): string
    {
        return $this->container['ekp'];
    }

    /**
     * Sets ekp
     *
     * @param string $ekp ekp
     *
     * @return $this
     */
    public function setEkp(string $ekp): static
    {
        if (is_null($ekp)) {
            throw new InvalidArgumentException('non-nullable ekp cannot be null');
        }

        if ((!preg_match("/\\d{10}/", ObjectSerializer::toString($ekp)))) {
            throw new InvalidArgumentException("invalid value for \$ekp when calling Receiver., must conform to the pattern /\\d{10}/.");
        }

        $this->container['ekp'] = $ekp;

        return $this;
    }

    /**
     * Gets billing_number
     *
     * @return string
     */
    public function getBillingNumber(): string
    {
        return $this->container['billing_number'];
    }

    /**
     * Sets billing_number
     *
     * @param string $billing_number billing_number
     *
     * @return $this
     */
    public function setBillingNumber(string $billing_number): static
    {
        if (is_null($billing_number)) {
            throw new InvalidArgumentException('non-nullable billing_number cannot be null');
        }

        if ((!preg_match("/\\d{10}\\d{2}\\w{2}/", ObjectSerializer::toString($billing_number)))) {
            throw new InvalidArgumentException("invalid value for \$billing_number when calling Receiver., must conform to the pattern /\\d{10}\\d{2}\\w{2}/.");
        }

        $this->container['billing_number'] = $billing_number;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName(string $company_name): static
    {
        if (is_null($company_name)) {
            throw new InvalidArgumentException('non-nullable company_name cannot be null');
        }
        if ((mb_strlen($company_name) > 50)) {
            throw new InvalidArgumentException('invalid length for $company_name when calling Receiver., must be smaller than or equal to 50.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets number_range
     *
     * @return string
     */
    public function getNumberRange(): string
    {
        return $this->container['number_range'];
    }

    /**
     * Sets number_range
     *
     * @param string $number_range Number range associated with the billing number. The return shipment number is part of the number range.
     *
     * @return $this
     */
    public function setNumberRange(string $number_range): static
    {
        if (is_null($number_range)) {
            throw new InvalidArgumentException('non-nullable number_range cannot be null');
        }
        if ((mb_strlen($number_range) > 35)) {
            throw new InvalidArgumentException('invalid length for $number_range when calling Receiver., must be smaller than or equal to 35.');
        }

        $this->container['number_range'] = $number_range;

        return $this;
    }

    /**
     * Gets receiver_address
     *
     * @return \Dhl\Rest\Retoure\Model\ContactAddress
     */
    public function getReceiverAddress(): \Dhl\Rest\Retoure\Model\ContactAddress
    {
        return $this->container['receiver_address'];
    }

    /**
     * Sets receiver_address
     *
     * @param \Dhl\Rest\Retoure\Model\ContactAddress $receiver_address receiver_address
     *
     * @return $this
     */
    public function setReceiverAddress(\Dhl\Rest\Retoure\Model\ContactAddress $receiver_address): static
    {
        if (is_null($receiver_address)) {
            throw new InvalidArgumentException('non-nullable receiver_address cannot be null');
        }
        $this->container['receiver_address'] = $receiver_address;

        return $this;
    }

    /**
     * Gets company_address
     *
     * @return \Dhl\Rest\Retoure\Model\ContactAddress
     */
    public function getCompanyAddress(): \Dhl\Rest\Retoure\Model\ContactAddress
    {
        return $this->container['company_address'];
    }

    /**
     * Sets company_address
     *
     * @param \Dhl\Rest\Retoure\Model\ContactAddress $company_address company_address
     *
     * @return $this
     */
    public function setCompanyAddress(\Dhl\Rest\Retoure\Model\ContactAddress $company_address): static
    {
        if (is_null($company_address)) {
            throw new InvalidArgumentException('non-nullable company_address cannot be null');
        }
        $this->container['company_address'] = $company_address;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email contact email address
     *
     * @return $this
     */
    public function setContactEmail(?string $contact_email): static
    {
        if (is_null($contact_email)) {
            throw new InvalidArgumentException('non-nullable contact_email cannot be null');
        }
        if ((mb_strlen($contact_email) > 70)) {
            throw new InvalidArgumentException('invalid length for $contact_email when calling Receiver., must be smaller than or equal to 70.');
        }
        if ((mb_strlen($contact_email) < 3)) {
            throw new InvalidArgumentException('invalid length for $contact_email when calling Receiver., must be bigger than or equal to 3.');
        }

        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets additional_email_note
     *
     * @return string|null
     */
    public function getAdditionalEmailNote(): ?string
    {
        return $this->container['additional_email_note'];
    }

    /**
     * Sets additional_email_note
     *
     * @param string|null $additional_email_note Text for additional comments by the business customer that are printed in the footer of the email that is sent to the shipper after order of a return label.
     *
     * @return $this
     */
    public function setAdditionalEmailNote(?string $additional_email_note): static
    {
        if (is_null($additional_email_note)) {
            throw new InvalidArgumentException('non-nullable additional_email_note cannot be null');
        }
        if ((mb_strlen($additional_email_note) > 250)) {
            throw new InvalidArgumentException('invalid length for $additional_email_note when calling Receiver., must be smaller than or equal to 250.');
        }

        $this->container['additional_email_note'] = $additional_email_note;

        return $this;
    }

    /**
     * Gets sales_tax_identification_number
     *
     * @return string|null
     */
    public function getSalesTaxIdentificationNumber(): ?string
    {
        return $this->container['sales_tax_identification_number'];
    }

    /**
     * Sets sales_tax_identification_number
     *
     * @param string|null $sales_tax_identification_number Identification of the business customer for sales tax purposes
     *
     * @return $this
     */
    public function setSalesTaxIdentificationNumber(?string $sales_tax_identification_number): static
    {
        if (is_null($sales_tax_identification_number)) {
            throw new InvalidArgumentException('non-nullable sales_tax_identification_number cannot be null');
        }
        if ((mb_strlen($sales_tax_identification_number) > 30)) {
            throw new InvalidArgumentException('invalid length for $sales_tax_identification_number when calling Receiver., must be smaller than or equal to 30.');
        }

        $this->container['sales_tax_identification_number'] = $sales_tax_identification_number;

        return $this;
    }

    /**
     * Gets court
     *
     * @return string|null
     */
    public function getCourt(): ?string
    {
        return $this->container['court'];
    }

    /**
     * Sets court
     *
     * @param string|null $court Jurisdiction of the business customer
     *
     * @return $this
     */
    public function setCourt(?string $court): static
    {
        if (is_null($court)) {
            throw new InvalidArgumentException('non-nullable court cannot be null');
        }
        if ((mb_strlen($court) > 30)) {
            throw new InvalidArgumentException('invalid length for $court when calling Receiver., must be smaller than or equal to 30.');
        }

        $this->container['court'] = $court;

        return $this;
    }

    /**
     * Gets company_management
     *
     * @return string|null
     */
    public function getCompanyManagement(): ?string
    {
        return $this->container['company_management'];
    }

    /**
     * Sets company_management
     *
     * @param string|null $company_management company_management
     *
     * @return $this
     */
    public function setCompanyManagement(?string $company_management): static
    {
        if (is_null($company_management)) {
            throw new InvalidArgumentException('non-nullable company_management cannot be null');
        }
        if ((mb_strlen($company_management) > 50)) {
            throw new InvalidArgumentException('invalid length for $company_management when calling Receiver., must be smaller than or equal to 50.');
        }

        $this->container['company_management'] = $company_management;

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


