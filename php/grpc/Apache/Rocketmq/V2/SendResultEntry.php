<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.SendResultEntry</code>
 */
class SendResultEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>string message_id = 2;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>int64 offset = 4;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Status $status
     *     @type string $message_id
     *     @type string $transaction_id
     *     @type int|string $offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
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
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
     * @param \Apache\Rocketmq\V2\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message_id = 2;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 2;</code>
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
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 4;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}

