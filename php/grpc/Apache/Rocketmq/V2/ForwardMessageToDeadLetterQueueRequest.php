<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.ForwardMessageToDeadLetterQueueRequest</code>
 */
class ForwardMessageToDeadLetterQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
     */
    protected $group = null;
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 2;</code>
     */
    protected $topic = null;
    /**
     * Generated from protobuf field <code>string receipt_handle = 3;</code>
     */
    protected $receipt_handle = '';
    /**
     * Generated from protobuf field <code>string message_id = 4;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>int32 delivery_attempt = 5;</code>
     */
    protected $delivery_attempt = 0;
    /**
     * Generated from protobuf field <code>int32 max_delivery_attempts = 6;</code>
     */
    protected $max_delivery_attempts = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Resource $group
     *     @type \Apache\Rocketmq\V2\Resource $topic
     *     @type string $receipt_handle
     *     @type string $message_id
     *     @type int $delivery_attempt
     *     @type int $max_delivery_attempts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
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
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
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
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 2;</code>
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
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource topic = 2;</code>
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
     * Generated from protobuf field <code>string receipt_handle = 3;</code>
     * @return string
     */
    public function getReceiptHandle()
    {
        return $this->receipt_handle;
    }

    /**
     * Generated from protobuf field <code>string receipt_handle = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReceiptHandle($var)
    {
        GPBUtil::checkString($var, True);
        $this->receipt_handle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message_id = 4;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 delivery_attempt = 5;</code>
     * @return int
     */
    public function getDeliveryAttempt()
    {
        return $this->delivery_attempt;
    }

    /**
     * Generated from protobuf field <code>int32 delivery_attempt = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDeliveryAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->delivery_attempt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_delivery_attempts = 6;</code>
     * @return int
     */
    public function getMaxDeliveryAttempts()
    {
        return $this->max_delivery_attempts;
    }

    /**
     * Generated from protobuf field <code>int32 max_delivery_attempts = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDeliveryAttempts($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_delivery_attempts = $var;

        return $this;
    }

}

