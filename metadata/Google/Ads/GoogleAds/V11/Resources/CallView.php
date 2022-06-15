<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/call_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class CallView
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
Cgoogle/ads/googleads/v11/enums/call_tracking_display_location.protogoogle.ads.googleads.v11.enums"x
CallTrackingDisplayLocationEnum"U
CallTrackingDisplayLocation
UNSPECIFIED 
UNKNOWN
AD
LANDING_PAGEB�
"com.google.ads.googleads.v11.enumsB CallTrackingDisplayLocationProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
.google/ads/googleads/v11/enums/call_type.protogoogle.ads.googleads.v11.enums"i
CallTypeEnum"Y
CallType
UNSPECIFIED 
UNKNOWN
MANUALLY_DIALED
HIGH_END_MOBILE_SEARCHB�
"com.google.ads.googleads.v11.enumsBCallTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
=google/ads/googleads/v11/enums/google_voice_call_status.protogoogle.ads.googleads.v11.enums"l
GoogleVoiceCallStatusEnum"O
GoogleVoiceCallStatus
UNSPECIFIED 
UNKNOWN

MISSED
RECEIVEDB�
"com.google.ads.googleads.v11.enumsBGoogleVoiceCallStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�	
2google/ads/googleads/v11/resources/call_view.proto"google.ads.googleads.v11.resources.google/ads/googleads/v11/enums/call_type.proto=google/ads/googleads/v11/enums/google_voice_call_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CallView@
resource_name (	B)�A�A#
!googleads.googleapis.com/CallView 
caller_country_code (	B�A
caller_area_code (	B�A"
call_duration_seconds (B�A!
start_call_date_time (	B�A
end_call_date_time (	B�A�
call_tracking_display_location (2[.google.ads.googleads.v11.enums.CallTrackingDisplayLocationEnum.CallTrackingDisplayLocationB�AH
type (25.google.ads.googleads.v11.enums.CallTypeEnum.CallTypeB�Ai
call_status	 (2O.google.ads.googleads.v11.enums.GoogleVoiceCallStatusEnum.GoogleVoiceCallStatusB�A:Z�AW
!googleads.googleapis.com/CallView2customers/{customer_id}/callViews/{call_detail_id}B�
&com.google.ads.googleads.v11.resourcesBCallViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

