<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class MemberOptions {
    /**
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource). 
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read. This parameter should only be used when recreating a Member from a backup/separate source. 
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels). 
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source. 
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`. Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated. 
     * @param string $attributes A valid JSON string that contains application-specific data. 
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
     * @return CreateMemberOptions Options builder
     */
    public static function create(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE, \DateTime $dateCreated = Values::NONE, \DateTime $dateUpdated = Values::NONE, string $attributes = Values::NONE, string $xTwilioWebhookEnabled = Values::NONE): CreateMemberOptions {
        return new CreateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated, $attributes, $xTwilioWebhookEnabled);
    }

    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
     * @return DeleteMemberOptions Options builder
     */
    public static function delete(string $xTwilioWebhookEnabled = Values::NONE): DeleteMemberOptions {
        return new DeleteMemberOptions($xTwilioWebhookEnabled);
    }


    /**
     * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)'s `identity` value of the Member resources to read. See [access tokens](https://www.twilio.com/docs/chat/create-tokens) for more details. 
     * @return ReadMemberOptions Options builder
     */
    public static function read(array $identity = Values::ARRAY_NONE): ReadMemberOptions {
        return new ReadMemberOptions($identity);
    }

    /**
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource). 
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) that the Member has read within the [Channel](https://www.twilio.com/docs/chat/channels). 
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels). 
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source. 
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. 
     * @param string $attributes A valid JSON string that contains application-specific data. 
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
     * @return UpdateMemberOptions Options builder
     */
    public static function update(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE, \DateTime $dateCreated = Values::NONE, \DateTime $dateUpdated = Values::NONE, string $attributes = Values::NONE, string $xTwilioWebhookEnabled = Values::NONE): UpdateMemberOptions {
        return new UpdateMemberOptions($roleSid, $lastConsumedMessageIndex, $lastConsumptionTimestamp, $dateCreated, $dateUpdated, $attributes, $xTwilioWebhookEnabled);
    }

}

class CreateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read. This parameter should only be used when recreating a Member from a backup/separate source.
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`. Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE, \DateTime $dateCreated = Values::NONE, \DateTime $dateUpdated = Values::NONE, string $attributes = Values::NONE, string $xTwilioWebhookEnabled = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     *
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read. This parameter should only be used when recreating a Member from a backup/separate source.
     *
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) in the [Channel](https://www.twilio.com/docs/chat/channels) that the Member has read. This parameter should only be used when recreating a Member from a backup/separate source.
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     *
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp(\DateTime $lastConsumptionTimestamp): self {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     *
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`. Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated.
     *
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated. The default value is `null`. Note that this parameter should only be used when a Member is being recreated from a backup/separate source and where a Member was previously updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     *
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.CreateMemberOptions ' . $options . ']';
    }
}

class DeleteMemberOptions extends Options {
    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(string $xTwilioWebhookEnabled = Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.DeleteMemberOptions ' . $options . ']';
    }
}


class ReadMemberOptions extends Options {
    /**
     * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)'s `identity` value of the Member resources to read. See [access tokens](https://www.twilio.com/docs/chat/create-tokens) for more details.
     */
    public function __construct(array $identity = Values::ARRAY_NONE) {
        $this->options['identity'] = $identity;
    }

    /**
     * The [User](https://www.twilio.com/docs/chat/rest/user-resource)'s `identity` value of the Member resources to read. See [access tokens](https://www.twilio.com/docs/chat/create-tokens) for more details.
     *
     * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)'s `identity` value of the Member resources to read. See [access tokens](https://www.twilio.com/docs/chat/create-tokens) for more details.
     * @return $this Fluent Builder
     */
    public function setIdentity(array $identity): self {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.ReadMemberOptions ' . $options . ']';
    }
}

class UpdateMemberOptions extends Options {
    /**
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) that the Member has read within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(string $roleSid = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE, \DateTime $dateCreated = Values::NONE, \DateTime $dateUpdated = Values::NONE, string $attributes = Values::NONE, string $xTwilioWebhookEnabled = Values::NONE) {
        $this->options['roleSid'] = $roleSid;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     *
     * @param string $roleSid The SID of the [Role](https://www.twilio.com/docs/chat/rest/role-resource) to assign to the member. The default roles are those specified on the [Service](https://www.twilio.com/docs/chat/rest/service-resource).
     * @return $this Fluent Builder
     */
    public function setRoleSid(string $roleSid): self {
        $this->options['roleSid'] = $roleSid;
        return $this;
    }

    /**
     * The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) that the Member has read within the [Channel](https://www.twilio.com/docs/chat/channels).
     *
     * @param int $lastConsumedMessageIndex The index of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) that the Member has read within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     *
     * @param \DateTime $lastConsumptionTimestamp The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) timestamp of the last [Message](https://www.twilio.com/docs/chat/rest/message-resource) read event for the Member within the [Channel](https://www.twilio.com/docs/chat/channels).
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp(\DateTime $lastConsumptionTimestamp): self {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     *
     * @param \DateTime $dateCreated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was created. The default value is the current time set by the Chat service.  Note that this parameter should only be used when a Member is being recreated from a backup/separate source.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     *
     * @param \DateTime $dateUpdated The date, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, to assign to the resource as the date it was last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * A valid JSON string that contains application-specific data.
     *
     * @param string $attributes A valid JSON string that contains application-specific data.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.UpdateMemberOptions ' . $options . ']';
    }
}

