<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: banklink.proto

namespace Io\Token\Proto\Banklink;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.banklink.OauthBankAuthorization</code>
 */
class OauthBankAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     */
    private $bank_id = '';
    /**
     * OAuth access token obtained from a bank
     *
     * Generated from protobuf field <code>string access_token = 2;</code>
     */
    private $access_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_id
     *           Bank ID, e.g., "iron"
     *     @type string $access_token
     *           OAuth access token obtained from a bank
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Banklink::initOnce();
        parent::__construct($data);
    }

    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Bank ID, e.g., "iron"
     *
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_id = $var;

        return $this;
    }

    /**
     * OAuth access token obtained from a bank
     *
     * Generated from protobuf field <code>string access_token = 2;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * OAuth access token obtained from a bank
     *
     * Generated from protobuf field <code>string access_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_token = $var;

        return $this;
    }

}

