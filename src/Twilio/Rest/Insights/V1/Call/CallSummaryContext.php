<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Insights
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Insights\V1\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class CallSummaryContext extends InstanceContext {
    /**
     * Initialize the CallSummaryContext
     *
     * @param Version $version Version that contains the resource
     * @param string $callSid 
     */
    public function __construct(Version $version, $callSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['callSid' => $callSid,  ];

        $this->uri = '/Voice/' . \rawurlencode($callSid) . '/Summary';
    }

    /**
     * Fetch the CallSummaryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CallSummaryInstance Fetched CallSummaryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): CallSummaryInstance {
        $options = new Values($options);

        $params = Values::of([
            'ProcessingState' => $options['processingState'],
        ]);

        $payload = $this->version->fetch('GET', $this->uri, $params);

        return new CallSummaryInstance(
            $this->version,
            $payload
            , $this->solution['callSid']
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
        return '[Twilio.Insights.V1.CallSummaryContext ' . \implode(' ', $context) . ']';
    }
}
