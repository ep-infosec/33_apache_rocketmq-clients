<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.ThreadStackTrace</code>
 */
class ThreadStackTrace extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     */
    protected $nonce = '';
    /**
     * Generated from protobuf field <code>optional string thread_stack_trace = 2;</code>
     */
    protected $thread_stack_trace = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nonce
     *     @type string $thread_stack_trace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string thread_stack_trace = 2;</code>
     * @return string
     */
    public function getThreadStackTrace()
    {
        return isset($this->thread_stack_trace) ? $this->thread_stack_trace : '';
    }

    public function hasThreadStackTrace()
    {
        return isset($this->thread_stack_trace);
    }

    public function clearThreadStackTrace()
    {
        unset($this->thread_stack_trace);
    }

    /**
     * Generated from protobuf field <code>optional string thread_stack_trace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setThreadStackTrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->thread_stack_trace = $var;

        return $this;
    }

}

