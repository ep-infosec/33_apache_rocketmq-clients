<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.Endpoints</code>
 */
class Endpoints extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.AddressScheme scheme = 1;</code>
     */
    protected $scheme = 0;
    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Address addresses = 2;</code>
     */
    private $addresses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $scheme
     *     @type array<\Apache\Rocketmq\V2\Address>|\Google\Protobuf\Internal\RepeatedField $addresses
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Definition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.AddressScheme scheme = 1;</code>
     * @return int
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.AddressScheme scheme = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setScheme($var)
    {
        GPBUtil::checkEnum($var, \Apache\Rocketmq\V2\AddressScheme::class);
        $this->scheme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Address addresses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Address addresses = 2;</code>
     * @param array<\Apache\Rocketmq\V2\Address>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Apache\Rocketmq\V2\Address::class);
        $this->addresses = $arr;

        return $this;
    }

}

