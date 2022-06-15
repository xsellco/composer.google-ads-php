<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/app_campaign_bidding_strategy_goal_type.proto

namespace Google\Ads\GoogleAds\V11\Enums\AppCampaignBiddingStrategyGoalTypeEnum;

use UnexpectedValueException;

/**
 * Goal type of App campaign BiddingStrategy.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType</code>
 */
class AppCampaignBiddingStrategyGoalType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Aim to maximize the number of app installs. The cpa bid is the
     * target cost per install.
     *
     * Generated from protobuf enum <code>OPTIMIZE_INSTALLS_TARGET_INSTALL_COST = 2;</code>
     */
    const OPTIMIZE_INSTALLS_TARGET_INSTALL_COST = 2;
    /**
     * Aim to maximize the long term number of selected in-app conversions from
     * app installs. The cpa bid is the target cost per install.
     *
     * Generated from protobuf enum <code>OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST = 3;</code>
     */
    const OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST = 3;
    /**
     * Aim to maximize the long term number of selected in-app conversions from
     * app installs. The cpa bid is the target cost per in-app conversion. Note
     * that the actual cpa may seem higher than the target cpa at first, since
     * the long term conversions haven't happened yet.
     *
     * Generated from protobuf enum <code>OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST = 4;</code>
     */
    const OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST = 4;
    /**
     * Aim to maximize all conversions' value, i.e. install + selected in-app
     * conversions while achieving or exceeding target return on advertising
     * spend.
     *
     * Generated from protobuf enum <code>OPTIMIZE_RETURN_ON_ADVERTISING_SPEND = 5;</code>
     */
    const OPTIMIZE_RETURN_ON_ADVERTISING_SPEND = 5;
    /**
     * Aim to maximize the pre-registration of the app.
     *
     * Generated from protobuf enum <code>OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME = 6;</code>
     */
    const OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME = 6;
    /**
     * Aim to maximize installation of the app without target cost-per-install.
     *
     * Generated from protobuf enum <code>OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST = 7;</code>
     */
    const OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPTIMIZE_INSTALLS_TARGET_INSTALL_COST => 'OPTIMIZE_INSTALLS_TARGET_INSTALL_COST',
        self::OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST => 'OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST',
        self::OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST => 'OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST',
        self::OPTIMIZE_RETURN_ON_ADVERTISING_SPEND => 'OPTIMIZE_RETURN_ON_ADVERTISING_SPEND',
        self::OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME => 'OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME',
        self::OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST => 'OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST',
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
class_alias(AppCampaignBiddingStrategyGoalType::class, \Google\Ads\GoogleAds\V11\Enums\AppCampaignBiddingStrategyGoalTypeEnum_AppCampaignBiddingStrategyGoalType::class);

