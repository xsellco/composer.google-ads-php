<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/campaign_experiment_status.proto

namespace Google\Ads\GoogleAds\V11\Enums\CampaignExperimentStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a campaign experiment.
 *
 * Protobuf type <code>google.ads.googleads.v11.enums.CampaignExperimentStatusEnum.CampaignExperimentStatus</code>
 */
class CampaignExperimentStatus
{
    /**
     * The status has not been specified.
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
     * The experiment campaign is being initialized.
     *
     * Generated from protobuf enum <code>INITIALIZING = 2;</code>
     */
    const INITIALIZING = 2;
    /**
     * Initialization of the experiment campaign failed.
     *
     * Generated from protobuf enum <code>INITIALIZATION_FAILED = 8;</code>
     */
    const INITIALIZATION_FAILED = 8;
    /**
     * The experiment campaign is fully initialized. The experiment is currently
     * running, scheduled to run in the future or has ended based on its
     * end date. An experiment with the status INITIALIZING will be updated to
     * ENABLED when it is fully created.
     *
     * Generated from protobuf enum <code>ENABLED = 3;</code>
     */
    const ENABLED = 3;
    /**
     * The experiment campaign was graduated to a stand-alone
     * campaign, existing independently of the experiment.
     *
     * Generated from protobuf enum <code>GRADUATED = 4;</code>
     */
    const GRADUATED = 4;
    /**
     * The experiment is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 5;</code>
     */
    const REMOVED = 5;
    /**
     * The experiment's changes are being applied to the original campaign.
     * The long running operation returned by the promote method can be polled
     * to see the status of the promotion.
     *
     * Generated from protobuf enum <code>PROMOTING = 6;</code>
     */
    const PROMOTING = 6;
    /**
     * Promote of the experiment campaign failed.
     *
     * Generated from protobuf enum <code>PROMOTION_FAILED = 9;</code>
     */
    const PROMOTION_FAILED = 9;
    /**
     * The changes of the experiment are promoted to their original campaign.
     *
     * Generated from protobuf enum <code>PROMOTED = 7;</code>
     */
    const PROMOTED = 7;
    /**
     * The experiment was ended manually. It did not end based on its end date.
     *
     * Generated from protobuf enum <code>ENDED_MANUALLY = 10;</code>
     */
    const ENDED_MANUALLY = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INITIALIZING => 'INITIALIZING',
        self::INITIALIZATION_FAILED => 'INITIALIZATION_FAILED',
        self::ENABLED => 'ENABLED',
        self::GRADUATED => 'GRADUATED',
        self::REMOVED => 'REMOVED',
        self::PROMOTING => 'PROMOTING',
        self::PROMOTION_FAILED => 'PROMOTION_FAILED',
        self::PROMOTED => 'PROMOTED',
        self::ENDED_MANUALLY => 'ENDED_MANUALLY',
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
class_alias(CampaignExperimentStatus::class, \Google\Ads\GoogleAds\V11\Enums\CampaignExperimentStatusEnum_CampaignExperimentStatus::class);

