<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.Assignment</code>
 */
class Assignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 1;</code>
     */
    protected $message_queue = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\MessageQueue $message_queue
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Definition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 1;</code>
     * @return \Apache\Rocketmq\V2\MessageQueue|null
     */
    public function getMessageQueue()
    {
        return $this->message_queue;
    }

    public function hasMessageQueue()
    {
        return isset($this->message_queue);
    }

    public function clearMessageQueue()
    {
        unset($this->message_queue);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 1;</code>
     * @param \Apache\Rocketmq\V2\MessageQueue $var
     * @return $this
     */
    public function setMessageQueue($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\MessageQueue::class);
        $this->message_queue = $var;

        return $this;
    }

}

