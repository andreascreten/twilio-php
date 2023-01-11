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

use Twilio\Options;
use Twilio\Values;

abstract class PlaybackGrantOptions {
    /**
     * @param int $ttl The time to live of the PlaybackGrant. Default value is 15 seconds. Maximum value is 60 seconds. 
     * @param string $accessControlAllowOrigin The full origin URL where the livestream can be streamed. If this is not provided, it can be streamed from any domain. 
     * @return CreatePlaybackGrantOptions Options builder
     */
    public static function create(int $ttl = Values::NONE, string $accessControlAllowOrigin = Values::NONE): CreatePlaybackGrantOptions {
        return new CreatePlaybackGrantOptions($ttl, $accessControlAllowOrigin);
    }


}

class CreatePlaybackGrantOptions extends Options {
    /**
     * @param int $ttl The time to live of the PlaybackGrant. Default value is 15 seconds. Maximum value is 60 seconds.
     * @param string $accessControlAllowOrigin The full origin URL where the livestream can be streamed. If this is not provided, it can be streamed from any domain.
     */
    public function __construct(int $ttl = Values::NONE, string $accessControlAllowOrigin = Values::NONE) {
        $this->options['ttl'] = $ttl;
        $this->options['accessControlAllowOrigin'] = $accessControlAllowOrigin;
    }

    /**
     * The time to live of the PlaybackGrant. Default value is 15 seconds. Maximum value is 60 seconds.
     *
     * @param int $ttl The time to live of the PlaybackGrant. Default value is 15 seconds. Maximum value is 60 seconds.
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * The full origin URL where the livestream can be streamed. If this is not provided, it can be streamed from any domain.
     *
     * @param string $accessControlAllowOrigin The full origin URL where the livestream can be streamed. If this is not provided, it can be streamed from any domain.
     * @return $this Fluent Builder
     */
    public function setAccessControlAllowOrigin(string $accessControlAllowOrigin): self {
        $this->options['accessControlAllowOrigin'] = $accessControlAllowOrigin;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Media.V1.CreatePlaybackGrantOptions ' . $options . ']';
    }
}


