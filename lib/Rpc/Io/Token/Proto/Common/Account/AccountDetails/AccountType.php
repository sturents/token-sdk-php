<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Io\Token\Proto\Common\Account\AccountDetails;

/**
 * Protobuf type <code>io.token.proto.common.account.AccountDetails.AccountType</code>
 */
class AccountType
{
    /**
     * Generated from protobuf enum <code>INVALID = 0;</code>
     */
    const INVALID = 0;
    /**
     * Generated from protobuf enum <code>OTHER = 1;</code>
     */
    const OTHER = 1;
    /**
     * Generated from protobuf enum <code>CHECKING = 2;</code>
     */
    const CHECKING = 2;
    /**
     * Generated from protobuf enum <code>SAVINGS = 3;</code>
     */
    const SAVINGS = 3;
    /**
     * Generated from protobuf enum <code>LOAN = 4;</code>
     */
    const LOAN = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountType::class, \Io\Token\Proto\Common\Account\AccountDetails_AccountType::class);

