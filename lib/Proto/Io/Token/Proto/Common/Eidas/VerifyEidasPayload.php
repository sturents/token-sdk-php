<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eidas.proto

namespace Io\Token\Proto\Common\Eidas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.eidas.VerifyEidasPayload</code>
 */
class VerifyEidasPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * member ID of the TPP
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     */
    private $member_id = '';
    /**
     * eIDAS alias to be verified
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.Alias alias = 2;</code>
     */
    private $alias = null;
    /**
     * serialized eIDAS certificate
     *
     * Generated from protobuf field <code>string certificate = 3;</code>
     */
    private $certificate = '';
    /**
     * signing algorithm of the eIDAS certificate
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Algorithm algorithm = 4;</code>
     */
    private $algorithm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $member_id
     *           member ID of the TPP
     *     @type \Io\Token\Proto\Common\Alias\Alias $alias
     *           eIDAS alias to be verified
     *     @type string $certificate
     *           serialized eIDAS certificate
     *     @type int $algorithm
     *           signing algorithm of the eIDAS certificate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eidas::initOnce();
        parent::__construct($data);
    }

    /**
     * member ID of the TPP
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * member ID of the TPP
     *
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * eIDAS alias to be verified
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.Alias alias = 2;</code>
     * @return \Io\Token\Proto\Common\Alias\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * eIDAS alias to be verified
     *
     * Generated from protobuf field <code>.io.token.proto.common.alias.Alias alias = 2;</code>
     * @param \Io\Token\Proto\Common\Alias\Alias $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Alias\Alias::class);
        $this->alias = $var;

        return $this;
    }

    /**
     * serialized eIDAS certificate
     *
     * Generated from protobuf field <code>string certificate = 3;</code>
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * serialized eIDAS certificate
     *
     * Generated from protobuf field <code>string certificate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->certificate = $var;

        return $this;
    }

    /**
     * signing algorithm of the eIDAS certificate
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Algorithm algorithm = 4;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * signing algorithm of the eIDAS certificate
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Algorithm algorithm = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Security\Key_Algorithm::class);
        $this->algorithm = $var;

        return $this;
    }

}

