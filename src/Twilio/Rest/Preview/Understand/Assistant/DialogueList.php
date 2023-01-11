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

use Twilio\ListResource;
use Twilio\Version;


class DialogueList extends ListResource {
    /**
     * Construct the DialogueList
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid 
     */
    public function __construct(Version $version, string $assistantSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid, ];
    }

    /**
     * Constructs a DialogueContext
     *
     * @param string $sid 
     */
    public function getContext(string $sid): DialogueContext {
        return new DialogueContext($this->version, $this->solution['assistantSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Preview.Understand.DialogueList]';
    }
}
