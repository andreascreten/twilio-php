<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\Understand\Assistant\FieldType;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class FieldValueList extends ListResource {
    /**
     * Construct the FieldValueList
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid 
     * @param string $fieldTypeSid 
     */
    public function __construct(Version $version, string $assistantSid , string $fieldTypeSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid, 'fieldTypeSid' => $fieldTypeSid, ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/FieldTypes/' . \rawurlencode($fieldTypeSid) . '/FieldValues';
    }

    /**
     * Create the FieldValueInstance
     *
     * @param string $language An ISO language-country string of the value.
     * @param string $value A user-provided string that uniquely identifies this resource as an alternative to the sid. Unique up to 64 characters long.
     * @param array|Options $options Optional Arguments
     * @return FieldValueInstance Created FieldValueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $language, string $value, array $options = []): FieldValueInstance {
        $options = new Values($options);

        $data = Values::of([
            'Language' => $language,
            'Value' => $value,
            'SynonymOf' => $options['synonymOf'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new FieldValueInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
            , $this->solution['fieldTypeSid']
        );
    }

    /**
     * Reads FieldValueInstance records from the API as a list.
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
     * @return FieldValueInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams FieldValueInstance records from the API as a generator stream.
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
     * Retrieve a single page of FieldValueInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return FieldValuePage Page of FieldValueInstance
     */
    public function page(array $options = [], $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): FieldValuePage {
        $options = new Values($options);

        $params = Values::of([
            'Language' => $options['language'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new FieldValuePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of FieldValueInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return FieldValuePage Page of FieldValueInstance
     */
    public function getPage(string $targetUrl): FieldValuePage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new FieldValuePage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a FieldValueContext
     *
     * @param string $sid 
     */
    public function getContext(string $sid): FieldValueContext {
        return new FieldValueContext($this->version, $this->solution['assistantSid'], $this->solution['fieldTypeSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Preview.Understand.FieldValueList]';
    }
}
