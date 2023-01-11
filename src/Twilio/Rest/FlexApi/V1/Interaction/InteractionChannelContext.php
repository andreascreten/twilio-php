<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\FlexApi\V1\Interaction;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\FlexApi\V1\Interaction\InteractionChannel\InteractionChannelParticipantList;
use Twilio\Rest\FlexApi\V1\Interaction\InteractionChannel\InteractionChannelInviteList;


/**
 * @property InteractionChannelParticipantList $participants
 * @property InteractionChannelInviteList $invites
 * @method \Twilio\Rest\FlexApi\V1\Interaction\InteractionChannel\InteractionChannelParticipantContext participants(string $sid)
 */
class InteractionChannelContext extends InstanceContext {
    protected $_participants;
    protected $_invites;

    /**
     * Initialize the InteractionChannelContext
     *
     * @param Version $version Version that contains the resource
     * @param string $interactionSid The unique string created by Twilio to identify an Interaction resource, prefixed with KD.
     * @param string $sid The unique string created by Twilio to identify an Interaction Channel resource, prefixed with UO.
     */
    public function __construct(Version $version, $interactionSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['interactionSid' => $interactionSid,  'sid' => $sid,  ];

        $this->uri = '/Interactions/' . \rawurlencode($interactionSid) . '/Channels/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the InteractionChannelInstance
     *
     * @return InteractionChannelInstance Fetched InteractionChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): InteractionChannelInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new InteractionChannelInstance(
            $this->version,
            $payload
            , $this->solution['interactionSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the InteractionChannelInstance
     *
     * @param string $status 
     * @param array|Options $options Optional Arguments
     * @return InteractionChannelInstance Updated InteractionChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status, array $options = []): InteractionChannelInstance {
        $options = new Values($options);

        $data = Values::of([
            'Status' => $status,
            'Routing' => Serialize::jsonObject($options['routing']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new InteractionChannelInstance(
            $this->version,
            $payload
            , $this->solution['interactionSid']
            , $this->solution['sid']
        );
    }

    /**
     * Access the participants
     */
    protected function getParticipants(): InteractionChannelParticipantList {
        if (!$this->_participants) {
            $this->_participants = new InteractionChannelParticipantList(
                $this->version
                , $this->solution['interactionSid']
                , $this->solution['sid']
            );
        }

        return $this->_participants;
    }

    /**
     * Access the invites
     */
    protected function getInvites(): InteractionChannelInviteList {
        if (!$this->_invites) {
            $this->_invites = new InteractionChannelInviteList(
                $this->version
                , $this->solution['interactionSid']
                , $this->solution['sid']
            );
        }

        return $this->_invites;
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
        return '[Twilio.FlexApi.V1.InteractionChannelContext ' . \implode(' ', $context) . ']';
    }
}
