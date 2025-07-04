<?php

/**
 * FormDataProcessor
 * PHP version 8.1
 *
 * @category Class
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
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dhl\Rest\Retoure;

use ArrayAccess;
use DateTime;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\StreamInterface;
use SplFileObject;
use Dhl\Rest\Retoure\Model\ModelInterface;

class FormDataProcessor
{
    /**
     * Tags whether payload passed to ::prepare() contains one or more
     * SplFileObject or stream values.
     */
    public bool $has_file = false;

    /**
     * Take value and turn it into an array suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param array<string|bool|array|DateTime|ArrayAccess|SplFileObject> $values the value of the form parameter
     *
     * @return array [key => value] of formdata
     */
    public function prepare(array $values): array
    {
        $this->has_file = false;
        $result = [];

        foreach ($values as $k => $v) {
            if ($v === null) {
                continue;
            }

            $result[$k] = $this->makeFormSafe($v);
        }

        return $result;
    }

    /**
     * Flattens a multi-level array of data and generates a single-level array
     * compatible with formdata - a single-level array where the keys use bracket
     * notation to signify nested data.
     *
     * credit: https://github.com/FranBar1966/FlatPHP
     */
    public static function flatten(array $source, string $start = ''): array
    {
        $opt = [
            'prefix'          => '[',
            'suffix'          => ']',
            'suffix-end'      => true,
            'prefix-list'     => '[',
            'suffix-list'     => ']',
            'suffix-list-end' => true,
        ];

        if ($start === '') {
            $currentPrefix = '';
            $currentSuffix = '';
            $currentSuffixEnd = false;
        } elseif (array_is_list($source)) {
            $currentPrefix = $opt['prefix-list'];
            $currentSuffix = $opt['suffix-list'];
            $currentSuffixEnd = $opt['suffix-list-end'];
        } else {
            $currentPrefix = $opt['prefix'];
            $currentSuffix = $opt['suffix'];
            $currentSuffixEnd = $opt['suffix-end'];
        }

        $currentName = $start;
        $result = [];

        foreach ($source as $key => $val) {
            $currentName .= $currentPrefix . $key;

            if (is_array($val) && !empty($val)) {
                $currentName .= $currentSuffix;
                $result += self::flatten($val, $currentName);
            } else {
                if ($currentSuffixEnd) {
                    $currentName .= $currentSuffix;
                }

                $result[$currentName] = ObjectSerializer::toString($val);
            }

            $currentName = $start;
        }

        return $result;
    }

    /**
     * formdata must be limited to scalars or arrays of scalar values,
     * or a resource for a file upload. Here we iterate through all available
     * data and identify how to handle each scenario
     *
     * @param string|bool|array|DateTime|ArrayAccess|SplFileObject $value
     */
    protected function makeFormSafe(mixed $value)
    {
        if ($value instanceof SplFileObject) {
            return $this->processFiles([$value])[0];
        }

        if (is_resource($value)) {
            $this->has_file = true;

            return $value;
        }

        if ($value instanceof ModelInterface) {
            return $this->processModel($value);
        }

        if (is_array($value) || is_object($value)) {
            $data = [];

            foreach ($value as $k => $v) {
                $data[$k] = $this->makeFormSafe($v);
            }

            return $data;
        }

        return ObjectSerializer::toString($value);
    }

    /**
     * We are able to handle nested ModelInterface. We do not simply call
     * json_decode(json_encode()) because any given model may have binary data
     * or other data that cannot be serialized to a JSON string
     */
    protected function processModel(ModelInterface $model): array
    {
        $result = [];

        foreach ($model::openAPITypes() as $name => $type) {
            $value = $model->offsetGet($name);

            if ($value === null) {
                continue;
            }

            if (str_contains($type, '\SplFileObject')) {
                $file = is_array($value) ? $value : [$value];
                $result[$name] = $this->processFiles($file);

                continue;
            }

            if ($value instanceof ModelInterface) {
                $result[$name] = $this->processModel($value);

                continue;
            }

            if (is_array($value) || is_object($value)) {
                $result[$name] = $this->makeFormSafe($value);

                continue;
            }

            $result[$name] = ObjectSerializer::toString($value);
        }

        return $result;
    }

    /**
     * Handle file data
     */
    protected function processFiles(array $files): array
    {
        $this->has_file = true;

        $result = [];

        foreach ($files as $i => $file) {
            if (is_array($file)) {
                $result[$i] = $this->processFiles($file);

                continue;
            }

            if ($file instanceof StreamInterface) {
                $result[$i] = $file;

                continue;
            }

            if ($file instanceof SplFileObject) {
                $result[$i] = $this->tryFopen($file);
            }
        }

        return $result;
    }

    private function tryFopen(SplFileObject $file)
    {
        return Utils::tryFopen($file->getRealPath(), 'rb');
    }
}
