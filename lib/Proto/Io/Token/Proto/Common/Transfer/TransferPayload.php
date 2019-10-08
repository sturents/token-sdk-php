<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transfer.proto

namespace Io\Token\Proto\Common\Transfer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transfer payload that is being signed by the redeemer and the bank.
 *
 * Generated from protobuf message <code>io.token.proto.common.transfer.TransferPayload</code>
 */
class TransferPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Client assigned unique request id.
     *
     * Generated from protobuf field <code>string ref_id = 1;</code>
     */
    private $ref_id = '';
    /**
     * Token id.
     *
     * Generated from protobuf field <code>string token_id = 2;</code>
     */
    private $token_id = '';
    /**
     * Amount and currency.
     *
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 3;</code>
     */
    private $amount = null;
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 5 [deprecated = true];</code>
     */
    private $destinations;
    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    private $description = '';
    /**
     * Transfer destinations, sorted in priority order.
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferDestination transfer_destinations = 7;</code>
     */
    private $transfer_destinations;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions.Metadata metadata = 8;</code>
     */
    private $metadata = null;
    /**
     * Generated from protobuf field <code>bool confirm_funds = 9;</code>
     */
    private $confirm_funds = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ref_id
     *           Client assigned unique request id.
     *     @type string $token_id
     *           Token id.
     *     @type \Io\Token\Proto\Common\Money\Money $amount
     *           Amount and currency.
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $destinations
     *     @type string $description
     *           Optional
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferDestination[]|\Google\Protobuf\Internal\RepeatedField $transfer_destinations
     *           Transfer destinations, sorted in priority order.
     *     @type \Io\Token\Proto\Common\Transferinstructions\TransferInstructions\Metadata $metadata
     *     @type bool $confirm_funds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Client assigned unique request id.
     *
     * Generated from protobuf field <code>string ref_id = 1;</code>
     * @return string
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * Client assigned unique request id.
     *
     * Generated from protobuf field <code>string ref_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRefId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ref_id = $var;

        return $this;
    }

    /**
     * Token id.
     *
     * Generated from protobuf field <code>string token_id = 2;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Token id.
     *
     * Generated from protobuf field <code>string token_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * Amount and currency.
     *
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 3;</code>
     * @return \Io\Token\Proto\Common\Money\Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount and currency.
     *
     * Generated from protobuf field <code>.io.token.proto.common.money.Money amount = 3;</code>
     * @param \Io\Token\Proto\Common\Money\Money $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Money\Money::class);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 5 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferEndpoint destinations = 5 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Transferinstructions\TransferEndpoint::class);
        $this->destinations = $arr;

        return $this;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Transfer destinations, sorted in priority order.
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferDestination transfer_destinations = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransferDestinations()
    {
        return $this->transfer_destinations;
    }

    /**
     * Transfer destinations, sorted in priority order.
     *
     * Generated from protobuf field <code>repeated .io.token.proto.common.transferinstructions.TransferDestination transfer_destinations = 7;</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferDestination[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransferDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Transferinstructions\TransferDestination::class);
        $this->transfer_destinations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions.Metadata metadata = 8;</code>
     * @return \Io\Token\Proto\Common\Transferinstructions\TransferInstructions\Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transferinstructions.TransferInstructions.Metadata metadata = 8;</code>
     * @param \Io\Token\Proto\Common\Transferinstructions\TransferInstructions\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Transferinstructions\TransferInstructions_Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool confirm_funds = 9;</code>
     * @return bool
     */
    public function getConfirmFunds()
    {
        return $this->confirm_funds;
    }

    /**
     * Generated from protobuf field <code>bool confirm_funds = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirmFunds($var)
    {
        GPBUtil::checkBool($var);
        $this->confirm_funds = $var;

        return $this;
    }

}

