<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/conversion_adjustment_upload_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class ConversionAdjustmentUploadService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad7030a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f636f6e76657273696f6e5f61646a7573746d656e745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7322790a1c436f6e76657273696f6e41646a7573746d656e7454797065456e756d22590a18436f6e76657273696f6e41646a7573746d656e7454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a52455452414354494f4e1002120f0a0b524553544154454d454e54100342f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421d436f6e76657273696f6e41646a7573746d656e745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af7120a4b676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f636f6e76657273696f6e5f61646a7573746d656e745f75706c6f61645f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22cb010a2255706c6f6164436f6e76657273696f6e41646a7573746d656e74735265717565737412180a0b637573746f6d65725f69641801200128094203e04102125b0a16636f6e76657273696f6e5f61646a7573746d656e747318022003280b32362e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e436f6e76657273696f6e41646a7573746d656e744203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c7918042001280822a7010a2355706c6f6164436f6e76657273696f6e41646a7573746d656e7473526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218012001280b32122e676f6f676c652e7270632e537461747573124d0a07726573756c747318022003280b323c2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e436f6e76657273696f6e41646a7573746d656e74526573756c7422e9030a14436f6e76657273696f6e41646a7573746d656e7412370a11636f6e76657273696f6e5f616374696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a1461646a7573746d656e745f646174655f74696d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565126d0a0f61646a7573746d656e745f7479706518052001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e41646a7573746d656e7454797065456e756d2e436f6e76657273696f6e41646a7573746d656e7454797065124d0a11726573746174656d656e745f76616c756518062001280b32322e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e526573746174656d656e7456616c756512530a1467636c69645f646174655f74696d655f7061697218012001280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e47636c69644461746554696d6550616972480012300a086f726465725f696418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565480042170a15636f6e76657273696f6e5f6964656e746966696572227d0a10526573746174656d656e7456616c756512340a0e61646a75737465645f76616c756518012001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512330a0d63757272656e63795f636f646518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565227c0a1147636c69644461746554696d6550616972122b0a0567636c696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14636f6e76657273696f6e5f646174655f74696d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522a0030a1a436f6e76657273696f6e41646a7573746d656e74526573756c7412370a11636f6e76657273696f6e5f616374696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a1461646a7573746d656e745f646174655f74696d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565126d0a0f61646a7573746d656e745f7479706518052001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e436f6e76657273696f6e41646a7573746d656e7454797065456e756d2e436f6e76657273696f6e41646a7573746d656e745479706512530a1467636c69645f646174655f74696d655f7061697218012001280b32332e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e47636c69644461746554696d6550616972480012300a086f726465725f696418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565480042170a15636f6e76657273696f6e5f6964656e74696669657232d8020a21436f6e76657273696f6e41646a7573746d656e7455706c6f6164536572766963651295020a1b55706c6f6164436f6e76657273696f6e41646a7573746d656e747312442e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f6164436f6e76657273696f6e41646a7573746d656e7473526571756573741a452e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f6164436f6e76657273696f6e41646a7573746d656e7473526573706f6e7365226982d3e493023e22392f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a75706c6f6164436f6e76657273696f6e41646a7573746d656e74733a012ada4122637573746f6d65725f69642c636f6e76657273696f6e5f61646a7573746d656e74731a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d428d020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365734226436f6e76657273696f6e41646a7573746d656e7455706c6f61645365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

