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


namespace Twilio\Rest\Conversations\V1\Service\Conversation;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $chatServiceSid
 * @property string $conversationSid
 * @property string $target
 * @property string $url
 * @property array $configuration
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 */
class WebhookInstance extends InstanceResource {
    /**
     * Initialize the WebhookInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $chatServiceSid The SID of the [Conversation Service](https://www.twilio.com/docs/conversations/api/service-resource) the Participant resource is associated with.
     * @param string $conversationSid The unique ID of the [Conversation](https://www.twilio.com/docs/conversations/api/conversation-resource) for this webhook.
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function __construct(Version $version, array $payload, string $chatServiceSid, string $conversationSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'chatServiceSid' => Values::array_get($payload, 'chat_service_sid'),
            'conversationSid' => Values::array_get($payload, 'conversation_sid'),
            'target' => Values::array_get($payload, 'target'),
            'url' => Values::array_get($payload, 'url'),
            'configuration' => Values::array_get($payload, 'configuration'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
        ];

        $this->solution = ['chatServiceSid' => $chatServiceSid, 'conversationSid' => $conversationSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WebhookContext Context for this WebhookInstance
     */
    protected function proxy(): WebhookContext {
        if (!$this->context) {
            $this->context = new WebhookContext(
                $this->version,
                $this->solution['chatServiceSid'],
                $this->solution['conversationSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the WebhookInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the WebhookInstance
     *
     * @return WebhookInstance Fetched WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WebhookInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WebhookInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WebhookInstance Updated WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WebhookInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Conversations.V1.WebhookInstance ' . \implode(' ', $context) . ']';
    }
}

