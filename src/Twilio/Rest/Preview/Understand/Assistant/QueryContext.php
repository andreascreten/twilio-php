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


namespace Twilio\Rest\Preview\Understand\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class QueryContext extends InstanceContext {
    /**
     * Initialize the QueryContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The unique ID of the parent Assistant.
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function __construct(Version $version, $assistantSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid,  'sid' => $sid,  ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Queries/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the QueryInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the QueryInstance
     *
     * @return QueryInstance Fetched QueryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): QueryInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new QueryInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the QueryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return QueryInstance Updated QueryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): QueryInstance {
        $options = new Values($options);

        $data = Values::of([
            'SampleSid' => $options['sampleSid'],
            'Status' => $options['status'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new QueryInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
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
        return '[Twilio.Preview.Understand.QueryContext ' . \implode(' ', $context) . ']';
    }
}
