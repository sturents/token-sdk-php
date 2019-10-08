<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetStandingOrderSubmissionsResponse</code>
 */
class GetStandingOrderSubmissionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.submission.StandingOrderSubmission submissions = 1;</code>
     */
    private $submissions;
    /**
     * Optional offset state for the client to roundtrip.
     *
     * Generated from protobuf field <code>string offset = 2;</code>
     */
    private $offset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Submission\StandingOrderSubmission[]|\Google\Protobuf\Internal\RepeatedField $submissions
     *     @type string $offset
     *           Optional offset state for the client to roundtrip.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.submission.StandingOrderSubmission submissions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.submission.StandingOrderSubmission submissions = 1;</code>
     * @param \Io\Token\Proto\Common\Submission\StandingOrderSubmission[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubmissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Submission\StandingOrderSubmission::class);
        $this->submissions = $arr;

        return $this;
    }

    /**
     * Optional offset state for the client to roundtrip.
     *
     * Generated from protobuf field <code>string offset = 2;</code>
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Optional offset state for the client to roundtrip.
     *
     * Generated from protobuf field <code>string offset = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkString($var, True);
        $this->offset = $var;

        return $this;
    }

}

