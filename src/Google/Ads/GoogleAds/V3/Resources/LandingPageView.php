<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/landing_page_view.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A landing page view with metrics aggregated at the unexpanded final URL
 * level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.LandingPageView</code>
 */
class LandingPageView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue unexpanded_final_url = 2;</code>
     */
    protected $unexpanded_final_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the landing page view.
     *           Landing page view resource names have the form:
     *           `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *     @type \Google\Protobuf\StringValue $unexpanded_final_url
     *           The advertiser-specified final URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\LandingPageView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
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
     * The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue unexpanded_final_url = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUnexpandedFinalUrl()
    {
        return $this->unexpanded_final_url;
    }

    /**
     * Returns the unboxed value from <code>getUnexpandedFinalUrl()</code>

     * The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue unexpanded_final_url = 2;</code>
     * @return string|null
     */
    public function getUnexpandedFinalUrlUnwrapped()
    {
        return $this->readWrapperValue("unexpanded_final_url");
    }

    /**
     * The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue unexpanded_final_url = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUnexpandedFinalUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->unexpanded_final_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue unexpanded_final_url = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUnexpandedFinalUrlUnwrapped($var)
    {
        $this->writeWrapperValue("unexpanded_final_url", $var);
        return $this;}

}

