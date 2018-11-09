<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: blob.proto

namespace Io\Token\Proto\Common\Blob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a blob of data.
 *
 * Generated from protobuf message <code>io.token.proto.common.blob.Blob</code>
 */
class Blob extends \Google\Protobuf\Internal\Message
{
    /**
     * Hash of the payload, route, shard
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.blob.Blob.Payload payload = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Hash of the payload, route, shard
     *     @type \Io\Token\Proto\Common\Blob\Blob\Payload $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Blob::initOnce();
        parent::__construct($data);
    }

    /**
     * Hash of the payload, route, shard
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Hash of the payload, route, shard
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
     * Generated from protobuf field <code>.io.token.proto.common.blob.Blob.Payload payload = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return \Io\Token\Proto\Common\Blob\Blob\Payload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.blob.Blob.Payload payload = 2 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param \Io\Token\Proto\Common\Blob\Blob\Payload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Blob\Blob_Payload::class);
        $this->payload = $var;

        return $this;
    }

}

