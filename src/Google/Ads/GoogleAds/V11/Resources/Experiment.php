<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/experiment.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google ads experiment for users to experiment changes on multiple
 * campaigns, compare the performance, and apply the effective changes.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.Experiment</code>
 */
class Experiment extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the experiment.
     * Experiment resource names have the form:
     * `customers/{customer_id}/experiments/{experiment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the experiment. Read only.
     *
     * Generated from protobuf field <code>optional int64 experiment_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $experiment_id = null;
    /**
     * Required. The name of the experiment. It must have a minimum length of 1 and
     * maximum length of 1024. It must be unique under a customer.
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The description of the experiment. It must have a minimum length of 1 and
     * maximum length of 2048.
     *
     * Generated from protobuf field <code>string description = 11;</code>
     */
    protected $description = '';
    /**
     * For system managed experiments, the advertiser must provide a suffix during
     * construction, in the setup stage before moving to initiated. The suffix
     * will be appended to the in-design and experiment campaign names so that the
     * name is base campaign name + suffix.
     *
     * Generated from protobuf field <code>string suffix = 12;</code>
     */
    protected $suffix = '';
    /**
     * The product/feature that uses this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentTypeEnum.ExperimentType type = 13;</code>
     */
    protected $type = 0;
    /**
     * The Advertiser-desired status of this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentStatusEnum.ExperimentStatus status = 14;</code>
     */
    protected $status = 0;
    /**
     * Date when the experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 15;</code>
     */
    protected $start_date = null;
    /**
     * Date when the experiment ends. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 16;</code>
     */
    protected $end_date = null;
    /**
     * The goals of this experiment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.MetricGoal goals = 17;</code>
     */
    private $goals;
    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment schedule or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $long_running_operation = null;
    /**
     * Output only. The status of the experiment promotion process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.AsyncActionStatusEnum.AsyncActionStatus promote_status = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $promote_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the experiment.
     *           Experiment resource names have the form:
     *           `customers/{customer_id}/experiments/{experiment_id}`
     *     @type int|string $experiment_id
     *           Output only. The ID of the experiment. Read only.
     *     @type string $name
     *           Required. The name of the experiment. It must have a minimum length of 1 and
     *           maximum length of 1024. It must be unique under a customer.
     *     @type string $description
     *           The description of the experiment. It must have a minimum length of 1 and
     *           maximum length of 2048.
     *     @type string $suffix
     *           For system managed experiments, the advertiser must provide a suffix during
     *           construction, in the setup stage before moving to initiated. The suffix
     *           will be appended to the in-design and experiment campaign names so that the
     *           name is base campaign name + suffix.
     *     @type int $type
     *           The product/feature that uses this experiment.
     *     @type int $status
     *           The Advertiser-desired status of this experiment.
     *     @type string $start_date
     *           Date when the experiment starts. By default, the experiment starts
     *           now or on the campaign's start date, whichever is later. If this field is
     *           set, then the experiment starts at the beginning of the specified date in
     *           the customer's time zone.
     *           Format: YYYY-MM-DD
     *           Example: 2019-03-14
     *     @type string $end_date
     *           Date when the experiment ends. By default, the experiment ends on
     *           the campaign's end date. If this field is set, then the experiment ends at
     *           the end of the specified date in the customer's time zone.
     *           Format: YYYY-MM-DD
     *           Example: 2019-04-18
     *     @type \Google\Ads\GoogleAds\V11\Common\MetricGoal[]|\Google\Protobuf\Internal\RepeatedField $goals
     *           The goals of this experiment.
     *     @type string $long_running_operation
     *           Output only. The resource name of the long-running operation that can be used to poll
     *           for completion of experiment schedule or promote. The most recent long
     *           running operation is returned.
     *     @type int $promote_status
     *           Output only. The status of the experiment promotion process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the experiment.
     * Experiment resource names have the form:
     * `customers/{customer_id}/experiments/{experiment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the experiment.
     * Experiment resource names have the form:
     * `customers/{customer_id}/experiments/{experiment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the experiment. Read only.
     *
     * Generated from protobuf field <code>optional int64 experiment_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExperimentId()
    {
        return isset($this->experiment_id) ? $this->experiment_id : 0;
    }

    public function hasExperimentId()
    {
        return isset($this->experiment_id);
    }

    public function clearExperimentId()
    {
        unset($this->experiment_id);
    }

    /**
     * Output only. The ID of the experiment. Read only.
     *
     * Generated from protobuf field <code>optional int64 experiment_id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExperimentId($var)
    {
        GPBUtil::checkInt64($var);
        $this->experiment_id = $var;

        return $this;
    }

    /**
     * Required. The name of the experiment. It must have a minimum length of 1 and
     * maximum length of 1024. It must be unique under a customer.
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the experiment. It must have a minimum length of 1 and
     * maximum length of 1024. It must be unique under a customer.
     *
     * Generated from protobuf field <code>string name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of the experiment. It must have a minimum length of 1 and
     * maximum length of 2048.
     *
     * Generated from protobuf field <code>string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the experiment. It must have a minimum length of 1 and
     * maximum length of 2048.
     *
     * Generated from protobuf field <code>string description = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * For system managed experiments, the advertiser must provide a suffix during
     * construction, in the setup stage before moving to initiated. The suffix
     * will be appended to the in-design and experiment campaign names so that the
     * name is base campaign name + suffix.
     *
     * Generated from protobuf field <code>string suffix = 12;</code>
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * For system managed experiments, the advertiser must provide a suffix during
     * construction, in the setup stage before moving to initiated. The suffix
     * will be appended to the in-design and experiment campaign names so that the
     * name is base campaign name + suffix.
     *
     * Generated from protobuf field <code>string suffix = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->suffix = $var;

        return $this;
    }

    /**
     * The product/feature that uses this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentTypeEnum.ExperimentType type = 13;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The product/feature that uses this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentTypeEnum.ExperimentType type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\ExperimentTypeEnum\ExperimentType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The Advertiser-desired status of this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentStatusEnum.ExperimentStatus status = 14;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The Advertiser-desired status of this experiment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.ExperimentStatusEnum.ExperimentStatus status = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\ExperimentStatusEnum\ExperimentStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Date when the experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 15;</code>
     * @return string
     */
    public function getStartDate()
    {
        return isset($this->start_date) ? $this->start_date : '';
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Date when the experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Date when the experiment ends. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 16;</code>
     * @return string
     */
    public function getEndDate()
    {
        return isset($this->end_date) ? $this->end_date : '';
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * Date when the experiment ends. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * The goals of this experiment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.MetricGoal goals = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * The goals of this experiment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.MetricGoal goals = 17;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\MetricGoal[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGoals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\MetricGoal::class);
        $this->goals = $arr;

        return $this;
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment schedule or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLongRunningOperation()
    {
        return isset($this->long_running_operation) ? $this->long_running_operation : '';
    }

    public function hasLongRunningOperation()
    {
        return isset($this->long_running_operation);
    }

    public function clearLongRunningOperation()
    {
        unset($this->long_running_operation);
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment schedule or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLongRunningOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->long_running_operation = $var;

        return $this;
    }

    /**
     * Output only. The status of the experiment promotion process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.AsyncActionStatusEnum.AsyncActionStatus promote_status = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPromoteStatus()
    {
        return $this->promote_status;
    }

    /**
     * Output only. The status of the experiment promotion process.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.AsyncActionStatusEnum.AsyncActionStatus promote_status = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPromoteStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\AsyncActionStatusEnum\AsyncActionStatus::class);
        $this->promote_status = $var;

        return $this;
    }

}

