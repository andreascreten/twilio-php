<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Messaging\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $shortCode
 * @property string $countryCode
 * @property string[] $capabilities
 * @property string $url
 */
class ShortCodeInstance extends InstanceResource {
    /**
     * Initialize the ShortCodeInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/chat/rest/service-resource) to create the resource under.
     * @param string $sid The SID of the ShortCode resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'shortCode' => Values::array_get($payload, 'short_code'),
            'countryCode' => Values::array_get($payload, 'country_code'),
            'capabilities' => Values::array_get($payload, 'capabilities'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ShortCodeContext Context for this ShortCodeInstance
     */
    protected function proxy(): ShortCodeContext {
        if (!$this->context) {
            $this->context = new ShortCodeContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ShortCodeInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the ShortCodeInstance
     *
     * @return ShortCodeInstance Fetched ShortCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ShortCodeInstance {
        return $this->proxy()->fetch();
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
        return '[Twilio.Messaging.V1.ShortCodeInstance ' . \implode(' ', $context) . ']';
    }
}

