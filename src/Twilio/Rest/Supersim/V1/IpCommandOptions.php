<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Options;
use Twilio\Values;

abstract class IpCommandOptions {
    /**
     * @param string $payloadType  
     * @param string $callbackUrl The URL we should call using the `callback_method` after we have sent the IP Command. 
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be `GET` or `POST`, and the default is `POST`. 
     * @return CreateIpCommandOptions Options builder
     */
    public static function create(string $payloadType = Values::NONE, string $callbackUrl = Values::NONE, string $callbackMethod = Values::NONE): CreateIpCommandOptions {
        return new CreateIpCommandOptions($payloadType, $callbackUrl, $callbackMethod);
    }


    /**
     * @param string $sim The SID or unique name of the Sim resource that IP Command was sent to or from. 
     * @param string $simIccid The ICCID of the Sim resource that IP Command was sent to or from. 
     * @param string $status The status of the IP Command. Can be: `queued`, `sent`, `received` or `failed`. See the [IP Command Status Values](https://www.twilio.com/docs/wireless/api/ipcommand-resource#status-values) for a description of each. 
     * @param string $direction The direction of the IP Command. Can be `to_sim` or `from_sim`. The value of `to_sim` is synonymous with the term `mobile terminated`, and `from_sim` is synonymous with the term `mobile originated`. 
     * @return ReadIpCommandOptions Options builder
     */
    public static function read(string $sim = Values::NONE, string $simIccid = Values::NONE, string $status = Values::NONE, string $direction = Values::NONE): ReadIpCommandOptions {
        return new ReadIpCommandOptions($sim, $simIccid, $status, $direction);
    }

}

class CreateIpCommandOptions extends Options {
    /**
     * @param string $payloadType 
     * @param string $callbackUrl The URL we should call using the `callback_method` after we have sent the IP Command.
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be `GET` or `POST`, and the default is `POST`.
     */
    public function __construct(string $payloadType = Values::NONE, string $callbackUrl = Values::NONE, string $callbackMethod = Values::NONE) {
        $this->options['payloadType'] = $payloadType;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['callbackMethod'] = $callbackMethod;
    }

    /**
     * @param string $payloadType 
     * @return $this Fluent Builder
     */
    public function setPayloadType(string $payloadType): self {
        $this->options['payloadType'] = $payloadType;
        return $this;
    }

    /**
     * The URL we should call using the `callback_method` after we have sent the IP Command.
     *
     * @param string $callbackUrl The URL we should call using the `callback_method` after we have sent the IP Command.
     * @return $this Fluent Builder
     */
    public function setCallbackUrl(string $callbackUrl): self {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * The HTTP method we should use to call `callback_url`. Can be `GET` or `POST`, and the default is `POST`.
     *
     * @param string $callbackMethod The HTTP method we should use to call `callback_url`. Can be `GET` or `POST`, and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setCallbackMethod(string $callbackMethod): self {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.CreateIpCommandOptions ' . $options . ']';
    }
}


class ReadIpCommandOptions extends Options {
    /**
     * @param string $sim The SID or unique name of the Sim resource that IP Command was sent to or from.
     * @param string $simIccid The ICCID of the Sim resource that IP Command was sent to or from.
     * @param string $status The status of the IP Command. Can be: `queued`, `sent`, `received` or `failed`. See the [IP Command Status Values](https://www.twilio.com/docs/wireless/api/ipcommand-resource#status-values) for a description of each.
     * @param string $direction The direction of the IP Command. Can be `to_sim` or `from_sim`. The value of `to_sim` is synonymous with the term `mobile terminated`, and `from_sim` is synonymous with the term `mobile originated`.
     */
    public function __construct(string $sim = Values::NONE, string $simIccid = Values::NONE, string $status = Values::NONE, string $direction = Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['simIccid'] = $simIccid;
        $this->options['status'] = $status;
        $this->options['direction'] = $direction;
    }

    /**
     * The SID or unique name of the Sim resource that IP Command was sent to or from.
     *
     * @param string $sim The SID or unique name of the Sim resource that IP Command was sent to or from.
     * @return $this Fluent Builder
     */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }

    /**
     * The ICCID of the Sim resource that IP Command was sent to or from.
     *
     * @param string $simIccid The ICCID of the Sim resource that IP Command was sent to or from.
     * @return $this Fluent Builder
     */
    public function setSimIccid(string $simIccid): self {
        $this->options['simIccid'] = $simIccid;
        return $this;
    }

    /**
     * The status of the IP Command. Can be: `queued`, `sent`, `received` or `failed`. See the [IP Command Status Values](https://www.twilio.com/docs/wireless/api/ipcommand-resource#status-values) for a description of each.
     *
     * @param string $status The status of the IP Command. Can be: `queued`, `sent`, `received` or `failed`. See the [IP Command Status Values](https://www.twilio.com/docs/wireless/api/ipcommand-resource#status-values) for a description of each.
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The direction of the IP Command. Can be `to_sim` or `from_sim`. The value of `to_sim` is synonymous with the term `mobile terminated`, and `from_sim` is synonymous with the term `mobile originated`.
     *
     * @param string $direction The direction of the IP Command. Can be `to_sim` or `from_sim`. The value of `to_sim` is synonymous with the term `mobile terminated`, and `from_sim` is synonymous with the term `mobile originated`.
     * @return $this Fluent Builder
     */
    public function setDirection(string $direction): self {
        $this->options['direction'] = $direction;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.ReadIpCommandOptions ' . $options . ']';
    }
}

