<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/user_location_view.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user location view.
 * User Location View includes all metrics aggregated at the country level,
 * one row per country. It reports metrics at the actual physical location of
 * the user by targeted or not targeted location. If other segment fields are
 * used, you may get more than one row per country.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.UserLocationView</code>
 */
class UserLocationView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $country_criterion_id = null;
    /**
     * Output only. Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>optional bool targeting_location = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $targeting_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the user location view.
     *           UserLocation view resource names have the form:
     *           `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *     @type int|string $country_criterion_id
     *           Output only. Criterion Id for the country.
     *     @type bool $targeting_location
     *           Output only. Indicates whether location was targeted or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\UserLocationView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the user location view.
     * UserLocation view resource names have the form:
     * `customers/{customer_id}/userLocationViews/{country_criterion_id}~{targeting_location}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCountryCriterionId()
    {
        return isset($this->country_criterion_id) ? $this->country_criterion_id : 0;
    }

    public function hasCountryCriterionId()
    {
        return isset($this->country_criterion_id);
    }

    public function clearCountryCriterionId()
    {
        unset($this->country_criterion_id);
    }

    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCountryCriterionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->country_criterion_id = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>optional bool targeting_location = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getTargetingLocation()
    {
        return isset($this->targeting_location) ? $this->targeting_location : false;
    }

    public function hasTargetingLocation()
    {
        return isset($this->targeting_location);
    }

    public function clearTargetingLocation()
    {
        unset($this->targeting_location);
    }

    /**
     * Output only. Indicates whether location was targeted or not.
     *
     * Generated from protobuf field <code>optional bool targeting_location = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetingLocation($var)
    {
        GPBUtil::checkBool($var);
        $this->targeting_location = $var;

        return $this;
    }

}

