<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Notify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Notify\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class NotificationList extends ListResource {
    /**
     * Construct the NotificationList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/notify/api/service-resource) to create the resource under.
     */
    public function __construct(Version $version, string $serviceSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Notifications';
    }

    /**
     * Create the NotificationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NotificationInstance Created NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): NotificationInstance {
        $options = new Values($options);

        $data = Values::of([
            'Body' => $options['body'],
            'Priority' => $options['priority'],
            'Ttl' => $options['ttl'],
            'Title' => $options['title'],
            'Sound' => $options['sound'],
            'Action' => $options['action'],
            'Data' => Serialize::jsonObject($options['data']),
            'Apn' => Serialize::jsonObject($options['apn']),
            'Gcm' => Serialize::jsonObject($options['gcm']),
            'Sms' => Serialize::jsonObject($options['sms']),
            'FacebookMessenger' => Serialize::jsonObject($options['facebookMessenger']),
            'Fcm' => Serialize::jsonObject($options['fcm']),
            'Segment' => Serialize::map($options['segment'], function($e) { return $e; }),
            'Alexa' => Serialize::jsonObject($options['alexa']),
            'ToBinding' => Serialize::map($options['toBinding'], function($e) { return $e; }),
            'DeliveryCallbackUrl' => $options['deliveryCallbackUrl'],
            'Identity' => Serialize::map($options['identity'], function($e) { return $e; }),
            'Tag' => Serialize::map($options['tag'], function($e) { return $e; }),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new NotificationInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Notify.V1.NotificationList]';
    }
}
