<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Conversations\V1\Service\Configuration;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class NotificationContext extends InstanceContext {
    /**
     * Initialize the NotificationContext
     *
     * @param Version $version Version that contains the resource
     * @param string $chatServiceSid The SID of the [Conversation Service](https://www.twilio.com/docs/conversations/api/service-resource) the Configuration applies to.
     */
    public function __construct(Version $version, $chatServiceSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['chatServiceSid' => $chatServiceSid,  ];

        $this->uri = '/Services/' . \rawurlencode($chatServiceSid) . '/Configuration/Notifications';
    }

    /**
     * Fetch the NotificationInstance
     *
     * @return NotificationInstance Fetched NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NotificationInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new NotificationInstance(
            $this->version,
            $payload
            , $this->solution['chatServiceSid']
        );
    }

    /**
     * Update the NotificationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NotificationInstance Updated NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): NotificationInstance {
        $options = new Values($options);

        $data = Values::of([
            'LogEnabled' => Serialize::booleanToString($options['logEnabled']),
            'NewMessage.Enabled' => Serialize::booleanToString($options['newMessageEnabled']),
            'NewMessage.Template' => $options['newMessageTemplate'],
            'NewMessage.Sound' => $options['newMessageSound'],
            'NewMessage.BadgeCountEnabled' => Serialize::booleanToString($options['newMessageBadgeCountEnabled']),
            'AddedToConversation.Enabled' => Serialize::booleanToString($options['addedToConversationEnabled']),
            'AddedToConversation.Template' => $options['addedToConversationTemplate'],
            'AddedToConversation.Sound' => $options['addedToConversationSound'],
            'RemovedFromConversation.Enabled' => Serialize::booleanToString($options['removedFromConversationEnabled']),
            'RemovedFromConversation.Template' => $options['removedFromConversationTemplate'],
            'RemovedFromConversation.Sound' => $options['removedFromConversationSound'],
            'NewMessage.WithMedia.Enabled' => Serialize::booleanToString($options['newMessageWithMediaEnabled']),
            'NewMessage.WithMedia.Template' => $options['newMessageWithMediaTemplate'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new NotificationInstance(
            $this->version,
            $payload
            , $this->solution['chatServiceSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Conversations.V1.NotificationContext ' . \implode(' ', $context) . ']';
    }
}
