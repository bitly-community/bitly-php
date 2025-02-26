<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetSortedBitlinks extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $group_guid;
    protected $sort;

    /**
     * Returns a list of Bitlinks sorted by group. The list of custom bitlinks has newest entries first.
     *
     * @param string $groupGuid       A GUID for a Bitly group
     * @param string $sort            The type of sorting that you would like to do
     * @param array  $queryParameters {
     *
     * @var string $unit A unit of time
     * @var int    $units An integer representing the time units to query data for. pass -1 to return all units of time.
     * @var string $unit_reference An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. Timestamp values should be url encoded (i.e. replace '+' with '%2B' and ':' with '%3A'; 2022-02-02T15:53:02+0000 becomes 2022-02-02T15%3A53%3A02%2B0000)
     * @var int    $size The quantity of items to be be returned
     *             }
     */
    public function __construct(string $groupGuid, string $sort, array $queryParameters = [])
    {
        $this->group_guid = $groupGuid;
        $this->sort = $sort;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{group_guid}', '{sort}'], [$this->group_guid, $this->sort], '/groups/{group_guid}/bitlinks/{sort}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['unit', 'units', 'unit_reference', 'size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['unit' => 'day', 'units' => -1, 'size' => 50]);
        $optionsResolver->addAllowedTypes('unit', ['string']);
        $optionsResolver->addAllowedTypes('units', ['int']);
        $optionsResolver->addAllowedTypes('unit_reference', ['string']);
        $optionsResolver->addAllowedTypes('size', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \Bitly\Model\SortedLinks|null
     *
     * @throws \Bitly\Exception\GetSortedBitlinksForbiddenException
     * @throws \Bitly\Exception\GetSortedBitlinksNotFoundException
     * @throws \Bitly\Exception\GetSortedBitlinksTooManyRequestsException
     * @throws \Bitly\Exception\GetSortedBitlinksInternalServerErrorException
     * @throws \Bitly\Exception\GetSortedBitlinksServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\SortedLinks', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetSortedBitlinksForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetSortedBitlinksNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetSortedBitlinksTooManyRequestsException($serializer->deserialize($body, 'Bitly\Model\MonthlyLimitExceeded', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetSortedBitlinksInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetSortedBitlinksServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
