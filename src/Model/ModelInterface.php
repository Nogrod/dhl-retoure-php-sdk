<?php
/**
 * ModelInterface
 *
 * PHP version 8.1
 *
 * @package  Dhl\Rest\Retoure\Model
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

/**
 * Interface abstracting model access.
 *
 * @package Dhl\Rest\Retoure\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string;

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array;

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties(): array;

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid(): bool;

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}
