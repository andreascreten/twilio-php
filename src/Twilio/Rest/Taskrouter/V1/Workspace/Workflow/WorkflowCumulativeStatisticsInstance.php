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


namespace Twilio\Rest\Taskrouter\V1\Workspace\Workflow;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property int $avgTaskAcceptanceTime
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property int $reservationsCreated
 * @property int $reservationsAccepted
 * @property int $reservationsRejected
 * @property int $reservationsTimedOut
 * @property int $reservationsCanceled
 * @property int $reservationsRescinded
 * @property array $splitByWaitTime
 * @property array $waitDurationUntilAccepted
 * @property array $waitDurationUntilCanceled
 * @property int $tasksCanceled
 * @property int $tasksCompleted
 * @property int $tasksEntered
 * @property int $tasksDeleted
 * @property int $tasksMoved
 * @property int $tasksTimedOutInWorkflow
 * @property string $workflowSid
 * @property string $workspaceSid
 * @property string $url
 */
class WorkflowCumulativeStatisticsInstance extends InstanceResource {
    /**
     * Initialize the WorkflowCumulativeStatisticsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace with the resource to fetch.
     * @param string $workflowSid Returns the list of Tasks that are being controlled by the Workflow with the specified Sid value.
     */
    public function __construct(Version $version, array $payload, string $workspaceSid, string $workflowSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'avgTaskAcceptanceTime' => Values::array_get($payload, 'avg_task_acceptance_time'),
            'startTime' => Deserialize::dateTime(Values::array_get($payload, 'start_time')),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'reservationsCreated' => Values::array_get($payload, 'reservations_created'),
            'reservationsAccepted' => Values::array_get($payload, 'reservations_accepted'),
            'reservationsRejected' => Values::array_get($payload, 'reservations_rejected'),
            'reservationsTimedOut' => Values::array_get($payload, 'reservations_timed_out'),
            'reservationsCanceled' => Values::array_get($payload, 'reservations_canceled'),
            'reservationsRescinded' => Values::array_get($payload, 'reservations_rescinded'),
            'splitByWaitTime' => Values::array_get($payload, 'split_by_wait_time'),
            'waitDurationUntilAccepted' => Values::array_get($payload, 'wait_duration_until_accepted'),
            'waitDurationUntilCanceled' => Values::array_get($payload, 'wait_duration_until_canceled'),
            'tasksCanceled' => Values::array_get($payload, 'tasks_canceled'),
            'tasksCompleted' => Values::array_get($payload, 'tasks_completed'),
            'tasksEntered' => Values::array_get($payload, 'tasks_entered'),
            'tasksDeleted' => Values::array_get($payload, 'tasks_deleted'),
            'tasksMoved' => Values::array_get($payload, 'tasks_moved'),
            'tasksTimedOutInWorkflow' => Values::array_get($payload, 'tasks_timed_out_in_workflow'),
            'workflowSid' => Values::array_get($payload, 'workflow_sid'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['workspaceSid' => $workspaceSid, 'workflowSid' => $workflowSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkflowCumulativeStatisticsContext Context for this WorkflowCumulativeStatisticsInstance
     */
    protected function proxy(): WorkflowCumulativeStatisticsContext {
        if (!$this->context) {
            $this->context = new WorkflowCumulativeStatisticsContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['workflowSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the WorkflowCumulativeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkflowCumulativeStatisticsInstance Fetched WorkflowCumulativeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): WorkflowCumulativeStatisticsInstance {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Taskrouter.V1.WorkflowCumulativeStatisticsInstance ' . \implode(' ', $context) . ']';
    }
}

