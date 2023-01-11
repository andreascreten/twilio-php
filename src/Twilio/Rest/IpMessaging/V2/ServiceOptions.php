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

abstract class ServiceOptions {




    /**
     * @param string $friendlyName  
     * @param string $defaultServiceRoleSid  
     * @param string $defaultChannelRoleSid  
     * @param string $defaultChannelCreatorRoleSid  
     * @param bool $readStatusEnabled  
     * @param bool $reachabilityEnabled  
     * @param int $typingIndicatorTimeout  
     * @param int $consumptionReportInterval  
     * @param bool $notificationsNewMessageEnabled  
     * @param string $notificationsNewMessageTemplate  
     * @param string $notificationsNewMessageSound  
     * @param bool $notificationsNewMessageBadgeCountEnabled  
     * @param bool $notificationsAddedToChannelEnabled  
     * @param string $notificationsAddedToChannelTemplate  
     * @param string $notificationsAddedToChannelSound  
     * @param bool $notificationsRemovedFromChannelEnabled  
     * @param string $notificationsRemovedFromChannelTemplate  
     * @param string $notificationsRemovedFromChannelSound  
     * @param bool $notificationsInvitedToChannelEnabled  
     * @param string $notificationsInvitedToChannelTemplate  
     * @param string $notificationsInvitedToChannelSound  
     * @param string $preWebhookUrl  
     * @param string $postWebhookUrl  
     * @param string $webhookMethod  
     * @param string[] $webhookFilters  
     * @param int $limitsChannelMembers  
     * @param int $limitsUserChannels  
     * @param string $mediaCompatibilityMessage  
     * @param int $preWebhookRetryCount  
     * @param int $postWebhookRetryCount  
     * @param bool $notificationsLogEnabled  
     * @return UpdateServiceOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $defaultServiceRoleSid = Values::NONE, string $defaultChannelRoleSid = Values::NONE, string $defaultChannelCreatorRoleSid = Values::NONE, bool $readStatusEnabled = Values::NONE, bool $reachabilityEnabled = Values::NONE, int $typingIndicatorTimeout = Values::NONE, int $consumptionReportInterval = Values::NONE, bool $notificationsNewMessageEnabled = Values::NONE, string $notificationsNewMessageTemplate = Values::NONE, string $notificationsNewMessageSound = Values::NONE, bool $notificationsNewMessageBadgeCountEnabled = Values::NONE, bool $notificationsAddedToChannelEnabled = Values::NONE, string $notificationsAddedToChannelTemplate = Values::NONE, string $notificationsAddedToChannelSound = Values::NONE, bool $notificationsRemovedFromChannelEnabled = Values::NONE, string $notificationsRemovedFromChannelTemplate = Values::NONE, string $notificationsRemovedFromChannelSound = Values::NONE, bool $notificationsInvitedToChannelEnabled = Values::NONE, string $notificationsInvitedToChannelTemplate = Values::NONE, string $notificationsInvitedToChannelSound = Values::NONE, string $preWebhookUrl = Values::NONE, string $postWebhookUrl = Values::NONE, string $webhookMethod = Values::NONE, array $webhookFilters = Values::ARRAY_NONE, int $limitsChannelMembers = Values::NONE, int $limitsUserChannels = Values::NONE, string $mediaCompatibilityMessage = Values::NONE, int $preWebhookRetryCount = Values::NONE, int $postWebhookRetryCount = Values::NONE, bool $notificationsLogEnabled = Values::NONE): UpdateServiceOptions {
        return new UpdateServiceOptions($friendlyName, $defaultServiceRoleSid, $defaultChannelRoleSid, $defaultChannelCreatorRoleSid, $readStatusEnabled, $reachabilityEnabled, $typingIndicatorTimeout, $consumptionReportInterval, $notificationsNewMessageEnabled, $notificationsNewMessageTemplate, $notificationsNewMessageSound, $notificationsNewMessageBadgeCountEnabled, $notificationsAddedToChannelEnabled, $notificationsAddedToChannelTemplate, $notificationsAddedToChannelSound, $notificationsRemovedFromChannelEnabled, $notificationsRemovedFromChannelTemplate, $notificationsRemovedFromChannelSound, $notificationsInvitedToChannelEnabled, $notificationsInvitedToChannelTemplate, $notificationsInvitedToChannelSound, $preWebhookUrl, $postWebhookUrl, $webhookMethod, $webhookFilters, $limitsChannelMembers, $limitsUserChannels, $mediaCompatibilityMessage, $preWebhookRetryCount, $postWebhookRetryCount, $notificationsLogEnabled);
    }

}





class UpdateServiceOptions extends Options {
    /**
     * @param string $friendlyName 
     * @param string $defaultServiceRoleSid 
     * @param string $defaultChannelRoleSid 
     * @param string $defaultChannelCreatorRoleSid 
     * @param bool $readStatusEnabled 
     * @param bool $reachabilityEnabled 
     * @param int $typingIndicatorTimeout 
     * @param int $consumptionReportInterval 
     * @param bool $notificationsNewMessageEnabled 
     * @param string $notificationsNewMessageTemplate 
     * @param string $notificationsNewMessageSound 
     * @param bool $notificationsNewMessageBadgeCountEnabled 
     * @param bool $notificationsAddedToChannelEnabled 
     * @param string $notificationsAddedToChannelTemplate 
     * @param string $notificationsAddedToChannelSound 
     * @param bool $notificationsRemovedFromChannelEnabled 
     * @param string $notificationsRemovedFromChannelTemplate 
     * @param string $notificationsRemovedFromChannelSound 
     * @param bool $notificationsInvitedToChannelEnabled 
     * @param string $notificationsInvitedToChannelTemplate 
     * @param string $notificationsInvitedToChannelSound 
     * @param string $preWebhookUrl 
     * @param string $postWebhookUrl 
     * @param string $webhookMethod 
     * @param string[] $webhookFilters 
     * @param int $limitsChannelMembers 
     * @param int $limitsUserChannels 
     * @param string $mediaCompatibilityMessage 
     * @param int $preWebhookRetryCount 
     * @param int $postWebhookRetryCount 
     * @param bool $notificationsLogEnabled 
     */
    public function __construct(string $friendlyName = Values::NONE, string $defaultServiceRoleSid = Values::NONE, string $defaultChannelRoleSid = Values::NONE, string $defaultChannelCreatorRoleSid = Values::NONE, bool $readStatusEnabled = Values::NONE, bool $reachabilityEnabled = Values::NONE, int $typingIndicatorTimeout = Values::NONE, int $consumptionReportInterval = Values::NONE, bool $notificationsNewMessageEnabled = Values::NONE, string $notificationsNewMessageTemplate = Values::NONE, string $notificationsNewMessageSound = Values::NONE, bool $notificationsNewMessageBadgeCountEnabled = Values::NONE, bool $notificationsAddedToChannelEnabled = Values::NONE, string $notificationsAddedToChannelTemplate = Values::NONE, string $notificationsAddedToChannelSound = Values::NONE, bool $notificationsRemovedFromChannelEnabled = Values::NONE, string $notificationsRemovedFromChannelTemplate = Values::NONE, string $notificationsRemovedFromChannelSound = Values::NONE, bool $notificationsInvitedToChannelEnabled = Values::NONE, string $notificationsInvitedToChannelTemplate = Values::NONE, string $notificationsInvitedToChannelSound = Values::NONE, string $preWebhookUrl = Values::NONE, string $postWebhookUrl = Values::NONE, string $webhookMethod = Values::NONE, array $webhookFilters = Values::ARRAY_NONE, int $limitsChannelMembers = Values::NONE, int $limitsUserChannels = Values::NONE, string $mediaCompatibilityMessage = Values::NONE, int $preWebhookRetryCount = Values::NONE, int $postWebhookRetryCount = Values::NONE, bool $notificationsLogEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['defaultServiceRoleSid'] = $defaultServiceRoleSid;
        $this->options['defaultChannelRoleSid'] = $defaultChannelRoleSid;
        $this->options['defaultChannelCreatorRoleSid'] = $defaultChannelCreatorRoleSid;
        $this->options['readStatusEnabled'] = $readStatusEnabled;
        $this->options['reachabilityEnabled'] = $reachabilityEnabled;
        $this->options['typingIndicatorTimeout'] = $typingIndicatorTimeout;
        $this->options['consumptionReportInterval'] = $consumptionReportInterval;
        $this->options['notificationsNewMessageEnabled'] = $notificationsNewMessageEnabled;
        $this->options['notificationsNewMessageTemplate'] = $notificationsNewMessageTemplate;
        $this->options['notificationsNewMessageSound'] = $notificationsNewMessageSound;
        $this->options['notificationsNewMessageBadgeCountEnabled'] = $notificationsNewMessageBadgeCountEnabled;
        $this->options['notificationsAddedToChannelEnabled'] = $notificationsAddedToChannelEnabled;
        $this->options['notificationsAddedToChannelTemplate'] = $notificationsAddedToChannelTemplate;
        $this->options['notificationsAddedToChannelSound'] = $notificationsAddedToChannelSound;
        $this->options['notificationsRemovedFromChannelEnabled'] = $notificationsRemovedFromChannelEnabled;
        $this->options['notificationsRemovedFromChannelTemplate'] = $notificationsRemovedFromChannelTemplate;
        $this->options['notificationsRemovedFromChannelSound'] = $notificationsRemovedFromChannelSound;
        $this->options['notificationsInvitedToChannelEnabled'] = $notificationsInvitedToChannelEnabled;
        $this->options['notificationsInvitedToChannelTemplate'] = $notificationsInvitedToChannelTemplate;
        $this->options['notificationsInvitedToChannelSound'] = $notificationsInvitedToChannelSound;
        $this->options['preWebhookUrl'] = $preWebhookUrl;
        $this->options['postWebhookUrl'] = $postWebhookUrl;
        $this->options['webhookMethod'] = $webhookMethod;
        $this->options['webhookFilters'] = $webhookFilters;
        $this->options['limitsChannelMembers'] = $limitsChannelMembers;
        $this->options['limitsUserChannels'] = $limitsUserChannels;
        $this->options['mediaCompatibilityMessage'] = $mediaCompatibilityMessage;
        $this->options['preWebhookRetryCount'] = $preWebhookRetryCount;
        $this->options['postWebhookRetryCount'] = $postWebhookRetryCount;
        $this->options['notificationsLogEnabled'] = $notificationsLogEnabled;
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
     * @param string $defaultServiceRoleSid 
     * @return $this Fluent Builder
     */
    public function setDefaultServiceRoleSid(string $defaultServiceRoleSid): self {
        $this->options['defaultServiceRoleSid'] = $defaultServiceRoleSid;
        return $this;
    }

    /**
     * 
     *
     * @param string $defaultChannelRoleSid 
     * @return $this Fluent Builder
     */
    public function setDefaultChannelRoleSid(string $defaultChannelRoleSid): self {
        $this->options['defaultChannelRoleSid'] = $defaultChannelRoleSid;
        return $this;
    }

    /**
     * 
     *
     * @param string $defaultChannelCreatorRoleSid 
     * @return $this Fluent Builder
     */
    public function setDefaultChannelCreatorRoleSid(string $defaultChannelCreatorRoleSid): self {
        $this->options['defaultChannelCreatorRoleSid'] = $defaultChannelCreatorRoleSid;
        return $this;
    }

    /**
     * 
     *
     * @param bool $readStatusEnabled 
     * @return $this Fluent Builder
     */
    public function setReadStatusEnabled(bool $readStatusEnabled): self {
        $this->options['readStatusEnabled'] = $readStatusEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param bool $reachabilityEnabled 
     * @return $this Fluent Builder
     */
    public function setReachabilityEnabled(bool $reachabilityEnabled): self {
        $this->options['reachabilityEnabled'] = $reachabilityEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param int $typingIndicatorTimeout 
     * @return $this Fluent Builder
     */
    public function setTypingIndicatorTimeout(int $typingIndicatorTimeout): self {
        $this->options['typingIndicatorTimeout'] = $typingIndicatorTimeout;
        return $this;
    }

    /**
     * 
     *
     * @param int $consumptionReportInterval 
     * @return $this Fluent Builder
     */
    public function setConsumptionReportInterval(int $consumptionReportInterval): self {
        $this->options['consumptionReportInterval'] = $consumptionReportInterval;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsNewMessageEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsNewMessageEnabled(bool $notificationsNewMessageEnabled): self {
        $this->options['notificationsNewMessageEnabled'] = $notificationsNewMessageEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsNewMessageTemplate 
     * @return $this Fluent Builder
     */
    public function setNotificationsNewMessageTemplate(string $notificationsNewMessageTemplate): self {
        $this->options['notificationsNewMessageTemplate'] = $notificationsNewMessageTemplate;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsNewMessageSound 
     * @return $this Fluent Builder
     */
    public function setNotificationsNewMessageSound(string $notificationsNewMessageSound): self {
        $this->options['notificationsNewMessageSound'] = $notificationsNewMessageSound;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsNewMessageBadgeCountEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsNewMessageBadgeCountEnabled(bool $notificationsNewMessageBadgeCountEnabled): self {
        $this->options['notificationsNewMessageBadgeCountEnabled'] = $notificationsNewMessageBadgeCountEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsAddedToChannelEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsAddedToChannelEnabled(bool $notificationsAddedToChannelEnabled): self {
        $this->options['notificationsAddedToChannelEnabled'] = $notificationsAddedToChannelEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsAddedToChannelTemplate 
     * @return $this Fluent Builder
     */
    public function setNotificationsAddedToChannelTemplate(string $notificationsAddedToChannelTemplate): self {
        $this->options['notificationsAddedToChannelTemplate'] = $notificationsAddedToChannelTemplate;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsAddedToChannelSound 
     * @return $this Fluent Builder
     */
    public function setNotificationsAddedToChannelSound(string $notificationsAddedToChannelSound): self {
        $this->options['notificationsAddedToChannelSound'] = $notificationsAddedToChannelSound;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsRemovedFromChannelEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsRemovedFromChannelEnabled(bool $notificationsRemovedFromChannelEnabled): self {
        $this->options['notificationsRemovedFromChannelEnabled'] = $notificationsRemovedFromChannelEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsRemovedFromChannelTemplate 
     * @return $this Fluent Builder
     */
    public function setNotificationsRemovedFromChannelTemplate(string $notificationsRemovedFromChannelTemplate): self {
        $this->options['notificationsRemovedFromChannelTemplate'] = $notificationsRemovedFromChannelTemplate;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsRemovedFromChannelSound 
     * @return $this Fluent Builder
     */
    public function setNotificationsRemovedFromChannelSound(string $notificationsRemovedFromChannelSound): self {
        $this->options['notificationsRemovedFromChannelSound'] = $notificationsRemovedFromChannelSound;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsInvitedToChannelEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsInvitedToChannelEnabled(bool $notificationsInvitedToChannelEnabled): self {
        $this->options['notificationsInvitedToChannelEnabled'] = $notificationsInvitedToChannelEnabled;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsInvitedToChannelTemplate 
     * @return $this Fluent Builder
     */
    public function setNotificationsInvitedToChannelTemplate(string $notificationsInvitedToChannelTemplate): self {
        $this->options['notificationsInvitedToChannelTemplate'] = $notificationsInvitedToChannelTemplate;
        return $this;
    }

    /**
     * 
     *
     * @param string $notificationsInvitedToChannelSound 
     * @return $this Fluent Builder
     */
    public function setNotificationsInvitedToChannelSound(string $notificationsInvitedToChannelSound): self {
        $this->options['notificationsInvitedToChannelSound'] = $notificationsInvitedToChannelSound;
        return $this;
    }

    /**
     * 
     *
     * @param string $preWebhookUrl 
     * @return $this Fluent Builder
     */
    public function setPreWebhookUrl(string $preWebhookUrl): self {
        $this->options['preWebhookUrl'] = $preWebhookUrl;
        return $this;
    }

    /**
     * 
     *
     * @param string $postWebhookUrl 
     * @return $this Fluent Builder
     */
    public function setPostWebhookUrl(string $postWebhookUrl): self {
        $this->options['postWebhookUrl'] = $postWebhookUrl;
        return $this;
    }

    /**
     * 
     *
     * @param string $webhookMethod 
     * @return $this Fluent Builder
     */
    public function setWebhookMethod(string $webhookMethod): self {
        $this->options['webhookMethod'] = $webhookMethod;
        return $this;
    }

    /**
     * 
     *
     * @param string[] $webhookFilters 
     * @return $this Fluent Builder
     */
    public function setWebhookFilters(array $webhookFilters): self {
        $this->options['webhookFilters'] = $webhookFilters;
        return $this;
    }

    /**
     * 
     *
     * @param int $limitsChannelMembers 
     * @return $this Fluent Builder
     */
    public function setLimitsChannelMembers(int $limitsChannelMembers): self {
        $this->options['limitsChannelMembers'] = $limitsChannelMembers;
        return $this;
    }

    /**
     * 
     *
     * @param int $limitsUserChannels 
     * @return $this Fluent Builder
     */
    public function setLimitsUserChannels(int $limitsUserChannels): self {
        $this->options['limitsUserChannels'] = $limitsUserChannels;
        return $this;
    }

    /**
     * 
     *
     * @param string $mediaCompatibilityMessage 
     * @return $this Fluent Builder
     */
    public function setMediaCompatibilityMessage(string $mediaCompatibilityMessage): self {
        $this->options['mediaCompatibilityMessage'] = $mediaCompatibilityMessage;
        return $this;
    }

    /**
     * 
     *
     * @param int $preWebhookRetryCount 
     * @return $this Fluent Builder
     */
    public function setPreWebhookRetryCount(int $preWebhookRetryCount): self {
        $this->options['preWebhookRetryCount'] = $preWebhookRetryCount;
        return $this;
    }

    /**
     * 
     *
     * @param int $postWebhookRetryCount 
     * @return $this Fluent Builder
     */
    public function setPostWebhookRetryCount(int $postWebhookRetryCount): self {
        $this->options['postWebhookRetryCount'] = $postWebhookRetryCount;
        return $this;
    }

    /**
     * 
     *
     * @param bool $notificationsLogEnabled 
     * @return $this Fluent Builder
     */
    public function setNotificationsLogEnabled(bool $notificationsLogEnabled): self {
        $this->options['notificationsLogEnabled'] = $notificationsLogEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.UpdateServiceOptions ' . $options . ']';
    }
}

