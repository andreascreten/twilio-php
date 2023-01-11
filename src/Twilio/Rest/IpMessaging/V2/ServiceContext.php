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

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\IpMessaging\V2\Service\ChannelList;
use Twilio\Rest\IpMessaging\V2\Service\BindingList;
use Twilio\Rest\IpMessaging\V2\Service\RoleList;
use Twilio\Rest\IpMessaging\V2\Service\UserList;


/**
 * @property ChannelList $channels
 * @property BindingList $bindings
 * @property RoleList $roles
 * @property UserList $users
 * @method \Twilio\Rest\IpMessaging\V2\Service\BindingContext bindings(string $sid)
 * @method \Twilio\Rest\IpMessaging\V2\Service\ChannelContext channels(string $sid)
 * @method \Twilio\Rest\IpMessaging\V2\Service\RoleContext roles(string $sid)
 * @method \Twilio\Rest\IpMessaging\V2\Service\UserContext users(string $sid)
 */
class ServiceContext extends InstanceContext {
    protected $_channels;
    protected $_bindings;
    protected $_roles;
    protected $_users;

    /**
     * Initialize the ServiceContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid 
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/Services/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ServiceInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new ServiceInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ServiceInstance {
        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' => $options['friendlyName'],
            'DefaultServiceRoleSid' => $options['defaultServiceRoleSid'],
            'DefaultChannelRoleSid' => $options['defaultChannelRoleSid'],
            'DefaultChannelCreatorRoleSid' => $options['defaultChannelCreatorRoleSid'],
            'ReadStatusEnabled' => Serialize::booleanToString($options['readStatusEnabled']),
            'ReachabilityEnabled' => Serialize::booleanToString($options['reachabilityEnabled']),
            'TypingIndicatorTimeout' => $options['typingIndicatorTimeout'],
            'ConsumptionReportInterval' => $options['consumptionReportInterval'],
            'Notifications.NewMessage.Enabled' => Serialize::booleanToString($options['notificationsNewMessageEnabled']),
            'Notifications.NewMessage.Template' => $options['notificationsNewMessageTemplate'],
            'Notifications.NewMessage.Sound' => $options['notificationsNewMessageSound'],
            'Notifications.NewMessage.BadgeCountEnabled' => Serialize::booleanToString($options['notificationsNewMessageBadgeCountEnabled']),
            'Notifications.AddedToChannel.Enabled' => Serialize::booleanToString($options['notificationsAddedToChannelEnabled']),
            'Notifications.AddedToChannel.Template' => $options['notificationsAddedToChannelTemplate'],
            'Notifications.AddedToChannel.Sound' => $options['notificationsAddedToChannelSound'],
            'Notifications.RemovedFromChannel.Enabled' => Serialize::booleanToString($options['notificationsRemovedFromChannelEnabled']),
            'Notifications.RemovedFromChannel.Template' => $options['notificationsRemovedFromChannelTemplate'],
            'Notifications.RemovedFromChannel.Sound' => $options['notificationsRemovedFromChannelSound'],
            'Notifications.InvitedToChannel.Enabled' => Serialize::booleanToString($options['notificationsInvitedToChannelEnabled']),
            'Notifications.InvitedToChannel.Template' => $options['notificationsInvitedToChannelTemplate'],
            'Notifications.InvitedToChannel.Sound' => $options['notificationsInvitedToChannelSound'],
            'PreWebhookUrl' => $options['preWebhookUrl'],
            'PostWebhookUrl' => $options['postWebhookUrl'],
            'WebhookMethod' => $options['webhookMethod'],
            'WebhookFilters' => Serialize::map($options['webhookFilters'], function($e) { return $e; }),
            'Limits.ChannelMembers' => $options['limitsChannelMembers'],
            'Limits.UserChannels' => $options['limitsUserChannels'],
            'Media.CompatibilityMessage' => $options['mediaCompatibilityMessage'],
            'PreWebhookRetryCount' => $options['preWebhookRetryCount'],
            'PostWebhookRetryCount' => $options['postWebhookRetryCount'],
            'Notifications.LogEnabled' => Serialize::booleanToString($options['notificationsLogEnabled']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ServiceInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the channels
     */
    protected function getChannels(): ChannelList {
        if (!$this->_channels) {
            $this->_channels = new ChannelList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_channels;
    }

    /**
     * Access the bindings
     */
    protected function getBindings(): BindingList {
        if (!$this->_bindings) {
            $this->_bindings = new BindingList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_bindings;
    }

    /**
     * Access the roles
     */
    protected function getRoles(): RoleList {
        if (!$this->_roles) {
            $this->_roles = new RoleList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_roles;
    }

    /**
     * Access the users
     */
    protected function getUsers(): UserList {
        if (!$this->_users) {
            $this->_users = new UserList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_users;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.IpMessaging.V2.ServiceContext ' . \implode(' ', $context) . ']';
    }
}
