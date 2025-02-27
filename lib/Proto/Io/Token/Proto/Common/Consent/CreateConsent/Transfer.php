<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: consent.proto

namespace Io\Token\Proto\Common\Consent\CreateConsent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.consent.CreateConsent.Transfer</code>
 */
class Transfer extends \Google\Protobuf\Internal\Message
{
    /**
     * bank account identifier (opaque to Token)
     *
     * Generated from protobuf field <code>string account_identifier = 1;</code>
     */
    private $account_identifier = '';
    /**
     * Generated from protobuf field <code>int64 expires_at_ms = 2;</code>
     */
    private $expires_at_ms = 0;
    /**
     * Generated from protobuf field <code>int64 effective_at_ms = 3;</code>
     */
    private $effective_at_ms = 0;
    /**
     * Generated from protobuf field <code>int64 endorse_until_ms = 4;</code>
     */
    private $endorse_until_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_identifier
     *           bank account identifier (opaque to Token)
     *     @type int|string $expires_at_ms
     *     @type int|string $effective_at_ms
     *     @type int|string $endorse_until_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Consent::initOnce();
        parent::__construct($data);
    }

    /**
     * bank account identifier (opaque to Token)
     *
     * Generated from protobuf field <code>string account_identifier = 1;</code>
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->account_identifier;
    }

    /**
     * bank account identifier (opaque to Token)
     *
     * Generated from protobuf field <code>string account_identifier = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_identifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expires_at_ms = 2;</code>
     * @return int|string
     */
    public function getExpiresAtMs()
    {
        return $this->expires_at_ms;
    }

    /**
     * Generated from protobuf field <code>int64 expires_at_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiresAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expires_at_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 effective_at_ms = 3;</code>
     * @return int|string
     */
    public function getEffectiveAtMs()
    {
        return $this->effective_at_ms;
    }

    /**
     * Generated from protobuf field <code>int64 effective_at_ms = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEffectiveAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->effective_at_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 endorse_until_ms = 4;</code>
     * @return int|string
     */
    public function getEndorseUntilMs()
    {
        return $this->endorse_until_ms;
    }

    /**
     * Generated from protobuf field <code>int64 endorse_until_ms = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndorseUntilMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->endorse_until_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Transfer::class, \Io\Token\Proto\Common\Consent\CreateConsent_Transfer::class);

