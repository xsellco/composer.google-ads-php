<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/criteria.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logical expression for targeting webpages of an advertiser's website.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.WebpageConditionInfo</code>
 */
class WebpageConditionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     */
    protected $operand = 0;
    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     */
    protected $operator = 0;
    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue argument = 3;</code>
     */
    protected $argument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operand
     *           Operand of webpage targeting condition.
     *     @type int $operator
     *           Operator of webpage targeting condition.
     *     @type \Google\Protobuf\StringValue $argument
     *           Argument of webpage targeting condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     * @return int
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperand($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\WebpageConditionOperandEnum_WebpageConditionOperand::class);
        $this->operand = $var;

        return $this;
    }

    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\WebpageConditionOperatorEnum_WebpageConditionOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue argument = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getArgument()
    {
        return $this->argument;
    }

    /**
     * Returns the unboxed value from <code>getArgument()</code>

     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue argument = 3;</code>
     * @return string|null
     */
    public function getArgumentUnwrapped()
    {
        return $this->readWrapperValue("argument");
    }

    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue argument = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setArgument($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->argument = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue argument = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setArgumentUnwrapped($var)
    {
        $this->writeWrapperValue("argument", $var);
        return $this;}

}

