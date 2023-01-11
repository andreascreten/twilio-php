<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Api\V2010\Account\Sip\CredentialList;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class CredentialContext extends InstanceContext {
    /**
     * Initialize the CredentialContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the Account that is responsible for this resource.
     * @param string $credentialListSid The unique id that identifies the credential list to include the created credential.
     * @param string $sid The unique id that identifies the resource to delete.
     */
    public function __construct(Version $version, $accountSid , $credentialListSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'credentialListSid' => $credentialListSid,  'sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/CredentialLists/' . \rawurlencode($credentialListSid) . '/Credentials/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Delete the CredentialInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the CredentialInstance
     *
     * @return CredentialInstance Fetched CredentialInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CredentialInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new CredentialInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['credentialListSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the CredentialInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CredentialInstance Updated CredentialInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): CredentialInstance {
        $options = new Values($options);

        $data = Values::of([
            'Password' => $options['password'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new CredentialInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['credentialListSid']
            , $this->solution['sid']
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
        return '[Twilio.Api.V2010.CredentialContext ' . \implode(' ', $context) . ']';
    }
}
