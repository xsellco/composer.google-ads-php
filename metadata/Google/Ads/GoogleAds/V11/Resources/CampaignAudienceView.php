<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/campaign_audience_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class CampaignAudienceView
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
�
?google/ads/googleads/v11/resources/campaign_audience_view.proto"google.ads.googleads.v11.resourcesgoogle/api/resource.proto"�
CampaignAudienceViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/CampaignAudienceView:~�A{
-googleads.googleapis.com/CampaignAudienceViewJcustomers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}B�
&com.google.ads.googleads.v11.resourcesBCampaignAudienceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

