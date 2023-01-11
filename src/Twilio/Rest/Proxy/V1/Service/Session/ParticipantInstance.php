<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Proxy\V1\Service\Session;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Proxy\V1\Service\Session\Participant\MessageInteractionList;


/**
 * @property string $sid
 * @property string $sessionSid
 * @property string $serviceSid
 * @property string $accountSid
 * @property string $friendlyName
 * @property string $identifier
 * @property string $proxyIdentifier
 * @property string $proxyIdentifierSid
 * @property \DateTime $dateDeleted
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 * @property array $links
 */
class ParticipantInstance extends InstanceResource {
    protected $_messageInteractions;

    /**
     * Initialize the ParticipantInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the parent [Service](https://www.twilio.com/docs/proxy/api/service) resource.
     * @param string $sessionSid The SID of the parent [Session](https://www.twilio.com/docs/proxy/api/session) resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the Participant resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sessionSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'sessionSid' => Values::array_get($payload, 'session_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'identifier' => Values::array_get($payload, 'identifier'),
            'proxyIdentifier' => Values::array_get($payload, 'proxy_identifier'),
            'proxyIdentifierSid' => Values::array_get($payload, 'proxy_identifier_sid'),
            'dateDeleted' => Deserialize::dateTime(Values::array_get($payload, 'date_deleted')),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sessionSid' => $sessionSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ParticipantContext Context for this ParticipantInstance
     */
    protected function proxy(): ParticipantContext {
        if (!$this->context) {
            $this->context = new ParticipantContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sessionSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ParticipantInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the ParticipantInstance
     *
     * @return ParticipantInstance Fetched ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ParticipantInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Access the messageInteractions
     */
    protected function getMessageInteractions(): MessageInteractionList {
        return $this->proxy()->messageInteractions;
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
        return '[Twilio.Proxy.V1.ParticipantInstance ' . \implode(' ', $context) . ']';
    }
}

