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

namespace Twilio\Rest\IpMessaging\V2;

use Twilio\Options;
use Twilio\Values;

abstract class CredentialOptions {
    /**
     * @param string $friendlyName  
     * @param string $certificate  
     * @param string $privateKey  
     * @param bool $sandbox  
     * @param string $apiKey  
     * @param string $secret  
     * @return CreateCredentialOptions Options builder
     */
    public static function create(string $friendlyName = Values::NONE, string $certificate = Values::NONE, string $privateKey = Values::NONE, bool $sandbox = Values::NONE, string $apiKey = Values::NONE, string $secret = Values::NONE): CreateCredentialOptions {
        return new CreateCredentialOptions($friendlyName, $certificate, $privateKey, $sandbox, $apiKey, $secret);
    }




    /**
     * @param string $friendlyName  
     * @param string $certificate  
     * @param string $privateKey  
     * @param bool $sandbox  
     * @param string $apiKey  
     * @param string $secret  
     * @return UpdateCredentialOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $certificate = Values::NONE, string $privateKey = Values::NONE, bool $sandbox = Values::NONE, string $apiKey = Values::NONE, string $secret = Values::NONE): UpdateCredentialOptions {
        return new UpdateCredentialOptions($friendlyName, $certificate, $privateKey, $sandbox, $apiKey, $secret);
    }

}

class CreateCredentialOptions extends Options {
    /**
     * @param string $friendlyName 
     * @param string $certificate 
     * @param string $privateKey 
     * @param bool $sandbox 
     * @param string $apiKey 
     * @param string $secret 
     */
    public function __construct(string $friendlyName = Values::NONE, string $certificate = Values::NONE, string $privateKey = Values::NONE, bool $sandbox = Values::NONE, string $apiKey = Values::NONE, string $secret = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['certificate'] = $certificate;
        $this->options['privateKey'] = $privateKey;
        $this->options['sandbox'] = $sandbox;
        $this->options['apiKey'] = $apiKey;
        $this->options['secret'] = $secret;
    }

    /**
     * 
     *
     * @param string $friendlyName 
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * 
     *
     * @param string $certificate 
     * @return $this Fluent Builder
     */
    public function setCertificate(string $certificate): self {
        $this->options['certificate'] = $certificate;
        return $this;
    }

    /**
     * 
     *
     * @param string $privateKey 
     * @return $this Fluent Builder
     */
    public function setPrivateKey(string $privateKey): self {
        $this->options['privateKey'] = $privateKey;
        return $this;
    }

    /**
     * 
     *
     * @param bool $sandbox 
     * @return $this Fluent Builder
     */
    public function setSandbox(bool $sandbox): self {
        $this->options['sandbox'] = $sandbox;
        return $this;
    }

    /**
     * 
     *
     * @param string $apiKey 
     * @return $this Fluent Builder
     */
    public function setApiKey(string $apiKey): self {
        $this->options['apiKey'] = $apiKey;
        return $this;
    }

    /**
     * 
     *
     * @param string $secret 
     * @return $this Fluent Builder
     */
    public function setSecret(string $secret): self {
        $this->options['secret'] = $secret;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.CreateCredentialOptions ' . $options . ']';
    }
}




class UpdateCredentialOptions extends Options {
    /**
     * @param string $friendlyName 
     * @param string $certificate 
     * @param string $privateKey 
     * @param bool $sandbox 
     * @param string $apiKey 
     * @param string $secret 
     */
    public function __construct(string $friendlyName = Values::NONE, string $certificate = Values::NONE, string $privateKey = Values::NONE, bool $sandbox = Values::NONE, string $apiKey = Values::NONE, string $secret = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['certificate'] = $certificate;
        $this->options['privateKey'] = $privateKey;
        $this->options['sandbox'] = $sandbox;
        $this->options['apiKey'] = $apiKey;
        $this->options['secret'] = $secret;
    }

    /**
     * 
     *
     * @param string $friendlyName 
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * 
     *
     * @param string $certificate 
     * @return $this Fluent Builder
     */
    public function setCertificate(string $certificate): self {
        $this->options['certificate'] = $certificate;
        return $this;
    }

    /**
     * 
     *
     * @param string $privateKey 
     * @return $this Fluent Builder
     */
    public function setPrivateKey(string $privateKey): self {
        $this->options['privateKey'] = $privateKey;
        return $this;
    }

    /**
     * 
     *
     * @param bool $sandbox 
     * @return $this Fluent Builder
     */
    public function setSandbox(bool $sandbox): self {
        $this->options['sandbox'] = $sandbox;
        return $this;
    }

    /**
     * 
     *
     * @param string $apiKey 
     * @return $this Fluent Builder
     */
    public function setApiKey(string $apiKey): self {
        $this->options['apiKey'] = $apiKey;
        return $this;
    }

    /**
     * 
     *
     * @param string $secret 
     * @return $this Fluent Builder
     */
    public function setSecret(string $secret): self {
        $this->options['secret'] = $secret;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.UpdateCredentialOptions ' . $options . ']';
    }
}

