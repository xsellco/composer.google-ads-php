<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/ad_group_ad_asset_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class AdGroupAdAssetView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v11/enums/asset_performance_label.protogoogle.ads.googleads.v11.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
"com.google.ads.googleads.v11.enumsBAssetPerformanceLabelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Xgoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v11.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
"com.google.ads.googleads.v11.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
9google/ads/googleads/v11/enums/policy_review_status.protogoogle.ads.googleads.v11.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
"com.google.ads.googleads.v11.enumsBPolicyReviewStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
<google/ads/googleads/v11/enums/policy_topic_entry_type.protogoogle.ads.googleads.v11.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v11.enumsBPolicyTopicEntryTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Ygoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v11.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
"com.google.ads.googleads.v11.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
agoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v11.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
"com.google.ads.googleads.v11.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
,google/ads/googleads/v11/common/policy.protogoogle.ads.googleads.v11.commonXgoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_mismatch_url_type.protoYgoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_not_working_device.protoagoogle/ads/googleads/v11/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	Y
exempt_policy_violation_keys (23.google.ads.googleads.v11.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �[
type (2M.google.ads.googleads.v11.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeG
	evidences (24.google.ads.googleads.v11.common.PolicyTopicEvidenceK
constraints (26.google.ads.googleads.v11.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceX
website_list (2@.google.ads.googleads.v11.common.PolicyTopicEvidence.WebsiteListH R
	text_list (2=.google.ads.googleads.v11.common.PolicyTopicEvidence.TextListH 
language_code	 (	H i
destination_text_list (2H.google.ads.googleads.v11.common.PolicyTopicEvidence.DestinationTextListH h
destination_mismatch (2H.google.ads.googleads.v11.common.PolicyTopicEvidence.DestinationMismatchH m
destination_not_working (2J.google.ads.googleads.v11.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2.google.ads.googleads.v11.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v11.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v11.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstrainto
country_constraint_list (2L.google.ads.googleads.v11.common.PolicyTopicConstraint.CountryConstraintListH h
reseller_constraint (2I.google.ads.googleads.v11.common.PolicyTopicConstraint.ResellerConstraintH {
#certificate_missing_in_country_list (2L.google.ads.googleads.v11.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2L.google.ads.googleads.v11.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �[
	countries (2H.google.ads.googleads.v11.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
#com.google.ads.googleads.v11.commonBPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/common;common�GAA�Google.Ads.GoogleAds.V11.Common�Google\\Ads\\GoogleAds\\V11\\Common�#Google::Ads::GoogleAds::V11::Commonbproto3
�
;google/ads/googleads/v11/enums/policy_approval_status.protogoogle.ads.googleads.v11.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v11.enumsBPolicyApprovalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
5google/ads/googleads/v11/enums/asset_field_type.protogoogle.ads.googleads.v11.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTIONB�
"com.google.ads.googleads.v11.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
?google/ads/googleads/v11/resources/ad_group_ad_asset_view.proto"google.ads.googleads.v11.resources5google/ads/googleads/v11/enums/asset_field_type.proto<google/ads/googleads/v11/enums/asset_performance_label.proto;google/ads/googleads/v11/enums/policy_approval_status.proto9google/ads/googleads/v11/enums/policy_review_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupAdAssetViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AdGroupAdAssetViewD
ad_group_ad	 (	B*�A�A$
"googleads.googleapis.com/AdGroupAdH �:
asset
 (	B&�A�A 
googleads.googleapis.com/AssetH�Z

field_type (2A.google.ads.googleads.v11.enums.AssetFieldTypeEnum.AssetFieldTypeB�A
enabled (B�AH�\\
policy_summary (2?.google.ads.googleads.v11.resources.AdGroupAdAssetPolicySummaryB�Ao
performance_label (2O.google.ads.googleads.v11.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelB�A:��A�
+googleads.googleapis.com/AdGroupAdAssetViewYcustomers/{customer_id}/adGroupAdAssetViews/{ad_group_id}~{ad_id}~{asset_id}~{field_type}B
_ad_group_adB
_assetB

_enabled"�
AdGroupAdAssetPolicySummaryT
policy_topic_entries (21.google.ads.googleads.v11.common.PolicyTopicEntryB�Ae
review_status (2I.google.ads.googleads.v11.enums.PolicyReviewStatusEnum.PolicyReviewStatusB�Ak
approval_status (2M.google.ads.googleads.v11.enums.PolicyApprovalStatusEnum.PolicyApprovalStatusB�AB�
&com.google.ads.googleads.v11.resourcesBAdGroupAdAssetViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

