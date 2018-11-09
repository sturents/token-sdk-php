<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.CreateTransferResponse</code>
 */
class CreateTransferResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Resulting transfer spec
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer transfer = 1;</code>
     */
    private $transfer = null;
    /**
     * Optional: used when transfer status is PENDING_EXTERNAL_AUTHORIZATION
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.ExternalAuthorizationDetails authorization_details = 2;</code>
     */
    private $authorization_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Transfer\Transfer $transfer
     *           Resulting transfer spec
     *     @type \Io\Token\Proto\Common\Token\ExternalAuthorizationDetails $authorization_details
     *           Optional: used when transfer status is PENDING_EXTERNAL_AUTHORIZATION
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Resulting transfer spec
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer transfer = 1;</code>
     * @return \Io\Token\Proto\Common\Transfer\Transfer
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * Resulting transfer spec
     *
     * Generated from protobuf field <code>.io.token.proto.common.transfer.Transfer transfer = 1;</code>
     * @param \Io\Token\Proto\Common\Transfer\Transfer $var
     * @return $this
     */
    public function setTransfer($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Transfer\Transfer::class);
        $this->transfer = $var;

        return $this;
    }

    /**
     * Optional: used when transfer status is PENDING_EXTERNAL_AUTHORIZATION
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.ExternalAuthorizationDetails authorization_details = 2;</code>
     * @return \Io\Token\Proto\Common\Token\ExternalAuthorizationDetails
     */
    public function getAuthorizationDetails()
    {
        return $this->authorization_details;
    }

    /**
     * Optional: used when transfer status is PENDING_EXTERNAL_AUTHORIZATION
     *
     * Generated from protobuf field <code>.io.token.proto.common.token.ExternalAuthorizationDetails authorization_details = 2;</code>
     * @param \Io\Token\Proto\Common\Token\ExternalAuthorizationDetails $var
     * @return $this
     */
    public function setAuthorizationDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\ExternalAuthorizationDetails::class);
        $this->authorization_details = $var;

        return $this;
    }

}

