<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/offline_user_data_job_match_rate_range.proto

namespace Google\Ads\GoogleAds\V11\Enums\OfflineUserDataJobMatchRateRangeEnum;

use UnexpectedValueException;

/**
 * The match rate range of an offline user data job.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRange</code>
 */
class OfflineUserDataJobMatchRateRange
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Default value for match rate range.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Match rate range for offline data upload entity is between 0% and 19%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_LESS_THAN_20 = 2;</code>
     */
    const MATCH_RANGE_LESS_THAN_20 = 2;
    /**
     * Match rate range for offline data upload entity is between 20% and 30%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_20_TO_30 = 3;</code>
     */
    const MATCH_RANGE_20_TO_30 = 3;
    /**
     * Match rate range for offline data upload entity is between 31% and 40%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_31_TO_40 = 4;</code>
     */
    const MATCH_RANGE_31_TO_40 = 4;
    /**
     * Match rate range for offline data upload entity is between 41% and 50%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_41_TO_50 = 5;</code>
     */
    const MATCH_RANGE_41_TO_50 = 5;
    /**
     * Match rate range for offline data upload entity is between 51% and 60%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_51_TO_60 = 6;</code>
     */
    const MATCH_RANGE_51_TO_60 = 6;
    /**
     * Match rate range for offline data upload entity is between 61% and 70%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_61_TO_70 = 7;</code>
     */
    const MATCH_RANGE_61_TO_70 = 7;
    /**
     * Match rate range for offline data upload entity is between 71% and 80%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_71_TO_80 = 8;</code>
     */
    const MATCH_RANGE_71_TO_80 = 8;
    /**
     * Match rate range for offline data upload entity is between 81% and 90%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_81_TO_90 = 9;</code>
     */
    const MATCH_RANGE_81_TO_90 = 9;
    /**
     * Match rate range for offline data upload entity more than or equal to
     * 91%.
     *
     * Generated from protobuf enum <code>MATCH_RANGE_91_TO_100 = 10;</code>
     */
    const MATCH_RANGE_91_TO_100 = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MATCH_RANGE_LESS_THAN_20 => 'MATCH_RANGE_LESS_THAN_20',
        self::MATCH_RANGE_20_TO_30 => 'MATCH_RANGE_20_TO_30',
        self::MATCH_RANGE_31_TO_40 => 'MATCH_RANGE_31_TO_40',
        self::MATCH_RANGE_41_TO_50 => 'MATCH_RANGE_41_TO_50',
        self::MATCH_RANGE_51_TO_60 => 'MATCH_RANGE_51_TO_60',
        self::MATCH_RANGE_61_TO_70 => 'MATCH_RANGE_61_TO_70',
        self::MATCH_RANGE_71_TO_80 => 'MATCH_RANGE_71_TO_80',
        self::MATCH_RANGE_81_TO_90 => 'MATCH_RANGE_81_TO_90',
        self::MATCH_RANGE_91_TO_100 => 'MATCH_RANGE_91_TO_100',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OfflineUserDataJobMatchRateRange::class, \Google\Ads\GoogleAds\V11\Enums\OfflineUserDataJobMatchRateRangeEnum_OfflineUserDataJobMatchRateRange::class);

