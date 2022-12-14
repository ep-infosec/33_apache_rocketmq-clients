<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string resource_namespace = 1;</code>
     */
    protected $resource_namespace = '';
    /**
     * Resource name identifier, which remains unique within the abstract resource
     * namespace.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_namespace
     *     @type string $name
     *           Resource name identifier, which remains unique within the abstract resource
     *           namespace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Definition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string resource_namespace = 1;</code>
     * @return string
     */
    public function getResourceNamespace()
    {
        return $this->resource_namespace;
    }

    /**
     * Generated from protobuf field <code>string resource_namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_namespace = $var;

        return $this;
    }

    /**
     * Resource name identifier, which remains unique within the abstract resource
     * namespace.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name identifier, which remains unique within the abstract resource
     * namespace.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

