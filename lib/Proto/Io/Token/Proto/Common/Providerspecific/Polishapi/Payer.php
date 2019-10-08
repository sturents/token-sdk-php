<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/polishapi.proto

namespace Io\Token\Proto\Common\Providerspecific\Polishapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.polishapi.Payer</code>
 */
class Payer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string payer_id = 1;</code>
     */
    private $payer_id = '';
    /**
     * Generated from protobuf field <code>string payer_id_type = 2;</code>
     */
    private $payer_id_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payer_id
     *     @type string $payer_id_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Polishapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string payer_id = 1;</code>
     * @return string
     */
    public function getPayerId()
    {
        return $this->payer_id;
    }

    /**
     * Generated from protobuf field <code>string payer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->payer_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payer_id_type = 2;</code>
     * @return string
     */
    public function getPayerIdType()
    {
        return $this->payer_id_type;
    }

    /**
     * Generated from protobuf field <code>string payer_id_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayerIdType($var)
    {
        GPBUtil::checkString($var, True);
        $this->payer_id_type = $var;

        return $this;
    }

}

