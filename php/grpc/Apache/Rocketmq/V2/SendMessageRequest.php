<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.SendMessageRequest</code>
 */
class SendMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Message messages = 1;</code>
     */
    private $messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Apache\Rocketmq\V2\Message>|\Google\Protobuf\Internal\RepeatedField $messages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Message messages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.Message messages = 1;</code>
     * @param array<\Apache\Rocketmq\V2\Message>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Apache\Rocketmq\V2\Message::class);
        $this->messages = $arr;

        return $this;
    }

}

