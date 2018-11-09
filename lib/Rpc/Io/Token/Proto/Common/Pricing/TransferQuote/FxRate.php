<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: pricing.proto

namespace Io\Token\Proto\Common\Pricing\TransferQuote;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.pricing.TransferQuote.FxRate</code>
 */
class FxRate extends \Google\Protobuf\Internal\Message
{
    /**
     * the base amount: 'EUR' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string base_currency = 2;</code>
     */
    private $base_currency = '';
    /**
     * the quote amount: 'USD' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string quote_currency = 3;</code>
     */
    private $quote_currency = '';
    /**
     * the fx rate double amount in the string format.
     *
     * Generated from protobuf field <code>string rate = 4;</code>
     */
    private $rate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_currency
     *           the base amount: 'EUR' in 'EUR/USD'
     *     @type string $quote_currency
     *           the quote amount: 'USD' in 'EUR/USD'
     *     @type string $rate
     *           the fx rate double amount in the string format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Pricing::initOnce();
        parent::__construct($data);
    }

    /**
     * the base amount: 'EUR' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string base_currency = 2;</code>
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->base_currency;
    }

    /**
     * the base amount: 'EUR' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string base_currency = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_currency = $var;

        return $this;
    }

    /**
     * the quote amount: 'USD' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string quote_currency = 3;</code>
     * @return string
     */
    public function getQuoteCurrency()
    {
        return $this->quote_currency;
    }

    /**
     * the quote amount: 'USD' in 'EUR/USD'
     *
     * Generated from protobuf field <code>string quote_currency = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQuoteCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote_currency = $var;

        return $this;
    }

    /**
     * the fx rate double amount in the string format.
     *
     * Generated from protobuf field <code>string rate = 4;</code>
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * the fx rate double amount in the string format.
     *
     * Generated from protobuf field <code>string rate = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->rate = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FxRate::class, \Io\Token\Proto\Common\Pricing\TransferQuote_FxRate::class);

