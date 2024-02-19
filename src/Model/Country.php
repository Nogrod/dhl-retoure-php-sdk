<?php
/**
 * Country
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

/**
 * Country Class Doc Comment
 *
 * @package  Dhl\Rest\Retoure
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum Country: string
{
    case BEL = 'bel';

    case BGR = 'bgr';

    case DNK = 'dnk';

    case DEU = 'deu';

    case EST = 'est';

    case FIN = 'fin';

    case FRA = 'fra';

    case GRC = 'grc';

    case GBR = 'gbr';

    case IRL = 'irl';

    case ITA = 'ita';

    case HRV = 'hrv';

    case LVA = 'lva';

    case LTU = 'ltu';

    case LUX = 'lux';

    case MLT = 'mlt';

    case NLD = 'nld';

    case AUT = 'aut';

    case POL = 'pol';

    case PRT = 'prt';

    case ROU = 'rou';

    case SWE = 'swe';

    case CHE = 'che';

    case SVK = 'svk';

    case SVN = 'svn';

    case ESP = 'esp';

    case CZE = 'cze';

    case HUN = 'hun';

    case CYP = 'cyp';

}


