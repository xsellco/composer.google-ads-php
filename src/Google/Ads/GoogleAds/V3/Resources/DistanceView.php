<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/distance_view.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A distance view with metrics aggregated by the user's distance from an
 * advertiser's location extensions. Each DistanceBucket includes all
 * impressions that fall within its distance and a single impression will
 * contribute to the metrics for all DistanceBuckets that include the user's
 * distance.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.DistanceView</code>
 */
class DistanceView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2;</code>
     */
    protected $distance_bucket = 0;
    /**
     * True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue metric_system = 3;</code>
     */
    protected $metric_system = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the distance view.
     *           Distance view resource names have the form:
     *           `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *     @type int $distance_bucket
     *           Grouping of user distance from location extensions.
     *     @type \Google\Protobuf\BoolValue $metric_system
     *           True if the DistanceBucket is using the metric system, false otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\DistanceView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2;</code>
     * @return int
     */
    public function getDistanceBucket()
    {
        return $this->distance_bucket;
    }

    /**
     * Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDistanceBucket($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\DistanceBucketEnum_DistanceBucket::class);
        $this->distance_bucket = $var;

        return $this;
    }

    /**
     * True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue metric_system = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getMetricSystem()
    {
        return $this->metric_system;
    }

    /**
     * Returns the unboxed value from <code>getMetricSystem()</code>

     * True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue metric_system = 3;</code>
     * @return bool|null
     */
    public function getMetricSystemUnwrapped()
    {
        return $this->readWrapperValue("metric_system");
    }

    /**
     * True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue metric_system = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setMetricSystem($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->metric_system = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue metric_system = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setMetricSystemUnwrapped($var)
    {
        $this->writeWrapperValue("metric_system", $var);
        return $this;}

}

