<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: submission.proto

namespace GPBMetadata;

class Submission
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Money::initOnce();
        \GPBMetadata\Security::initOnce();
        \GPBMetadata\Token::initOnce();
        \GPBMetadata\Transferinstructions::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96040a107375626d697373696f6e2e70726f746f1220696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e7375626d697373696f6e1a0e736563" .
            "75726974792e70726f746f1a0b746f6b656e2e70726f746f1a1a7472616e" .
            "73666572696e737472756374696f6e732e70726f746f22ee010a17537461" .
            "6e64696e674f726465725375626d697373696f6e120a0a02696418012001" .
            "280912190a117374616e64696e675f6f726465725f696418022001280912" .
            "100a08746f6b656e5f696418032001280912150a0d637265617465645f61" .
            "745f6d73180420012803123f0a077061796c6f616418052001280b322e2e" .
            "696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e5374" .
            "616e64696e674f72646572426f647912420a067374617475731806200128" .
            "0e32322e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7375626d" .
            "697373696f6e2e5375626d697373696f6e5374617475732a720a10537562" .
            "6d697373696f6e537461747573120b0a07494e56414c49441000120b0a07" .
            "50454e44494e471001120e0a0a50524f43455353494e471002120b0a0753" .
            "5543434553531003120a0a064641494c45441004120d0a09494e49544941" .
            "5445441005120c0a0843414e43454c45441006423a42105375626d697373" .
            "696f6e50726f746f73aa0225546f6b656e696f2e50726f746f2e436f6d6d" .
            "6f6e2e5375626d697373696f6e50726f746f73620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

