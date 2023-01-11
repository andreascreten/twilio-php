<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Preview\HostedNumbers;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Preview\HostedNumbers\AuthorizationDocument\DependentHostedNumberOrderList;


/**
 * @property string $sid
 * @property string $addressSid
 * @property string $status
 * @property string $email
 * @property string[] $ccEmails
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 * @property array $links
 */
class AuthorizationDocumentInstance extends InstanceResource {
    protected $_dependentHostedNumberOrders;

    /**
     * Initialize the AuthorizationDocumentInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A 34 character string that uniquely identifies this AuthorizationDocument.
     */
    public function __construct(Version $version, array $payload, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'addressSid' => Values::array_get($payload, 'address_sid'),
            'status' => Values::array_get($payload, 'status'),
            'email' => Values::array_get($payload, 'email'),
            'ccEmails' => Values::array_get($payload, 'cc_emails'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AuthorizationDocumentContext Context for this AuthorizationDocumentInstance
     */
    protected function proxy(): AuthorizationDocumentContext {
        if (!$this->context) {
            $this->context = new AuthorizationDocumentContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the AuthorizationDocumentInstance
     *
     * @return AuthorizationDocumentInstance Fetched AuthorizationDocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AuthorizationDocumentInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AuthorizationDocumentInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AuthorizationDocumentInstance Updated AuthorizationDocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): AuthorizationDocumentInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the dependentHostedNumberOrders
     */
    protected function getDependentHostedNumberOrders(): DependentHostedNumberOrderList {
        return $this->proxy()->dependentHostedNumberOrders;
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
        return '[Twilio.Preview.HostedNumbers.AuthorizationDocumentInstance ' . \implode(' ', $context) . ']';
    }
}

