<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Media
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Media\V1\PlayerStreamer;

use Twilio\ListResource;
use Twilio\Version;


class PlaybackGrantList extends ListResource {
    /**
     * Construct the PlaybackGrantList
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The unique string generated to identify the PlayerStreamer resource associated with this PlaybackGrant
     */
    public function __construct(Version $version, string $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid, ];
    }

    /**
     * Constructs a PlaybackGrantContext
     */
    public function getContext(): PlaybackGrantContext {
        return new PlaybackGrantContext($this->version, $this->solution['sid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Media.V1.PlaybackGrantList]';
    }
}
