<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Autopilot\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property string $sid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $uniqueName
 * @property string $friendlyName
 * @property bool $needsModelBuild
 * @property string $latestModelBuildSid
 * @property bool $logQueries
 * @property string $developmentStage
 * @property string $callbackUrl
 * @property string $callbackEvents
 */
class RestoreAssistantInstance extends InstanceResource {
    /**
     * Initialize the RestoreAssistantInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'needsModelBuild' => Values::array_get($payload, 'needs_model_build'),
            'latestModelBuildSid' => Values::array_get($payload, 'latest_model_build_sid'),
            'logQueries' => Values::array_get($payload, 'log_queries'),
            'developmentStage' => Values::array_get($payload, 'development_stage'),
            'callbackUrl' => Values::array_get($payload, 'callback_url'),
            'callbackEvents' => Values::array_get($payload, 'callback_events'),
        ];

        $this->solution = [];
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
        return '[Twilio.Autopilot.V1.RestoreAssistantInstance]';
    }
}

