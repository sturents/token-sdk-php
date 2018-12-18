<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetBankInfoResponse</code>
 */
class GetBankInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Linking info
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankInfo info = 1;</code>
     */
    private $info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Bank\BankInfo $info
     *           Linking info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Linking info
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankInfo info = 1;</code>
     * @return \Io\Token\Proto\Common\Bank\BankInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Linking info
     *
     * Generated from protobuf field <code>.io.token.proto.common.bank.BankInfo info = 1;</code>
     * @param \Io\Token\Proto\Common\Bank\BankInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Bank\BankInfo::class);
        $this->info = $var;

        return $this;
    }

}

