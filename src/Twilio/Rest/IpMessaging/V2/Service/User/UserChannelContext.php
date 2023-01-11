<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Ip_messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\IpMessaging\V2\Service\User;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class UserChannelContext extends InstanceContext {
    /**
     * Initialize the UserChannelContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid 
     * @param string $userSid 
     * @param string $channelSid 
     */
    public function __construct(Version $version, $serviceSid , $userSid , $channelSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid,  'userSid' => $userSid,  'channelSid' => $channelSid,  ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Users/' . \rawurlencode($userSid) . '/Channels/' . \rawurlencode($channelSid) . '';
    }

    /**
     * Delete the UserChannelInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the UserChannelInstance
     *
     * @return UserChannelInstance Fetched UserChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): UserChannelInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new UserChannelInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['userSid']
            , $this->solution['channelSid']
        );
    }

    /**
     * Update the UserChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return UserChannelInstance Updated UserChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): UserChannelInstance {
        $options = new Values($options);

        $data = Values::of([
            'NotificationLevel' => $options['notificationLevel'],
            'LastConsumedMessageIndex' => $options['lastConsumedMessageIndex'],
            'LastConsumptionTimestamp' => Serialize::iso8601DateTime($options['lastConsumptionTimestamp']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new UserChannelInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['userSid']
            , $this->solution['channelSid']
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
        return '[Twilio.IpMessaging.V2.UserChannelContext ' . \implode(' ', $context) . ']';
    }
}
