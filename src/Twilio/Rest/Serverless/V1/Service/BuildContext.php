<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Serverless\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Serverless\V1\Service\Build\BuildStatusList;


/**
 * @property BuildStatusList $buildStatus
 * @method \Twilio\Rest\Serverless\V1\Service\Build\BuildStatusContext buildStatus()
 */
class BuildContext extends InstanceContext {
    protected $_buildStatus;

    /**
     * Initialize the BuildContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to create the Build resource under.
     * @param string $sid The SID of the Build resource to delete.
     */
    public function __construct(Version $version, $serviceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid,  'sid' => $sid,  ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Builds/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the BuildInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the BuildInstance
     *
     * @return BuildInstance Fetched BuildInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BuildInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new BuildInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['sid']
        );
    }

    /**
     * Access the buildStatus
     */
    protected function getBuildStatus(): BuildStatusList {
        if (!$this->_buildStatus) {
            $this->_buildStatus = new BuildStatusList(
                $this->version
                , $this->solution['serviceSid']
                , $this->solution['sid']
            );
        }

        return $this->_buildStatus;
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
        return '[Twilio.Serverless.V1.BuildContext ' . \implode(' ', $context) . ']';
    }
}
