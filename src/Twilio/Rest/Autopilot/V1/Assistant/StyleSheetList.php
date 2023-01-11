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

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\ListResource;
use Twilio\Version;


class StyleSheetList extends ListResource {
    /**
     * Construct the StyleSheetList
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the [Assistant](https://www.twilio.com/docs/autopilot/api/assistant) that is the parent of the resource to fetch.
     */
    public function __construct(Version $version, string $assistantSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid, ];
    }

    /**
     * Constructs a StyleSheetContext
     */
    public function getContext(): StyleSheetContext {
        return new StyleSheetContext($this->version, $this->solution['assistantSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Autopilot.V1.StyleSheetList]';
    }
}
