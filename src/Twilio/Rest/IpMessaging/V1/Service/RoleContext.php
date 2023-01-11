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


namespace Twilio\Rest\IpMessaging\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class RoleContext extends InstanceContext {
    /**
     * Initialize the RoleContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid 
     * @param string $sid 
     */
    public function __construct(Version $version, $serviceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid,  'sid' => $sid,  ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Roles/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the RoleInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the RoleInstance
     *
     * @return RoleInstance Fetched RoleInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RoleInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new RoleInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the RoleInstance
     *
     * @param string[] $permission 
     * @return RoleInstance Updated RoleInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $permission): RoleInstance {
        $data = Values::of([
            'Permission' => Serialize::map($permission,function($e) { return $e; }),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new RoleInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
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
        return '[Twilio.IpMessaging.V1.RoleContext ' . \implode(' ', $context) . ']';
    }
}
