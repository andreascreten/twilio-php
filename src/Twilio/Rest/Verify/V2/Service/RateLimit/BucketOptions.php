<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Verify\V2\Service\RateLimit;

use Twilio\Options;
use Twilio\Values;

abstract class BucketOptions {




    /**
     * @param int $max Maximum number of requests permitted in during the interval. 
     * @param int $interval Number of seconds that the rate limit will be enforced over. 
     * @return UpdateBucketOptions Options builder
     */
    public static function update(int $max = Values::NONE, int $interval = Values::NONE): UpdateBucketOptions {
        return new UpdateBucketOptions($max, $interval);
    }

}





class UpdateBucketOptions extends Options {
    /**
     * @param int $max Maximum number of requests permitted in during the interval.
     * @param int $interval Number of seconds that the rate limit will be enforced over.
     */
    public function __construct(int $max = Values::NONE, int $interval = Values::NONE) {
        $this->options['max'] = $max;
        $this->options['interval'] = $interval;
    }

    /**
     * Maximum number of requests permitted in during the interval.
     *
     * @param int $max Maximum number of requests permitted in during the interval.
     * @return $this Fluent Builder
     */
    public function setMax(int $max): self {
        $this->options['max'] = $max;
        return $this;
    }

    /**
     * Number of seconds that the rate limit will be enforced over.
     *
     * @param int $interval Number of seconds that the rate limit will be enforced over.
     * @return $this Fluent Builder
     */
    public function setInterval(int $interval): self {
        $this->options['interval'] = $interval;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.UpdateBucketOptions ' . $options . ']';
    }
}

