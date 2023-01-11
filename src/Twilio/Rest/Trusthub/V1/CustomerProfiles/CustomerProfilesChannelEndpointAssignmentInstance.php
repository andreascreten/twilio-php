<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trusthub\V1\CustomerProfiles;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $customerProfileSid
 * @property string $accountSid
 * @property string $channelEndpointType
 * @property string $channelEndpointSid
 * @property \DateTime $dateCreated
 * @property string $url
 */
class CustomerProfilesChannelEndpointAssignmentInstance extends InstanceResource {
    /**
     * Initialize the CustomerProfilesChannelEndpointAssignmentInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $customerProfileSid The unique string that we created to identify the CustomerProfile resource.
     * @param string $sid The unique string that we created to identify the resource.
     */
    public function __construct(Version $version, array $payload, string $customerProfileSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'customerProfileSid' => Values::array_get($payload, 'customer_profile_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'channelEndpointType' => Values::array_get($payload, 'channel_endpoint_type'),
            'channelEndpointSid' => Values::array_get($payload, 'channel_endpoint_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['customerProfileSid' => $customerProfileSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CustomerProfilesChannelEndpointAssignmentContext Context for this CustomerProfilesChannelEndpointAssignmentInstance
     */
    protected function proxy(): CustomerProfilesChannelEndpointAssignmentContext {
        if (!$this->context) {
            $this->context = new CustomerProfilesChannelEndpointAssignmentContext(
                $this->version,
                $this->solution['customerProfileSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the CustomerProfilesChannelEndpointAssignmentInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the CustomerProfilesChannelEndpointAssignmentInstance
     *
     * @return CustomerProfilesChannelEndpointAssignmentInstance Fetched CustomerProfilesChannelEndpointAssignmentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CustomerProfilesChannelEndpointAssignmentInstance {
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
        return '[Twilio.Trusthub.V1.CustomerProfilesChannelEndpointAssignmentInstance ' . \implode(' ', $context) . ']';
    }
}

