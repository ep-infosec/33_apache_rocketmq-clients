<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.HeartbeatRequest</code>
 */
class HeartbeatRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .apache.rocketmq.v2.Resource group = 1;</code>
     */
    protected $group = null;
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.ClientType client_type = 2;</code>
     */
    protected $client_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Resource $group
     *     @type int $client_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .apache.rocketmq.v2.Resource group = 1;</code>
     * @return \Apache\Rocketmq\V2\Resource|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * Generated from protobuf field <code>optional .apache.rocketmq.v2.Resource group = 1;</code>
     * @param \Apache\Rocketmq\V2\Resource $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Resource::class);
        $this->group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.ClientType client_type = 2;</code>
     * @return int
     */
    public function getClientType()
    {
        return $this->client_type;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.ClientType client_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setClientType($var)
    {
        GPBUtil::checkEnum($var, \Apache\Rocketmq\V2\ClientType::class);
        $this->client_type = $var;

        return $this;
    }

}

