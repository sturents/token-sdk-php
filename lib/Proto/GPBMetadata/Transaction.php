<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace GPBMetadata;

class Transaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Extensions\Field::initOnce();
        \GPBMetadata\Member::initOnce();
        \GPBMetadata\Money::initOnce();
        \GPBMetadata\Providerspecific::initOnce();
        \GPBMetadata\Security::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac30f0a117472616e73616374696f6e2e70726f746f1221696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e7472616e73616374696f6e1a0c6d" .
            "656d6265722e70726f746f1a0b6d6f6e65792e70726f746f1a1670726f76" .
            "6964657273706563696669632e70726f746f1a0e73656375726974792e70" .
            "726f746f22a5040a0b5472616e73616374696f6e120a0a02696418012001" .
            "280912400a047479706518022001280e32322e696f2e746f6b656e2e7072" .
            "6f746f2e636f6d6d6f6e2e7472616e73616374696f6e2e5472616e736163" .
            "74696f6e5479706512440a0673746174757318032001280e32342e696f2e" .
            "746f6b656e2e70726f746f2e636f6d6d6f6e2e7472616e73616374696f6e" .
            "2e5472616e73616374696f6e53746174757312320a06616d6f756e741804" .
            "2001280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d" .
            "6f6e65792e4d6f6e657912190a0b6465736372697074696f6e1805200128" .
            "09420480b5180112100a08746f6b656e5f696418062001280912190a1174" .
            "6f6b656e5f7472616e736665725f696418072001280912150a0d63726561" .
            "7465645f61745f6d7318082001280312540a086d65746164617461180920" .
            "03280b323c2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7472" .
            "616e73616374696f6e2e5472616e73616374696f6e2e4d65746164617461" .
            "456e747279420480b5180112680a1c70726f76696465725f7472616e7361" .
            "6374696f6e5f64657461696c73180a2001280b32422e696f2e746f6b656e" .
            "2e70726f746f2e636f6d6d6f6e2e70726f76696465727370656369666963" .
            "2e50726f76696465725472616e73616374696f6e44657461696c731a2f0a" .
            "0d4d65746164617461456e747279120b0a036b6579180120012809120d0a" .
            "0576616c75651802200128093a02380122da020a0742616c616e63651212" .
            "0a0a6163636f756e745f696418012001280912330a0763757272656e7418" .
            "022001280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e" .
            "6d6f6e65792e4d6f6e657912350a09617661696c61626c6518032001280b" .
            "32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d6f6e6579" .
            "2e4d6f6e657912150a0d757064617465645f61745f6d7318042001280312" .
            "4f0a0e6f746865725f62616c616e63657318052003280b32372e696f2e74" .
            "6f6b656e2e70726f746f2e636f6d6d6f6e2e7472616e73616374696f6e2e" .
            "42616c616e63652e547970656442616c616e63651a670a0c547970656442" .
            "616c616e6365120c0a047479706518012001280912320a06616d6f756e74" .
            "18022001280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e" .
            "2e6d6f6e65792e4d6f6e657912150a0d757064617465645f61745f6d7318" .
            "032001280322e6020a0d5374616e64696e674f72646572120a0a02696418" .
            "012001280912470a0673746174757318022001280e32372e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e7472616e73616374696f6e2e5374" .
            "616e64696e674f726465722e53746174757312100a08746f6b656e5f6964" .
            "180320012809121b0a13746f6b656e5f7375626d697373696f6e5f696418" .
            "042001280912150a0d637265617465645f61745f6d73180520012803126d" .
            "0a1f70726f76696465725f7374616e64696e675f6f726465725f64657461" .
            "696c7318062001280b32442e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e70726f766964657273706563696669632e50726f766964657253" .
            "74616e64696e674f7264657244657461696c73224b0a0653746174757312" .
            "0b0a07494e56414c49441000120a0a064143544956451001120c0a08494e" .
            "4143544956451002120e0a0a50524f43455353494e471003120a0a064641" .
            "494c454410042a3a0a0f5472616e73616374696f6e5479706512100a0c49" .
            "4e56414c49445f54595045100012090a0544454249541001120a0a064352" .
            "4544495410022afd020a115472616e73616374696f6e5374617475731212" .
            "0a0e494e56414c49445f5354415455531000120b0a0750454e44494e4710" .
            "01120e0a0a50524f43455353494e471007120b0a07535543434553531002" .
            "12220a1e50454e44494e475f45585445524e414c5f415554484f52495a41" .
            "54494f4e100f12140a104641494c5552455f43414e43454c4544100a121e" .
            "0a1a4641494c5552455f494e53554646494349454e545f46554e44531003" .
            "121c0a184641494c5552455f494e56414c49445f43555252454e43591004" .
            "121d0a194641494c5552455f5045524d495353494f4e5f44454e49454410" .
            "0612190a154641494c5552455f51554f54455f45585049524544100b121a" .
            "0a164641494c5552455f494e56414c49445f414d4f554e54100c12190a15" .
            "4641494c5552455f494e56414c49445f51554f5445100d12130a0f464149" .
            "4c5552455f45585049524544100e12130a0f4641494c5552455f47454e45" .
            "524943100512080a0453454e541010120d0a09494e495449415445441011" .
            "2a580a0d5265717565737453746174757312130a0f494e56414c49445f52" .
            "455155455354100012160a125355434345535346554c5f52455155455354" .
            "1001121a0a164d4f52455f5349474e4154555245535f4e45454445441002" .
            "423c42115472616e73616374696f6e50726f746f73aa0226546f6b656e69" .
            "6f2e50726f746f2e436f6d6d6f6e2e5472616e73616374696f6e50726f74" .
            "6f73620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

