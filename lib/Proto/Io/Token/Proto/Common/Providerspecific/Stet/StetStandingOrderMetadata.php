<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/stet.proto

namespace Io\Token\Proto\Common\Providerspecific\Stet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.stet.StetStandingOrderMetadata</code>
 */
class StetStandingOrderMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.stet.Beneficiary beneficiary = 1;</code>
     */
    private $beneficiary = null;
    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     */
    private $end_to_end_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Providerspecific\Stet\Beneficiary $beneficiary
     *     @type string $end_to_end_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Stet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.stet.Beneficiary beneficiary = 1;</code>
     * @return \Io\Token\Proto\Common\Providerspecific\Stet\Beneficiary
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.stet.Beneficiary beneficiary = 1;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\Stet\Beneficiary $var
     * @return $this
     */
    public function setBeneficiary($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Providerspecific\Stet\Beneficiary::class);
        $this->beneficiary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     * @return string
     */
    public function getEndToEndId()
    {
        return $this->end_to_end_id;
    }

    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndToEndId($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_to_end_id = $var;

        return $this;
    }

}

