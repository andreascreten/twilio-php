<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class WorkflowList extends ListResource {
    /**
     * Construct the WorkflowList
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace that the new Workflow to create belongs to.
     */
    public function __construct(Version $version, string $workspaceSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid, ];

        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid) . '/Workflows';
    }

    /**
     * Create the WorkflowInstance
     *
     * @param string $friendlyName A descriptive string that you create to describe the Workflow resource. For example, `Inbound Call Workflow` or `2014 Outbound Campaign`.
     * @param string $configuration A JSON string that contains the rules to apply to the Workflow. See [Configuring Workflows](https://www.twilio.com/docs/taskrouter/workflow-configuration) for more information.
     * @param array|Options $options Optional Arguments
     * @return WorkflowInstance Created WorkflowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $friendlyName, string $configuration, array $options = []): WorkflowInstance {
        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' => $friendlyName,
            'Configuration' => $configuration,
            'AssignmentCallbackUrl' => $options['assignmentCallbackUrl'],
            'FallbackAssignmentCallbackUrl' => $options['fallbackAssignmentCallbackUrl'],
            'TaskReservationTimeout' => $options['taskReservationTimeout'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new WorkflowInstance(
            $this->version,
            $payload
            , $this->solution['workspaceSid']
        );
    }

    /**
     * Reads WorkflowInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return WorkflowInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams WorkflowInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of WorkflowInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return WorkflowPage Page of WorkflowInstance
     */
    public function page(array $options = [], $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): WorkflowPage {
        $options = new Values($options);

        $params = Values::of([
            'FriendlyName' => $options['friendlyName'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new WorkflowPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of WorkflowInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return WorkflowPage Page of WorkflowInstance
     */
    public function getPage(string $targetUrl): WorkflowPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new WorkflowPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a WorkflowContext
     *
     * @param string $sid The SID of the Workflow resource to delete.
     */
    public function getContext(string $sid): WorkflowContext {
        return new WorkflowContext($this->version, $this->solution['workspaceSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Taskrouter.V1.WorkflowList]';
    }
}
