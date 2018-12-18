<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: providerspecific.proto

namespace Io\Token\Proto\Common\Providerspecific\Cma9AccountDetails;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.Cma9AccountDetails.Cma9Address</code>
 */
class Cma9Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.Cma9AccountDetails.AddressType address_type = 1;</code>
     */
    private $address_type = 0;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     */
    private $address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $address_type
     *     @type \Io\Token\Proto\Common\Address\Address $address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Providerspecific::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.Cma9AccountDetails.AddressType address_type = 1;</code>
     * @return int
     */
    public function getAddressType()
    {
        return $this->address_type;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.Cma9AccountDetails.AddressType address_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAddressType($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Providerspecific\Cma9AccountDetails_AddressType::class);
        $this->address_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @return \Io\Token\Proto\Common\Address\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.address.Address address = 2;</code>
     * @param \Io\Token\Proto\Common\Address\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Address\Address::class);
        $this->address = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Cma9Address::class, \Io\Token\Proto\Common\Providerspecific\Cma9AccountDetails_Cma9Address::class);

