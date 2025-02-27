<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/cma9.proto

namespace Io\Token\Proto\Common\Providerspecific\Cma9;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.cma9.Cma9AccountDetails</code>
 */
class Cma9AccountDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string party_id = 1;</code>
     */
    private $party_id = '';
    /**
     * Generated from protobuf field <code>string party_number = 2;</code>
     */
    private $party_number = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.PartyType party_type = 3;</code>
     */
    private $party_type = 0;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string email_address = 5;</code>
     */
    private $email_address = '';
    /**
     * Generated from protobuf field <code>string phone = 6;</code>
     */
    private $phone = '';
    /**
     * Generated from protobuf field <code>string mobile = 7;</code>
     */
    private $mobile = '';
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.Cma9Address address = 8;</code>
     */
    private $address;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountType account_type = 9;</code>
     */
    private $account_type = 0;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountSubtype account_subtype = 10;</code>
     */
    private $account_subtype = 0;
    /**
     * Generated from protobuf field <code>string description = 11;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $party_id
     *     @type string $party_number
     *     @type int $party_type
     *     @type string $name
     *     @type string $email_address
     *     @type string $phone
     *     @type string $mobile
     *     @type \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails\Cma9Address[]|\Google\Protobuf\Internal\RepeatedField $address
     *     @type int $account_type
     *     @type int $account_subtype
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Cma9::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string party_id = 1;</code>
     * @return string
     */
    public function getPartyId()
    {
        return $this->party_id;
    }

    /**
     * Generated from protobuf field <code>string party_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPartyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->party_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string party_number = 2;</code>
     * @return string
     */
    public function getPartyNumber()
    {
        return $this->party_number;
    }

    /**
     * Generated from protobuf field <code>string party_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPartyNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->party_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.PartyType party_type = 3;</code>
     * @return int
     */
    public function getPartyType()
    {
        return $this->party_type;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.PartyType party_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPartyType($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails_PartyType::class);
        $this->party_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email_address = 5;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Generated from protobuf field <code>string email_address = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 6;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mobile = 7;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.Cma9Address address = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.Cma9Address address = 8;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails\Cma9Address[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddress($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails\Cma9Address::class);
        $this->address = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountType account_type = 9;</code>
     * @return int
     */
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountType account_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAccountType($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails_AccountType::class);
        $this->account_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountSubtype account_subtype = 10;</code>
     * @return int
     */
    public function getAccountSubtype()
    {
        return $this->account_subtype;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.cma9.Cma9AccountDetails.AccountSubtype account_subtype = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAccountSubtype($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Providerspecific\Cma9\Cma9AccountDetails_AccountSubtype::class);
        $this->account_subtype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

