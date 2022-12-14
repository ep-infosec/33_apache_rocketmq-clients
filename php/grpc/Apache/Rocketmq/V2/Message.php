<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 1;</code>
     */
    protected $topic = null;
    /**
     * User defined key-value pairs.
     * If user_properties contain the reserved keys by RocketMQ,
     * the send message request will be aborted with status `INVALID_ARGUMENT`.
     * See below links for the reserved keys
     * https://github.com/apache/rocketmq/blob/master/common/src/main/java/org/apache/rocketmq/common/message/MessageConst.java#L58
     *
     * Generated from protobuf field <code>map<string, string> user_properties = 2;</code>
     */
    private $user_properties;
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.SystemProperties system_properties = 3;</code>
     */
    protected $system_properties = null;
    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     */
    protected $body = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Resource $topic
     *     @type array|\Google\Protobuf\Internal\MapField $user_properties
     *           User defined key-value pairs.
     *           If user_properties contain the reserved keys by RocketMQ,
     *           the send message request will be aborted with status `INVALID_ARGUMENT`.
     *           See below links for the reserved keys
     *           https://github.com/apache/rocketmq/blob/master/common/src/main/java/org/apache/rocketmq/common/message/MessageConst.java#L58
     *     @type \Apache\Rocketmq\V2\SystemProperties $system_properties
     *     @type string $body
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Definition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 1;</code>
     * @return \Apache\Rocketmq\V2\Resource|null
     */
    public function getTopic()
    {
        return $this->topic;
    }

    public function hasTopic()
    {
        return isset($this->topic);
    }

    public function clearTopic()
    {
        unset($this->topic);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 1;</code>
     * @param \Apache\Rocketmq\V2\Resource $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Resource::class);
        $this->topic = $var;

        return $this;
    }

    /**
     * User defined key-value pairs.
     * If user_properties contain the reserved keys by RocketMQ,
     * the send message request will be aborted with status `INVALID_ARGUMENT`.
     * See below links for the reserved keys
     * https://github.com/apache/rocketmq/blob/master/common/src/main/java/org/apache/rocketmq/common/message/MessageConst.java#L58
     *
     * Generated from protobuf field <code>map<string, string> user_properties = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserProperties()
    {
        return $this->user_properties;
    }

    /**
     * User defined key-value pairs.
     * If user_properties contain the reserved keys by RocketMQ,
     * the send message request will be aborted with status `INVALID_ARGUMENT`.
     * See below links for the reserved keys
     * https://github.com/apache/rocketmq/blob/master/common/src/main/java/org/apache/rocketmq/common/message/MessageConst.java#L58
     *
     * Generated from protobuf field <code>map<string, string> user_properties = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_properties = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.SystemProperties system_properties = 3;</code>
     * @return \Apache\Rocketmq\V2\SystemProperties|null
     */
    public function getSystemProperties()
    {
        return $this->system_properties;
    }

    public function hasSystemProperties()
    {
        return isset($this->system_properties);
    }

    public function clearSystemProperties()
    {
        unset($this->system_properties);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.SystemProperties system_properties = 3;</code>
     * @param \Apache\Rocketmq\V2\SystemProperties $var
     * @return $this
     */
    public function setSystemProperties($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\SystemProperties::class);
        $this->system_properties = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->body = $var;

        return $this;
    }

}

