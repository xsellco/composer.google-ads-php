<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/policy_review_status.proto

namespace Google\Ads\GoogleAds\V3\Enums\PolicyReviewStatusEnum;

use UnexpectedValueException;

/**
 * The possible policy review statuses.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.PolicyReviewStatusEnum.PolicyReviewStatus</code>
 */
class PolicyReviewStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Currently under review.
     *
     * Generated from protobuf enum <code>REVIEW_IN_PROGRESS = 2;</code>
     */
    const REVIEW_IN_PROGRESS = 2;
    /**
     * Primary review complete. Other reviews may be continuing.
     *
     * Generated from protobuf enum <code>REVIEWED = 3;</code>
     */
    const REVIEWED = 3;
    /**
     * The resource has been resubmitted for approval or its policy decision has
     * been appealed.
     *
     * Generated from protobuf enum <code>UNDER_APPEAL = 4;</code>
     */
    const UNDER_APPEAL = 4;
    /**
     * The resource is eligible and may be serving but could still undergo
     * further review.
     *
     * Generated from protobuf enum <code>ELIGIBLE_MAY_SERVE = 5;</code>
     */
    const ELIGIBLE_MAY_SERVE = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::REVIEW_IN_PROGRESS => 'REVIEW_IN_PROGRESS',
        self::REVIEWED => 'REVIEWED',
        self::UNDER_APPEAL => 'UNDER_APPEAL',
        self::ELIGIBLE_MAY_SERVE => 'ELIGIBLE_MAY_SERVE',
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
class_alias(PolicyReviewStatus::class, \Google\Ads\GoogleAds\V3\Enums\PolicyReviewStatusEnum_PolicyReviewStatus::class);

