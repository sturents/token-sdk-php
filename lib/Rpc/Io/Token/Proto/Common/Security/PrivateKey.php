<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: security.proto

namespace Io\Token\Proto\Common\Security;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.security.PrivateKey</code>
 */
class PrivateKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Key ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Base64url encoded private key.
     *
     * Generated from protobuf field <code>string private_key = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $private_key = '';
    /**
     * Key's privilege level.
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Level level = 3;</code>
     */
    private $level = 0;
    /**
     * Algorithm to use with key.
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
     *     @type string $id
     *           Key ID.
     *     @type string $private_key
     *           Base64url encoded private key.
     *     @type int $level
     *           Key's privilege level.
     *     @type int $algorithm
     *           Algorithm to use with key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Security::initOnce();
        parent::__construct($data);
    }

    /**
     * Key ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Key ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Base64url encoded private key.
     *
     * Generated from protobuf field <code>string private_key = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Base64url encoded private key.
     *
     * Generated from protobuf field <code>string private_key = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Key's privilege level.
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Level level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Key's privilege level.
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Level level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Security\Key_Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Algorithm to use with key.
     *
     * Generated from protobuf field <code>.io.token.proto.common.security.Key.Algorithm algorithm = 4;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Algorithm to use with key.
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

