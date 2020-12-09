<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.RemoveRedirectUrlsRequest</code>
 */
class RemoveRedirectUrlsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string redirect_urls = 1;</code>
     */
    private $redirect_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $redirect_urls
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string redirect_urls = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRedirectUrls()
    {
        return $this->redirect_urls;
    }

    /**
     * Generated from protobuf field <code>repeated string redirect_urls = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRedirectUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->redirect_urls = $arr;

        return $this;
    }

}

