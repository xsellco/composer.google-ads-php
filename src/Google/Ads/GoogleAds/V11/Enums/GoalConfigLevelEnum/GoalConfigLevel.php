<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/goal_config_level.proto

namespace Google\Ads\GoogleAds\V11\Enums\GoalConfigLevelEnum;

use UnexpectedValueException;

/**
 * The possible goal config levels. Campaigns automatically inherit the
 * effective conversion account's customer goals unless they have been
 * configured with their own set of campaign goals.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.GoalConfigLevelEnum.GoalConfigLevel</code>
 */
class GoalConfigLevel
{
    /**
     * The goal config level has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The goal config level is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The goal config is defined at the customer level.
     *
     * Generated from protobuf enum <code>CUSTOMER = 2;</code>
     */
    const CUSTOMER = 2;
    /**
     * The goal config is defined at the campaign level.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 3;</code>
     */
    const CAMPAIGN = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOMER => 'CUSTOMER',
        self::CAMPAIGN => 'CAMPAIGN',
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
class_alias(GoalConfigLevel::class, \Google\Ads\GoogleAds\V11\Enums\GoalConfigLevelEnum_GoalConfigLevel::class);

