<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/bidding.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commission is an automatic bidding strategy in which the advertiser pays a
 * certain portion of the conversion value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.Commission</code>
 */
class Commission extends \Google\Protobuf\Internal\Message
{
    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value commission_rate_micros = 1;</code>
     */
    protected $commission_rate_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $commission_rate_micros
     *           Commission rate defines the portion of the conversion value that the
     *           advertiser will be billed. A commission rate of x should be passed into
     *           this field as (x * 1,000,000). For example, 106,000 represents a commission
     *           rate of 0.106 (10.6%).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value commission_rate_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCommissionRateMicros()
    {
        return $this->commission_rate_micros;
    }

    /**
     * Returns the unboxed value from <code>getCommissionRateMicros()</code>

     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value commission_rate_micros = 1;</code>
     * @return int|string|null
     */
    public function getCommissionRateMicrosUnwrapped()
    {
        return $this->readWrapperValue("commission_rate_micros");
    }

    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value commission_rate_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCommissionRateMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->commission_rate_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value commission_rate_micros = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCommissionRateMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("commission_rate_micros", $var);
        return $this;}

}

