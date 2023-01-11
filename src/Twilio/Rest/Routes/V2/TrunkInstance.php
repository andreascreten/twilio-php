<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Routes
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Routes\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sipTrunkDomain
 * @property string $url
 * @property string $sid
 * @property string $accountSid
 * @property string $friendlyName
 * @property string $voiceRegion
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 */
class TrunkInstance extends InstanceResource {
    /**
     * Initialize the TrunkInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sipTrunkDomain The absolute URL of the SIP Trunk
     */
    public function __construct(Version $version, array $payload, string $sipTrunkDomain = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sipTrunkDomain' => Values::array_get($payload, 'sip_trunk_domain'),
            'url' => Values::array_get($payload, 'url'),
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'voiceRegion' => Values::array_get($payload, 'voice_region'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
        ];

        $this->solution = ['sipTrunkDomain' => $sipTrunkDomain ?: $this->properties['sipTrunkDomain'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TrunkContext Context for this TrunkInstance
     */
    protected function proxy(): TrunkContext {
        if (!$this->context) {
            $this->context = new TrunkContext(
                $this->version,
                $this->solution['sipTrunkDomain']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the TrunkInstance
     *
     * @return TrunkInstance Fetched TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TrunkInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the TrunkInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TrunkInstance Updated TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): TrunkInstance {
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
        return '[Twilio.Routes.V2.TrunkInstance ' . \implode(' ', $context) . ']';
    }
}

