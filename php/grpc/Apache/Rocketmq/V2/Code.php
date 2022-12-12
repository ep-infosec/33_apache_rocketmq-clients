<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/definition.proto

namespace Apache\Rocketmq\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>apache.rocketmq.v2.Code</code>
 */
class Code
{
    /**
     * Generated from protobuf enum <code>CODE_UNSPECIFIED = 0;</code>
     */
    const CODE_UNSPECIFIED = 0;
    /**
     * Generic code for success.
     *
     * Generated from protobuf enum <code>OK = 20000;</code>
     */
    const OK = 20000;
    /**
     * Generic code for multiple return results.
     *
     * Generated from protobuf enum <code>MULTIPLE_RESULTS = 30000;</code>
     */
    const MULTIPLE_RESULTS = 30000;
    /**
     * Generic code for bad request, indicating that required fields or headers are missing.
     *
     * Generated from protobuf enum <code>BAD_REQUEST = 40000;</code>
     */
    const BAD_REQUEST = 40000;
    /**
     * Format of access point is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_ACCESS_POINT = 40001;</code>
     */
    const ILLEGAL_ACCESS_POINT = 40001;
    /**
     * Format of topic is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_TOPIC = 40002;</code>
     */
    const ILLEGAL_TOPIC = 40002;
    /**
     * Format of consumer group is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_CONSUMER_GROUP = 40003;</code>
     */
    const ILLEGAL_CONSUMER_GROUP = 40003;
    /**
     * Format of message tag is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_MESSAGE_TAG = 40004;</code>
     */
    const ILLEGAL_MESSAGE_TAG = 40004;
    /**
     * Format of message key is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_MESSAGE_KEY = 40005;</code>
     */
    const ILLEGAL_MESSAGE_KEY = 40005;
    /**
     * Format of message group is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_MESSAGE_GROUP = 40006;</code>
     */
    const ILLEGAL_MESSAGE_GROUP = 40006;
    /**
     * Format of message property key is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_MESSAGE_PROPERTY_KEY = 40007;</code>
     */
    const ILLEGAL_MESSAGE_PROPERTY_KEY = 40007;
    /**
     * Transaction id is invalid.
     *
     * Generated from protobuf enum <code>INVALID_TRANSACTION_ID = 40008;</code>
     */
    const INVALID_TRANSACTION_ID = 40008;
    /**
     * Format of message id is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_MESSAGE_ID = 40009;</code>
     */
    const ILLEGAL_MESSAGE_ID = 40009;
    /**
     * Format of filter expression is illegal.
     *
     * Generated from protobuf enum <code>ILLEGAL_FILTER_EXPRESSION = 40010;</code>
     */
    const ILLEGAL_FILTER_EXPRESSION = 40010;
    /**
     * The invisible time of request is invalid.
     *
     * Generated from protobuf enum <code>ILLEGAL_INVISIBLE_TIME = 40011;</code>
     */
    const ILLEGAL_INVISIBLE_TIME = 40011;
    /**
     * The delivery timestamp of message is invalid.
     *
     * Generated from protobuf enum <code>ILLEGAL_DELIVERY_TIME = 40012;</code>
     */
    const ILLEGAL_DELIVERY_TIME = 40012;
    /**
     * Receipt handle of message is invalid.
     *
     * Generated from protobuf enum <code>INVALID_RECEIPT_HANDLE = 40013;</code>
     */
    const INVALID_RECEIPT_HANDLE = 40013;
    /**
     * Message property conflicts with its type.
     *
     * Generated from protobuf enum <code>MESSAGE_PROPERTY_CONFLICT_WITH_TYPE = 40014;</code>
     */
    const MESSAGE_PROPERTY_CONFLICT_WITH_TYPE = 40014;
    /**
     * Client type could not be recognized.
     *
     * Generated from protobuf enum <code>UNRECOGNIZED_CLIENT_TYPE = 40015;</code>
     */
    const UNRECOGNIZED_CLIENT_TYPE = 40015;
    /**
     * Message is corrupted.
     *
     * Generated from protobuf enum <code>MESSAGE_CORRUPTED = 40016;</code>
     */
    const MESSAGE_CORRUPTED = 40016;
    /**
     * Request is rejected due to missing of x-mq-client-id header.
     *
     * Generated from protobuf enum <code>CLIENT_ID_REQUIRED = 40017;</code>
     */
    const CLIENT_ID_REQUIRED = 40017;
    /**
     * Generic code indicates that the client request lacks valid authentication
     * credentials for the requested resource.
     *
     * Generated from protobuf enum <code>UNAUTHORIZED = 40100;</code>
     */
    const UNAUTHORIZED = 40100;
    /**
     * Generic code indicates that the account is suspended due to overdue of payment.
     *
     * Generated from protobuf enum <code>PAYMENT_REQUIRED = 40200;</code>
     */
    const PAYMENT_REQUIRED = 40200;
    /**
     * Generic code for the case that user does not have the permission to operate.
     *
     * Generated from protobuf enum <code>FORBIDDEN = 40300;</code>
     */
    const FORBIDDEN = 40300;
    /**
     * Generic code for resource not found.
     *
     * Generated from protobuf enum <code>NOT_FOUND = 40400;</code>
     */
    const NOT_FOUND = 40400;
    /**
     * Message not found from server.
     *
     * Generated from protobuf enum <code>MESSAGE_NOT_FOUND = 40401;</code>
     */
    const MESSAGE_NOT_FOUND = 40401;
    /**
     * Topic resource does not exist.
     *
     * Generated from protobuf enum <code>TOPIC_NOT_FOUND = 40402;</code>
     */
    const TOPIC_NOT_FOUND = 40402;
    /**
     * Consumer group resource does not exist.
     *
     * Generated from protobuf enum <code>CONSUMER_GROUP_NOT_FOUND = 40403;</code>
     */
    const CONSUMER_GROUP_NOT_FOUND = 40403;
    /**
     * Generic code representing client side timeout when connecting to, reading data from, or write data to server.
     *
     * Generated from protobuf enum <code>REQUEST_TIMEOUT = 40800;</code>
     */
    const REQUEST_TIMEOUT = 40800;
    /**
     * Generic code represents that the request entity is larger than limits defined by server.
     *
     * Generated from protobuf enum <code>PAYLOAD_TOO_LARGE = 41300;</code>
     */
    const PAYLOAD_TOO_LARGE = 41300;
    /**
     * Message body size exceeds the threshold.
     *
     * Generated from protobuf enum <code>MESSAGE_BODY_TOO_LARGE = 41301;</code>
     */
    const MESSAGE_BODY_TOO_LARGE = 41301;
    /**
     * Generic code for use cases where pre-conditions are not met.
     * For example, if a producer instance is used to publish messages without prior start() invocation,
     * this error code will be raised.
     *
     * Generated from protobuf enum <code>PRECONDITION_FAILED = 42800;</code>
     */
    const PRECONDITION_FAILED = 42800;
    /**
     * Generic code indicates that too many requests are made in short period of duration.
     * Requests are throttled.
     *
     * Generated from protobuf enum <code>TOO_MANY_REQUESTS = 42900;</code>
     */
    const TOO_MANY_REQUESTS = 42900;
    /**
     * Generic code for the case that the server is unwilling to process the request because its header fields are too large.
     * The request may be resubmitted after reducing the size of the request header fields.
     *
     * Generated from protobuf enum <code>REQUEST_HEADER_FIELDS_TOO_LARGE = 43100;</code>
     */
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 43100;
    /**
     * Message properties total size exceeds the threshold.
     *
     * Generated from protobuf enum <code>MESSAGE_PROPERTIES_TOO_LARGE = 43101;</code>
     */
    const MESSAGE_PROPERTIES_TOO_LARGE = 43101;
    /**
     * Generic code indicates that server/client encountered an unexpected
     * condition that prevented it from fulfilling the request.
     *
     * Generated from protobuf enum <code>INTERNAL_ERROR = 50000;</code>
     */
    const INTERNAL_ERROR = 50000;
    /**
     * Code indicates that the server encountered an unexpected condition
     * that prevented it from fulfilling the request.
     * This error response is a generic "catch-all" response.
     * Usually, this indicates the server cannot find a better alternative
     * error code to response. Sometimes, server administrators log error
     * responses like the 500 status code with more details about the request
     * to prevent the error from happening again in the future.
     * See https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500
     *
     * Generated from protobuf enum <code>INTERNAL_SERVER_ERROR = 50001;</code>
     */
    const INTERNAL_SERVER_ERROR = 50001;
    /**
     * The HA-mechanism is not working now.
     *
     * Generated from protobuf enum <code>HA_NOT_AVAILABLE = 50002;</code>
     */
    const HA_NOT_AVAILABLE = 50002;
    /**
     * Generic code means that the server or client does not support the
     * functionality required to fulfill the request.
     *
     * Generated from protobuf enum <code>NOT_IMPLEMENTED = 50100;</code>
     */
    const NOT_IMPLEMENTED = 50100;
    /**
     * Generic code represents that the server, which acts as a gateway or proxy,
     * does not get an satisfied response in time from its upstream servers.
     * See https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/504
     *
     * Generated from protobuf enum <code>PROXY_TIMEOUT = 50400;</code>
     */
    const PROXY_TIMEOUT = 50400;
    /**
     * Message persistence timeout.
     *
     * Generated from protobuf enum <code>MASTER_PERSISTENCE_TIMEOUT = 50401;</code>
     */
    const MASTER_PERSISTENCE_TIMEOUT = 50401;
    /**
     * Slave persistence timeout.
     *
     * Generated from protobuf enum <code>SLAVE_PERSISTENCE_TIMEOUT = 50402;</code>
     */
    const SLAVE_PERSISTENCE_TIMEOUT = 50402;
    /**
     * Generic code for unsupported operation.
     *
     * Generated from protobuf enum <code>UNSUPPORTED = 50500;</code>
     */
    const UNSUPPORTED = 50500;
    /**
     * Operation is not allowed in current version.
     *
     * Generated from protobuf enum <code>VERSION_UNSUPPORTED = 50501;</code>
     */
    const VERSION_UNSUPPORTED = 50501;
    /**
     * Not allowed to verify message. Chances are that you are verifying
     * a FIFO message, as is violating FIFO semantics.
     *
     * Generated from protobuf enum <code>VERIFY_FIFO_MESSAGE_UNSUPPORTED = 50502;</code>
     */
    const VERIFY_FIFO_MESSAGE_UNSUPPORTED = 50502;
    /**
     * Generic code for failed message consumption.
     *
     * Generated from protobuf enum <code>FAILED_TO_CONSUME_MESSAGE = 60000;</code>
     */
    const FAILED_TO_CONSUME_MESSAGE = 60000;

