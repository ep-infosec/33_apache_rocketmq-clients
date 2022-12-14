<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.AckMessageResultEntry</code>
 */
class AckMessageResultEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>string receipt_handle = 2;</code>
     */
    protected $receipt_handle = '';
    /**
     * Acknowledge result may be acquired through inspecting
     * `status.code`; In case acknowledgement failed, `status.message`
     * is the explanation of the failure.
     *
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 3;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     *     @type string $receipt_handle
     *     @type \Apache\Rocketmq\V2\Status $status
     *           Acknowledge result may be acquired through inspecting
     *           `status.code`; In case acknowledgement failed, `status.message`
     *           is the explanation of the failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
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
     * Generated from protobuf field <code>string receipt_handle = 2;</code>
     * @return string
     */
    public function getReceiptHandle()
    {
        return $this->receipt_handle;
    }

    /**
     * Generated from protobuf field <code>string receipt_handle = 2;</code>
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
     * Acknowledge result may be acquired through inspecting
     * `status.code`; In case acknowledgement failed, `status.message`
     * is the explanation of the failure.
     *
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 3;</code>
     * @return \Apache\Rocketmq\V2\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Acknowledge result may be acquired through inspecting
     * `status.code`; In case acknowledgement failed, `status.message`
     * is the explanation of the failure.
     *
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 3;</code>
     * @param \Apache\Rocketmq\V2\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Status::class);
        $this->status = $var;

        return $this;
    }

}

