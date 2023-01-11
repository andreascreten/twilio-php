<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trunking
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trunking\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListList;
use Twilio\Rest\Trunking\V1\Trunk\PhoneNumberList;
use Twilio\Rest\Trunking\V1\Trunk\CredentialListList;
use Twilio\Rest\Trunking\V1\Trunk\OriginationUrlList;
use Twilio\Rest\Trunking\V1\Trunk\RecordingList;


/**
 * @property string $accountSid
 * @property string $domainName
 * @property string $disasterRecoveryMethod
 * @property string $disasterRecoveryUrl
 * @property string $friendlyName
 * @property bool $secure
 * @property array $recording
 * @property string $transferMode
 * @property string $transferCallerId
 * @property bool $cnamLookupEnabled
 * @property string $authType
 * @property string[] $authTypeSet
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $sid
 * @property string $url
 * @property array $links
 */
class TrunkInstance extends InstanceResource {
    protected $_ipAccessControlLists;
    protected $_phoneNumbers;
    protected $_credentialsLists;
    protected $_originationUrls;
    protected $_recordings;

    /**
     * Initialize the TrunkInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The unique string that we created to identify the Trunk resource to delete.
     */
    public function __construct(Version $version, array $payload, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'domainName' => Values::array_get($payload, 'domain_name'),
            'disasterRecoveryMethod' => Values::array_get($payload, 'disaster_recovery_method'),
            'disasterRecoveryUrl' => Values::array_get($payload, 'disaster_recovery_url'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'secure' => Values::array_get($payload, 'secure'),
            'recording' => Values::array_get($payload, 'recording'),
            'transferMode' => Values::array_get($payload, 'transfer_mode'),
            'transferCallerId' => Values::array_get($payload, 'transfer_caller_id'),
            'cnamLookupEnabled' => Values::array_get($payload, 'cnam_lookup_enabled'),
            'authType' => Values::array_get($payload, 'auth_type'),
            'authTypeSet' => Values::array_get($payload, 'auth_type_set'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'sid' => Values::array_get($payload, 'sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
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
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the TrunkInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
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
     * Access the ipAccessControlLists
     */
    protected function getIpAccessControlLists(): IpAccessControlListList {
        return $this->proxy()->ipAccessControlLists;
    }

    /**
     * Access the phoneNumbers
     */
    protected function getPhoneNumbers(): PhoneNumberList {
        return $this->proxy()->phoneNumbers;
    }

    /**
     * Access the credentialsLists
     */
    protected function getCredentialsLists(): CredentialListList {
        return $this->proxy()->credentialsLists;
    }

    /**
     * Access the originationUrls
     */
    protected function getOriginationUrls(): OriginationUrlList {
        return $this->proxy()->originationUrls;
    }

    /**
     * Access the recordings
     */
    protected function getRecordings(): RecordingList {
        return $this->proxy()->recordings;
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
        return '[Twilio.Trunking.V1.TrunkInstance ' . \implode(' ', $context) . ']';
    }
}

