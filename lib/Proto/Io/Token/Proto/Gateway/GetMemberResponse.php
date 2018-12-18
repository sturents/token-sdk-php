<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetMemberResponse</code>
 */
class GetMemberResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * member structure
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Member member = 1;</code>
     */
    private $member = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Member\Member $member
     *           member structure
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * member structure
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Member member = 1;</code>
     * @return \Io\Token\Proto\Common\Member\Member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * member structure
     *
     * Generated from protobuf field <code>.io.token.proto.common.member.Member member = 1;</code>
     * @param \Io\Token\Proto\Common\Member\Member $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Member\Member::class);
        $this->member = $var;

        return $this;
    }

}

