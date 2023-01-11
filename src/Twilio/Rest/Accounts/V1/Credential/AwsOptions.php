<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Accounts
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Accounts\V1\Credential;

use Twilio\Options;
use Twilio\Values;

abstract class AwsOptions {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long. 
     * @param string $accountSid The SID of the Subaccount that this Credential should be associated with. Must be a valid Subaccount of the account issuing the request. 
     * @return CreateAwsOptions Options builder
     */
    public static function create(string $friendlyName = Values::NONE, string $accountSid = Values::NONE): CreateAwsOptions {
        return new CreateAwsOptions($friendlyName, $accountSid);
    }




    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long. 
     * @return UpdateAwsOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE): UpdateAwsOptions {
        return new UpdateAwsOptions($friendlyName);
    }

}

class CreateAwsOptions extends Options {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @param string $accountSid The SID of the Subaccount that this Credential should be associated with. Must be a valid Subaccount of the account issuing the request.
     */
    public function __construct(string $friendlyName = Values::NONE, string $accountSid = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['accountSid'] = $accountSid;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The SID of the Subaccount that this Credential should be associated with. Must be a valid Subaccount of the account issuing the request.
     *
     * @param string $accountSid The SID of the Subaccount that this Credential should be associated with. Must be a valid Subaccount of the account issuing the request.
     * @return $this Fluent Builder
     */
    public function setAccountSid(string $accountSid): self {
        $this->options['accountSid'] = $accountSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Accounts.V1.CreateAwsOptions ' . $options . ']';
    }
}




class UpdateAwsOptions extends Options {
    /**
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     */
    public function __construct(string $friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Accounts.V1.UpdateAwsOptions ' . $options . ']';
    }
}

