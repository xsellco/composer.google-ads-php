<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/conversion_upload_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class ConversionUploadService
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
            "0aa5180a40676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f636f6e76657273696f6e5f75706c6f61645f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22b6010a1d55706c6f6164436c69636b436f6e76657273696f6e735265717565737412180a0b637573746f6d65725f69641801200128094203e04102124b0a0b636f6e76657273696f6e7318022003280b32312e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e436c69636b436f6e76657273696f6e4203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c79180420012808229d010a1e55706c6f6164436c69636b436f6e76657273696f6e73526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218012001280b32122e676f6f676c652e7270632e53746174757312480a07726573756c747318022003280b32372e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e436c69636b436f6e76657273696f6e526573756c7422b4010a1c55706c6f616443616c6c436f6e76657273696f6e735265717565737412180a0b637573746f6d65725f69641801200128094203e04102124a0a0b636f6e76657273696f6e7318022003280b32302e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e43616c6c436f6e76657273696f6e4203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c79180420012808229b010a1d55706c6f616443616c6c436f6e76657273696f6e73526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218012001280b32122e676f6f676c652e7270632e53746174757312470a07726573756c747318022003280b32362e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e43616c6c436f6e76657273696f6e526573756c7422ae030a0f436c69636b436f6e76657273696f6e122b0a0567636c696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a11636f6e76657273696f6e5f616374696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14636f6e76657273696f6e5f646174655f74696d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512360a10636f6e76657273696f6e5f76616c756518042001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512330a0d63757272656e63795f636f646518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565122e0a086f726465725f696418062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565125c0a1965787465726e616c5f6174747269627574696f6e5f6461746118072001280b32392e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e45787465726e616c4174747269627574696f6e4461746122df020a0e43616c6c436f6e76657273696f6e122f0a0963616c6c65725f696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a1463616c6c5f73746172745f646174655f74696d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a11636f6e76657273696f6e5f616374696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14636f6e76657273696f6e5f646174655f74696d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512360a10636f6e76657273696f6e5f76616c756518052001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512330a0d63757272656e63795f636f646518062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565229e010a1745787465726e616c4174747269627574696f6e4461746112410a1b65787465726e616c5f6174747269627574696f6e5f63726564697418012001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512400a1a65787465726e616c5f6174747269627574696f6e5f6d6f64656c18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522b9010a15436c69636b436f6e76657273696f6e526573756c74122b0a0567636c696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a11636f6e76657273696f6e5f616374696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14636f6e76657273696f6e5f646174655f74696d6518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522f8010a1443616c6c436f6e76657273696f6e526573756c74122f0a0963616c6c65725f696418012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a1463616c6c5f73746172745f646174655f74696d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512370a11636f6e76657273696f6e5f616374696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14636f6e76657273696f6e5f646174655f74696d6518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756532a4040a17436f6e76657273696f6e55706c6f61645365727669636512f6010a1655706c6f6164436c69636b436f6e76657273696f6e73123f2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f6164436c69636b436f6e76657273696f6e73526571756573741a402e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f6164436c69636b436f6e76657273696f6e73526573706f6e7365225982d3e493023922342f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a75706c6f6164436c69636b436f6e76657273696f6e733a012ada4117637573746f6d65725f69642c636f6e76657273696f6e7312f2010a1555706c6f616443616c6c436f6e76657273696f6e73123e2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f616443616c6c436f6e76657273696f6e73526571756573741a3f2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e55706c6f616443616c6c436f6e76657273696f6e73526573706f6e7365225882d3e493023822332f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a75706c6f616443616c6c436f6e76657273696f6e733a012ada4117637573746f6d65725f69642c636f6e76657273696f6e731a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4283020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7365727669636573421c436f6e76657273696f6e55706c6f61645365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

