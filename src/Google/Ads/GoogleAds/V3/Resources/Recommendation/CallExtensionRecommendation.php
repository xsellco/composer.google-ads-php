<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V3\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Call extension recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.Recommendation.CallExtensionRecommendation</code>
 */
class CallExtensionRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Call extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CallFeedItem recommended_extensions = 1;</code>
     */
    private $recommended_extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V3\Common\CallFeedItem[]|\Google\Protobuf\Internal\RepeatedField $recommended_extensions
     *           Call extensions recommended to be added.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Call extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CallFeedItem recommended_extensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedExtensions()
    {
        return $this->recommended_extensions;
    }

    /**
     * Call extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CallFeedItem recommended_extensions = 1;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\CallFeedItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\CallFeedItem::class);
        $this->recommended_extensions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CallExtensionRecommendation::class, \Google\Ads\GoogleAds\V3\Resources\Recommendation_CallExtensionRecommendation::class);

