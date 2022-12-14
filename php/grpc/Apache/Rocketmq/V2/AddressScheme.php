<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>apache.rocketmq.v2.AddressScheme</code>
 */
class AddressScheme
{
    /**
     * Generated from protobuf enum <code>ADDRESS_SCHEME_UNSPECIFIED = 0;</code>
     */
    const ADDRESS_SCHEME_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>IPv4 = 1;</code>
     */
    const IPv4 = 1;
    /**
     * Generated from protobuf enum <code>IPv6 = 2;</code>
     */
    const IPv6 = 2;
    /**
     * Generated from protobuf enum <code>DOMAIN_NAME = 3;</code>
     */
    const DOMAIN_NAME = 3;

    private static $valueToName = [
        self::ADDRESS_SCHEME_UNSPECIFIED => 'ADDRESS_SCHEME_UNSPECIFIED',
        self::IPv4 => 'IPv4',
        self::IPv6 => 'IPv6',
        self::DOMAIN_NAME => 'DOMAIN_NAME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

