<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.CreateConsentRequest</code>
 */
class CreateConsentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     */
    private $bank_id = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.consent.CreateConsent params = 2;</code>
     */
    private $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_id
     *     @type \Io\Token\Proto\Common\Consent\CreateConsent $params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.consent.CreateConsent params = 2;</code>
     * @return \Io\Token\Proto\Common\Consent\CreateConsent
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.consent.CreateConsent params = 2;</code>
     * @param \Io\Token\Proto\Common\Consent\CreateConsent $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Consent\CreateConsent::class);
        $this->params = $var;

        return $this;
    }

}

