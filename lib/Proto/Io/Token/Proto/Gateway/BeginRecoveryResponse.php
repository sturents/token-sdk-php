<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.BeginRecoveryResponse</code>
 */
class BeginRecoveryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * id to use in later recovery steps
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     */
    private $verification_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $verification_id
     *           id to use in later recovery steps
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * id to use in later recovery steps
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     * @return string
     */
    public function getVerificationId()
    {
        return $this->verification_id;
    }

    /**
     * id to use in later recovery steps
     *
     * Generated from protobuf field <code>string verification_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVerificationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->verification_id = $var;

        return $this;
    }

}

