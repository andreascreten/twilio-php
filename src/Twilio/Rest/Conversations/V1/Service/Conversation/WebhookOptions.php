<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1\Service\Conversation;

use Twilio\Options;
use Twilio\Values;

abstract class WebhookOptions {
    /**
     * @param string $configurationUrl The absolute url the webhook request should be sent to. 
     * @param string $configurationMethod  
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation. 
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation. 
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to. 
     * @param int $configurationReplayAfter The message index for which and it's successors the webhook will be replayed. Not set by default 
     * @return CreateWebhookOptions Options builder
     */
    public static function create(string $configurationUrl = Values::NONE, string $configurationMethod = Values::NONE, array $configurationFilters = Values::ARRAY_NONE, array $configurationTriggers = Values::ARRAY_NONE, string $configurationFlowSid = Values::NONE, int $configurationReplayAfter = Values::NONE): CreateWebhookOptions {
        return new CreateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid, $configurationReplayAfter);
    }




    /**
     * @param string $configurationUrl The absolute url the webhook request should be sent to. 
     * @param string $configurationMethod  
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation. 
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation. 
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to. 
     * @return UpdateWebhookOptions Options builder
     */
    public static function update(string $configurationUrl = Values::NONE, string $configurationMethod = Values::NONE, array $configurationFilters = Values::ARRAY_NONE, array $configurationTriggers = Values::ARRAY_NONE, string $configurationFlowSid = Values::NONE): UpdateWebhookOptions {
        return new UpdateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid);
    }

}

class CreateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The absolute url the webhook request should be sent to.
     * @param string $configurationMethod 
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation.
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation.
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to.
     * @param int $configurationReplayAfter The message index for which and it's successors the webhook will be replayed. Not set by default
     */
    public function __construct(string $configurationUrl = Values::NONE, string $configurationMethod = Values::NONE, array $configurationFilters = Values::ARRAY_NONE, array $configurationTriggers = Values::ARRAY_NONE, string $configurationFlowSid = Values::NONE, int $configurationReplayAfter = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationReplayAfter'] = $configurationReplayAfter;
    }

    /**
     * The absolute url the webhook request should be sent to.
     *
     * @param string $configurationUrl The absolute url the webhook request should be sent to.
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl(string $configurationUrl): self {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * @param string $configurationMethod 
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod(string $configurationMethod): self {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The list of events, firing webhook event for this Conversation.
     *
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation.
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters(array $configurationFilters): self {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * The list of keywords, firing webhook event for this Conversation.
     *
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation.
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers(array $configurationTriggers): self {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The studio flow SID, where the webhook should be sent to.
     *
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to.
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid(string $configurationFlowSid): self {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The message index for which and it's successors the webhook will be replayed. Not set by default
     *
     * @param int $configurationReplayAfter The message index for which and it's successors the webhook will be replayed. Not set by default
     * @return $this Fluent Builder
     */
    public function setConfigurationReplayAfter(int $configurationReplayAfter): self {
        $this->options['configurationReplayAfter'] = $configurationReplayAfter;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.CreateWebhookOptions ' . $options . ']';
    }
}




class UpdateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The absolute url the webhook request should be sent to.
     * @param string $configurationMethod 
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation.
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation.
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to.
     */
    public function __construct(string $configurationUrl = Values::NONE, string $configurationMethod = Values::NONE, array $configurationFilters = Values::ARRAY_NONE, array $configurationTriggers = Values::ARRAY_NONE, string $configurationFlowSid = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
    }

    /**
     * The absolute url the webhook request should be sent to.
     *
     * @param string $configurationUrl The absolute url the webhook request should be sent to.
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl(string $configurationUrl): self {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * @param string $configurationMethod 
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod(string $configurationMethod): self {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The list of events, firing webhook event for this Conversation.
     *
     * @param string[] $configurationFilters The list of events, firing webhook event for this Conversation.
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters(array $configurationFilters): self {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * The list of keywords, firing webhook event for this Conversation.
     *
     * @param string[] $configurationTriggers The list of keywords, firing webhook event for this Conversation.
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers(array $configurationTriggers): self {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The studio flow SID, where the webhook should be sent to.
     *
     * @param string $configurationFlowSid The studio flow SID, where the webhook should be sent to.
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid(string $configurationFlowSid): self {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.UpdateWebhookOptions ' . $options . ']';
    }
}

