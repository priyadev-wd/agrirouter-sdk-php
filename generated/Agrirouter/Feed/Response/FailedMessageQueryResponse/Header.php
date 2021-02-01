<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging/response/payload/feed/feed-response.proto

namespace Agrirouter\Feed\Response\FailedMessageQueryResponse;

use Agrirouter\Feed\Response\FailedMessageQueryResponse_Header;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Timestamp;
use GPBMetadata\Messaging\Response\Payload\Feed\FeedResponse;

/**
 * Generated from protobuf message <code>agrirouter.feed.response.FailedMessageQueryResponse.Header</code>
 */
class Header extends Message
{
    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 1;</code>
     */
    protected $technical_message_type = '';
    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 2;</code>
     */
    protected $team_set_context_id = '';
    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 3;</code>
     */
    protected $payload_size = 0;
    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 4;</code>
     */
    protected $sent_timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $technical_message_type
     *           Technical Message Type ID
     *     @type string $team_set_context_id
     *           If associated with a team set context (Device Description) this is the linkage ID
     *     @type int|string $payload_size
     *           Expected size of the payload associated with this message
     *     @type Timestamp $sent_timestamp
     *           The timestamp in UTC that the sender has sent this message
     * }
     */
    public function __construct($data = NULL) {
        FeedResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 1;</code>
     * @return string
     */
    public function getTechnicalMessageType()
    {
        return $this->technical_message_type;
    }

    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTechnicalMessageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->technical_message_type = $var;

        return $this;
    }

    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 2;</code>
     * @return string
     */
    public function getTeamSetContextId()
    {
        return $this->team_set_context_id;
    }

    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTeamSetContextId($var)
    {
        GPBUtil::checkString($var, True);
        $this->team_set_context_id = $var;

        return $this;
    }

    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 3;</code>
     * @return int|string
     */
    public function getPayloadSize()
    {
        return $this->payload_size;
    }

    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayloadSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->payload_size = $var;

        return $this;
    }

    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 4;</code>
     * @return Timestamp
     */
    public function getSentTimestamp()
    {
        return $this->sent_timestamp;
    }

    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 4;</code>
     * @param Timestamp $var
     * @return $this
     */
    public function setSentTimestamp($var)
    {
        GPBUtil::checkMessage($var, Timestamp::class);
        $this->sent_timestamp = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Header::class, FailedMessageQueryResponse_Header::class);
