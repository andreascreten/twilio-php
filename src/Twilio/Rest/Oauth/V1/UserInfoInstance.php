<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Oauth
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Oauth\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $userSid
 * @property string $firstName
 * @property string $lastName
 * @property string $friendlyName
 * @property string $email
 * @property string $url
 */
class UserInfoInstance extends InstanceResource {
    /**
     * Initialize the UserInfoInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'userSid' => Values::array_get($payload, 'user_sid'),
            'firstName' => Values::array_get($payload, 'first_name'),
            'lastName' => Values::array_get($payload, 'last_name'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'email' => Values::array_get($payload, 'email'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = [];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return UserInfoContext Context for this UserInfoInstance
     */
    protected function proxy(): UserInfoContext {
        if (!$this->context) {
            $this->context = new UserInfoContext(
                $this->version
            );
        }

        return $this->context;
    }

    /**
     * Fetch the UserInfoInstance
     *
     * @return UserInfoInstance Fetched UserInfoInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): UserInfoInstance {
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
        return '[Twilio.Oauth.V1.UserInfoInstance ' . \implode(' ', $context) . ']';
    }
}

