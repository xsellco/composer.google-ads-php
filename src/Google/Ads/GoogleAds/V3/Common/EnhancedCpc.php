<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/bidding.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that raises bids for clicks
 * that seem more likely to lead to a conversion and lowers
 * them for clicks where they seem less likely.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.EnhancedCpc</code>
 */
class EnhancedCpc extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Bidding::initOnce();
        parent::__construct($data);
    }

}

