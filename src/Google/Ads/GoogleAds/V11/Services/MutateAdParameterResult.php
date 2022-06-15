<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/ad_parameter_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the ad parameter mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.MutateAdParameterResult</code>
 */
class MutateAdParameterResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated AdParameter with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.AdParameter ad_parameter = 2;</code>
     */
    protected $ad_parameter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V11\Resources\AdParameter $ad_parameter
     *           The mutated AdParameter with only mutable fields after mutate. The field
     *           will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\AdParameterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
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
     * The mutated AdParameter with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.AdParameter ad_parameter = 2;</code>
     * @return \Google\Ads\GoogleAds\V11\Resources\AdParameter|null
     */
    public function getAdParameter()
    {
        return $this->ad_parameter;
    }

    public function hasAdParameter()
    {
        return isset($this->ad_parameter);
    }

    public function clearAdParameter()
    {
        unset($this->ad_parameter);
    }

    /**
     * The mutated AdParameter with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.AdParameter ad_parameter = 2;</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\AdParameter $var
     * @return $this
     */
    public function setAdParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Resources\AdParameter::class);
        $this->ad_parameter = $var;

        return $this;
    }

}