    private static $valueToName = [
        self::CODE_UNSPECIFIED => 'CODE_UNSPECIFIED',
        self::OK => 'OK',
        self::MULTIPLE_RESULTS => 'MULTIPLE_RESULTS',
        self::BAD_REQUEST => 'BAD_REQUEST',
        self::ILLEGAL_ACCESS_POINT => 'ILLEGAL_ACCESS_POINT',
        self::ILLEGAL_TOPIC => 'ILLEGAL_TOPIC',
        self::ILLEGAL_CONSUMER_GROUP => 'ILLEGAL_CONSUMER_GROUP',
        self::ILLEGAL_MESSAGE_TAG => 'ILLEGAL_MESSAGE_TAG',
        self::ILLEGAL_MESSAGE_KEY => 'ILLEGAL_MESSAGE_KEY',
        self::ILLEGAL_MESSAGE_GROUP => 'ILLEGAL_MESSAGE_GROUP',
        self::ILLEGAL_MESSAGE_PROPERTY_KEY => 'ILLEGAL_MESSAGE_PROPERTY_KEY',
        self::INVALID_TRANSACTION_ID => 'INVALID_TRANSACTION_ID',
        self::ILLEGAL_MESSAGE_ID => 'ILLEGAL_MESSAGE_ID',
        self::ILLEGAL_FILTER_EXPRESSION => 'ILLEGAL_FILTER_EXPRESSION',
        self::ILLEGAL_INVISIBLE_TIME => 'ILLEGAL_INVISIBLE_TIME',
        self::ILLEGAL_DELIVERY_TIME => 'ILLEGAL_DELIVERY_TIME',
        self::INVALID_RECEIPT_HANDLE => 'INVALID_RECEIPT_HANDLE',
        self::MESSAGE_PROPERTY_CONFLICT_WITH_TYPE => 'MESSAGE_PROPERTY_CONFLICT_WITH_TYPE',
        self::UNRECOGNIZED_CLIENT_TYPE => 'UNRECOGNIZED_CLIENT_TYPE',
        self::MESSAGE_CORRUPTED => 'MESSAGE_CORRUPTED',
        self::CLIENT_ID_REQUIRED => 'CLIENT_ID_REQUIRED',
        self::UNAUTHORIZED => 'UNAUTHORIZED',
        self::PAYMENT_REQUIRED => 'PAYMENT_REQUIRED',
        self::FORBIDDEN => 'FORBIDDEN',
        self::NOT_FOUND => 'NOT_FOUND',
        self::MESSAGE_NOT_FOUND => 'MESSAGE_NOT_FOUND',
        self::TOPIC_NOT_FOUND => 'TOPIC_NOT_FOUND',
        self::CONSUMER_GROUP_NOT_FOUND => 'CONSUMER_GROUP_NOT_FOUND',
        self::REQUEST_TIMEOUT => 'REQUEST_TIMEOUT',
        self::PAYLOAD_TOO_LARGE => 'PAYLOAD_TOO_LARGE',
        self::MESSAGE_BODY_TOO_LARGE => 'MESSAGE_BODY_TOO_LARGE',
        self::PRECONDITION_FAILED => 'PRECONDITION_FAILED',
        self::TOO_MANY_REQUESTS => 'TOO_MANY_REQUESTS',
        self::REQUEST_HEADER_FIELDS_TOO_LARGE => 'REQUEST_HEADER_FIELDS_TOO_LARGE',
        self::MESSAGE_PROPERTIES_TOO_LARGE => 'MESSAGE_PROPERTIES_TOO_LARGE',
        self::INTERNAL_ERROR => 'INTERNAL_ERROR',
        self::INTERNAL_SERVER_ERROR => 'INTERNAL_SERVER_ERROR',
        self::HA_NOT_AVAILABLE => 'HA_NOT_AVAILABLE',
        self::NOT_IMPLEMENTED => 'NOT_IMPLEMENTED',
        self::PROXY_TIMEOUT => 'PROXY_TIMEOUT',
        self::MASTER_PERSISTENCE_TIMEOUT => 'MASTER_PERSISTENCE_TIMEOUT',
        self::SLAVE_PERSISTENCE_TIMEOUT => 'SLAVE_PERSISTENCE_TIMEOUT',
        self::UNSUPPORTED => 'UNSUPPORTED',
        self::VERSION_UNSUPPORTED => 'VERSION_UNSUPPORTED',
        self::VERIFY_FIFO_MESSAGE_UNSUPPORTED => 'VERIFY_FIFO_MESSAGE_UNSUPPORTED',
        self::FAILED_TO_CONSUME_MESSAGE => 'FAILED_TO_CONSUME_MESSAGE',
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

