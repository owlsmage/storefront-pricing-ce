<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.pricingStorefrontApi.proto.GetPricesRequest</code>
 */
class GetPricesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Price book id
     *
     * Generated from protobuf field <code>string price_book_id = 1;</code>
     */
    protected $price_book_id = '';
    /**
     * List of Product IDs or Custom Option IDs
     *
     * Generated from protobuf field <code>repeated string ids = 2;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $price_book_id
     *           Price book id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ids
     *           List of Product IDs or Custom Option IDs
     * }
     */
    public function __construct($data = null)
    {
        \Magento\PricingStorefrontApi\Metadata\Prices::initOnce();
        parent::__construct($data);
    }

    /**
     * Price book id
     *
     * Generated from protobuf field <code>string price_book_id = 1;</code>
     * @return string
     */
    public function getPriceBookId()
    {
        return $this->price_book_id;
    }

    /**
     * Price book id
     *
     * Generated from protobuf field <code>string price_book_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceBookId($var)
    {
        GPBUtil::checkString($var, true);
        $this->price_book_id = $var;

        return $this;
    }

    /**
     * List of Product IDs or Custom Option IDs
     *
     * Generated from protobuf field <code>repeated string ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * List of Product IDs or Custom Option IDs
     *
     * Generated from protobuf field <code>repeated string ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }
}