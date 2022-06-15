<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/customer_client_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Services;

class CustomerClientLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v11/enums/manager_link_status.protogoogle.ads.googleads.v11.enums"�
ManagerLinkStatusEnum"s
ManagerLinkStatus
UNSPECIFIED 
UNKNOWN

ACTIVE
INACTIVE
PENDING
REFUSED
CANCELEDB�
"com.google.ads.googleads.v11.enumsBManagerLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
=google/ads/googleads/v11/resources/customer_client_link.proto"google.ads.googleads.v11.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerClientLinkJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerClientLinkG
client_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �!
manager_link_id (B�AH�W
status (2G.google.ads.googleads.v11.enums.ManagerLinkStatusEnum.ManagerLinkStatus
hidden	 (H�:��A�
+googleads.googleapis.com/CustomerClientLinkRcustomers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}B
_client_customerB
_manager_link_idB	
_hiddenB�
&com.google.ads.googleads.v11.resourcesBCustomerClientLinkProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3
�
Dgoogle/ads/googleads/v11/services/customer_client_link_service.proto!google.ads.googleads.v11.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
MutateCustomerClientLinkRequest
customer_id (	B�AV
	operation (2>.google.ads.googleads.v11.services.CustomerClientLinkOperationB�A
validate_only ("�
CustomerClientLinkOperation/
update_mask (2.google.protobuf.FieldMaskH
create (26.google.ads.googleads.v11.resources.CustomerClientLinkH H
update (26.google.ads.googleads.v11.resources.CustomerClientLinkH B
	operation"u
 MutateCustomerClientLinkResponseQ
result (2A.google.ads.googleads.v11.services.MutateCustomerClientLinkResult"i
MutateCustomerClientLinkResultG
resource_name (	B0�A-
+googleads.googleapis.com/CustomerClientLink2�
CustomerClientLinkService�
MutateCustomerClientLinkB.google.ads.googleads.v11.services.MutateCustomerClientLinkRequestC.google.ads.googleads.v11.services.MutateCustomerClientLinkResponse"\\���>"9/v11/customers/{customer_id=*}/customerClientLinks:mutate:*�Acustomer_id,operationE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v11.servicesBCustomerClientLinkServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v11/services;services�GAA�!Google.Ads.GoogleAds.V11.Services�!Google\\Ads\\GoogleAds\\V11\\Services�%Google::Ads::GoogleAds::V11::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

