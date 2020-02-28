<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/topic_constant.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Use topics to target or exclude placements in the Google Display Network
 * based on the category into which the placement falls (for example,
 * "Pets & Animals/Pets/Dogs").
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.TopicConstant</code>
 */
class TopicConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the topic constant.
     * topic constant resource names have the form:
     * `topicConstants/{topic_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the topic.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    protected $id = null;
    /**
     * Resource name of parent of the topic constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant_parent = 3;</code>
     */
    protected $topic_constant_parent = null;
    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * {"Pets & Animals", "Pets", "Dogs"} represents the
     * "Pets & Animals/Pets/Dogs" category. List of available topic categories at
     * https://developers.google.com/adwords/api/docs/appendix/verticals
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 4;</code>
     */
    private $path;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the topic constant.
     *           topic constant resource names have the form:
     *           `topicConstants/{topic_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the topic.
     *     @type \Google\Protobuf\StringValue $topic_constant_parent
     *           Resource name of parent of the topic constant.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $path
     *           The category to target or exclude. Each subsequent element in the array
     *           describes a more specific sub-category. For example,
     *           {"Pets & Animals", "Pets", "Dogs"} represents the
     *           "Pets & Animals/Pets/Dogs" category. List of available topic categories at
     *           https://developers.google.com/adwords/api/docs/appendix/verticals
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\TopicConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the topic constant.
     * topic constant resource names have the form:
     * `topicConstants/{topic_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the topic constant.
     * topic constant resource names have the form:
     * `topicConstants/{topic_id}`
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
     * The ID of the topic.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the topic.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the topic.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the topic.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Resource name of parent of the topic constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant_parent = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTopicConstantParent()
    {
        return $this->topic_constant_parent;
    }

    /**
     * Returns the unboxed value from <code>getTopicConstantParent()</code>

     * Resource name of parent of the topic constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant_parent = 3;</code>
     * @return string|null
     */
    public function getTopicConstantParentUnwrapped()
    {
        return $this->readWrapperValue("topic_constant_parent");
    }

    /**
     * Resource name of parent of the topic constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant_parent = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTopicConstantParent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->topic_constant_parent = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Resource name of parent of the topic constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue topic_constant_parent = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTopicConstantParentUnwrapped($var)
    {
        $this->writeWrapperValue("topic_constant_parent", $var);
        return $this;}

    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * {"Pets & Animals", "Pets", "Dogs"} represents the
     * "Pets & Animals/Pets/Dogs" category. List of available topic categories at
     * https://developers.google.com/adwords/api/docs/appendix/verticals
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The category to target or exclude. Each subsequent element in the array
     * describes a more specific sub-category. For example,
     * {"Pets & Animals", "Pets", "Dogs"} represents the
     * "Pets & Animals/Pets/Dogs" category. List of available topic categories at
     * https://developers.google.com/adwords/api/docs/appendix/verticals
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue path = 4;</code>
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

