<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trusthub\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsChannelEndpointAssignmentList;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEvaluationsList;
use Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEntityAssignmentsList;


/**
 * @property TrustProductsChannelEndpointAssignmentList $trustProductsChannelEndpointAssignment
 * @property TrustProductsEvaluationsList $trustProductsEvaluations
 * @property TrustProductsEntityAssignmentsList $trustProductsEntityAssignments
 * @method \Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsChannelEndpointAssignmentContext trustProductsChannelEndpointAssignment(string $sid)
 * @method \Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEntityAssignmentsContext trustProductsEntityAssignments(string $sid)
 * @method \Twilio\Rest\Trusthub\V1\TrustProducts\TrustProductsEvaluationsContext trustProductsEvaluations(string $sid)
 */
class TrustProductsContext extends InstanceContext {
    protected $_trustProductsChannelEndpointAssignment;
    protected $_trustProductsEvaluations;
    protected $_trustProductsEntityAssignments;

    /**
     * Initialize the TrustProductsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The unique string that we created to identify the Customer-Profile resource.
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/TrustProducts/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the TrustProductsInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the TrustProductsInstance
     *
     * @return TrustProductsInstance Fetched TrustProductsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TrustProductsInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new TrustProductsInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the TrustProductsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TrustProductsInstance Updated TrustProductsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): TrustProductsInstance {
        $options = new Values($options);

        $data = Values::of([
            'Status' => $options['status'],
            'StatusCallback' => $options['statusCallback'],
            'FriendlyName' => $options['friendlyName'],
            'Email' => $options['email'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new TrustProductsInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the trustProductsChannelEndpointAssignment
     */
    protected function getTrustProductsChannelEndpointAssignment(): TrustProductsChannelEndpointAssignmentList {
        if (!$this->_trustProductsChannelEndpointAssignment) {
            $this->_trustProductsChannelEndpointAssignment = new TrustProductsChannelEndpointAssignmentList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_trustProductsChannelEndpointAssignment;
    }

    /**
     * Access the trustProductsEvaluations
     */
    protected function getTrustProductsEvaluations(): TrustProductsEvaluationsList {
        if (!$this->_trustProductsEvaluations) {
            $this->_trustProductsEvaluations = new TrustProductsEvaluationsList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_trustProductsEvaluations;
    }

    /**
     * Access the trustProductsEntityAssignments
     */
    protected function getTrustProductsEntityAssignments(): TrustProductsEntityAssignmentsList {
        if (!$this->_trustProductsEntityAssignments) {
            $this->_trustProductsEntityAssignments = new TrustProductsEntityAssignmentsList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_trustProductsEntityAssignments;
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
        return '[Twilio.Trusthub.V1.TrustProductsContext ' . \implode(' ', $context) . ']';
    }
}
