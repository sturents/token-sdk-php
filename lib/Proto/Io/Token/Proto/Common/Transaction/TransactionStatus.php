<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Io\Token\Proto\Common\Transaction;

/**
 * Protobuf type <code>io.token.proto.common.transaction.TransactionStatus</code>
 */
class TransactionStatus
{
    /**
     * invalid status
     *
     * Generated from protobuf enum <code>INVALID_STATUS = 0;</code>
     */
    const INVALID_STATUS = 0;
    /**
     * the transaction is pending submission
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * the transaction is being processed
     *
     * Generated from protobuf enum <code>PROCESSING = 7;</code>
     */
    const PROCESSING = 7;
    /**
     * the transaction has been successful
     *
     * Generated from protobuf enum <code>SUCCESS = 2;</code>
     */
    const SUCCESS = 2;
    /**
     * the transaction requires authorization by the user to complete
     *
     * Generated from protobuf enum <code>PENDING_EXTERNAL_AUTHORIZATION = 15;</code>
     */
    const PENDING_EXTERNAL_AUTHORIZATION = 15;
    /**
     * the transaction has been canceled, rolled back
     *
     * Generated from protobuf enum <code>FAILURE_CANCELED = 10;</code>
     */
    const FAILURE_CANCELED = 10;
    /**
     * the transaction has failed due to insufficient funds
     *
     * Generated from protobuf enum <code>FAILURE_INSUFFICIENT_FUNDS = 3;</code>
     */
    const FAILURE_INSUFFICIENT_FUNDS = 3;
    /**
     * the transaction has failed due to currency mismatch
     *
     * Generated from protobuf enum <code>FAILURE_INVALID_CURRENCY = 4;</code>
     */
    const FAILURE_INVALID_CURRENCY = 4;
    /**
     * the transaction has failed due to access violation
     *
     * Generated from protobuf enum <code>FAILURE_PERMISSION_DENIED = 6;</code>
     */
    const FAILURE_PERMISSION_DENIED = 6;
    /**
     * the transaction has failed because the quote has expired
     *
     * Generated from protobuf enum <code>FAILURE_QUOTE_EXPIRED = 11;</code>
     */
    const FAILURE_QUOTE_EXPIRED = 11;
    /**
     * the transaction has failed due to invalid amount
     *
     * Generated from protobuf enum <code>FAILURE_INVALID_AMOUNT = 12;</code>
     */
    const FAILURE_INVALID_AMOUNT = 12;
    /**
     * the transaction has failed due to invalid quote (wrong fx rate)
     *
     * Generated from protobuf enum <code>FAILURE_INVALID_QUOTE = 13;</code>
     */
    const FAILURE_INVALID_QUOTE = 13;
    /**
     * the transaction has failed to complete within allotted time
     *
     * Generated from protobuf enum <code>FAILURE_EXPIRED = 14;</code>
     */
    const FAILURE_EXPIRED = 14;
    /**
     * the transaction has failed, because bank has declined
     *
     * Generated from protobuf enum <code>FAILURE_DECLINED = 18;</code>
     */
    const FAILURE_DECLINED = 18;
    /**
     * the transaction has failed due to other reasons
     *
     * Generated from protobuf enum <code>FAILURE_GENERIC = 5;</code>
     */
    const FAILURE_GENERIC = 5;
    /**
     * the transaction has been sent but has not been acknowledged by the bank
     *
     * Generated from protobuf enum <code>SENT = 16;</code>
     */
    const SENT = 16;
    /**
     * the transaction has been initiated but the result is unknown, this may be the final status and may not get updated later
     *
     * Generated from protobuf enum <code>INITIATED = 17;</code>
     */
    const INITIATED = 17;
    /**
     * the transaction status is not available
     *
     * Generated from protobuf enum <code>STATUS_NOT_AVAILABLE = 19;</code>
     */
    const STATUS_NOT_AVAILABLE = 19;
}

