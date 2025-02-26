<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetMetricsForBitlinkByReferrersByDomains extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $bitlink;

    /**
     * Returns click metrics grouped by referrers for the specified link.
     *
     * @param string $bitlink         A Bitlink made of the domain and hash
     * @param array  $queryParameters {
     *
     * @var string $unit A unit of time
     * @var int    $units An integer representing the time units to query data for. pass -1 to return all units of time
     * @var int    $size The quantity of items to be be returned
     * @var string $unit_reference An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. Timestamp values should be url encoded (i.e. replace '+' with '%2B' and ':' with '%3A'; 2022-02-02T15:53:02+0000 becomes 2022-02-02T15%3A53%3A02%2B0000)
     *             }
     */
    public function __construct(string $bitlink, array $queryParameters = [])
    {
        $this->bitlink = $bitlink;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{bitlink}'], [$this->bitlink], '/bitlinks/{bitlink}/referrers_by_domains');
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
        $optionsResolver->setDefined(['unit', 'units', 'size', 'unit_reference']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['size' => 50]);
        $optionsResolver->addAllowedTypes('unit', ['string']);
        $optionsResolver->addAllowedTypes('units', ['int']);
        $optionsResolver->addAllowedTypes('size', ['int']);
        $optionsResolver->addAllowedTypes('unit_reference', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Bitly\Model\ReferrersByDomains|null
     *
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsBadRequestException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsForbiddenException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsNotFoundException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsGoneException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsTooManyRequestsException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsInternalServerErrorException
     * @throws \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\ReferrersByDomains', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsBadRequestException($serializer->deserialize($body, 'Bitly\Model\BadRequest', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsGoneException($serializer->deserialize($body, 'Bitly\Model\Gone', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsTooManyRequestsException($serializer->deserialize($body, 'Bitly\Model\MonthlyLimitExceeded', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetMetricsForBitlinkByReferrersByDomainsServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
