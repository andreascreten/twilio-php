<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Autopilot\V1\Assistant\Task;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class TaskStatisticsContext extends InstanceContext {
    /**
     * Initialize the TaskStatisticsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the [Assistant](https://www.twilio.com/docs/autopilot/api/assistant) that is the parent of the resource to fetch.
     * @param string $taskSid The SID of the [Task](https://www.twilio.com/docs/autopilot/api/task) that is associated with the resource to fetch.
     */
    public function __construct(Version $version, $assistantSid , $taskSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid,  'taskSid' => $taskSid,  ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($taskSid) . '/Statistics';
    }

    /**
     * Fetch the TaskStatisticsInstance
     *
     * @return TaskStatisticsInstance Fetched TaskStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TaskStatisticsInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new TaskStatisticsInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
            , $this->solution['taskSid']
        );
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
        return '[Twilio.Autopilot.V1.TaskStatisticsContext ' . \implode(' ', $context) . ']';
    }
}
