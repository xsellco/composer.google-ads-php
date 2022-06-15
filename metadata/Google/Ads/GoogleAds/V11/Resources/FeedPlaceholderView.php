<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/feed_placeholder_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class FeedPlaceholderView
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
�
5google/ads/googleads/v11/enums/placeholder_type.protogoogle.ads.googleads.v11.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
"com.google.ads.googleads.v11.enumsBPlaceholderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
>google/ads/googleads/v11/resources/feed_placeholder_view.proto"google.ads.googleads.v11.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
FeedPlaceholderViewK
resource_name (	B4�A�A.
,googleads.googleapis.com/FeedPlaceholderViewb
placeholder_type (2C.google.ads.googleads.v11.enums.PlaceholderTypeEnum.PlaceholderTypeB�A:r�Ao
,googleads.googleapis.com/FeedPlaceholderView?customers/{customer_id}/feedPlaceholderViews/{placeholder_type}B�
&com.google.ads.googleads.v11.resourcesBFeedPlaceholderViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

