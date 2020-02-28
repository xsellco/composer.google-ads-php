<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/feed.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeedAttributes define the types of data expected to be present in a Feed. A
 * single FeedAttribute specifies the expected type of the FeedItemAttributes
 * with the same FeedAttributeId. Optionally, a FeedAttribute can be marked as
 * being part of a FeedItem's unique key.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.FeedAttribute</code>
 */
class FeedAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     */
    protected $id = null;
    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     */
    protected $name = null;
    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     */
    protected $type = 0;
    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_part_of_key = 4;</code>
     */
    protected $is_part_of_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $id
     *           ID of the attribute.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the attribute. Required.
     *     @type int $type
     *           Data type for feed attribute. Required.
     *     @type \Google\Protobuf\BoolValue $is_part_of_key
     *           Indicates that data corresponding to this attribute is part of a
     *           FeedItem's unique key. It defaults to false if it is unspecified. Note
     *           that a unique key is not required in a Feed's schema, in which case the
     *           FeedItems must be referenced by their feed_item_id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * ID of the attribute.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * ID of the attribute.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
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

     * ID of the attribute.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Data type for feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedAttributeTypeEnum.FeedAttributeType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\FeedAttributeTypeEnum_FeedAttributeType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_part_of_key = 4;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsPartOfKey()
    {
        return $this->is_part_of_key;
    }

    /**
     * Returns the unboxed value from <code>getIsPartOfKey()</code>

     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_part_of_key = 4;</code>
     * @return bool|null
     */
    public function getIsPartOfKeyUnwrapped()
    {
        return $this->readWrapperValue("is_part_of_key");
    }

    /**
     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_part_of_key = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsPartOfKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_part_of_key = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates that data corresponding to this attribute is part of a
     * FeedItem's unique key. It defaults to false if it is unspecified. Note
     * that a unique key is not required in a Feed's schema, in which case the
     * FeedItems must be referenced by their feed_item_id.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_part_of_key = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIsPartOfKeyUnwrapped($var)
    {
        $this->writeWrapperValue("is_part_of_key", $var);
        return $this;}

}

