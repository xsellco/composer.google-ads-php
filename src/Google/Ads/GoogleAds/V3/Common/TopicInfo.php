<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/criteria.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A topic criterion. Use topics to target or exclude placements in the
 * Google Display Network based on the category into which the placement falls
 * (for example, "Pets & Animals/Pets/Dogs").
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.TopicInfo</code>
 */
class TopicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Topic Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant = 1;</code>
     */
    protected $topic_constant = null;
    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * "Pets & Animals", "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs"
     * category.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 2;</code>
     */
    private $path;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $topic_constant
     *           The Topic Constant resource name.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $path
     *           The category to target or exclude. Each subsequent element in the array
     *           describes a more specific sub-category. For example,
     *           "Pets & Animals", "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs"
     *           category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Topic Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTopicConstant()
    {
        return $this->topic_constant;
    }

    /**
     * Returns the unboxed value from <code>getTopicConstant()</code>

     * The Topic Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant = 1;</code>
     * @return string|null
     */
    public function getTopicConstantUnwrapped()
    {
        return $this->readWrapperValue("topic_constant");
    }

    /**
     * The Topic Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTopicConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->topic_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Topic Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTopicConstantUnwrapped($var)
    {
        $this->writeWrapperValue("topic_constant", $var);
        return $this;}

    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * "Pets & Animals", "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs"
     * category.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * "Pets & Animals", "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs"
     * category.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 2;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->path = $arr;

        return $this;
    }

}

