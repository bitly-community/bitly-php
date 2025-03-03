<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetBitlink extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $bitlink;

    /**
     * Returns information for the specified link.
     *
     * @param string $bitlink A Bitlink made of the domain and hash
     */
    public function __construct(string $bitlink)
    {
        $this->bitlink = $bitlink;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{bitlink}'], [$this->bitlink], '/bitlinks/{bitlink}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Bitly\Model\BitlinkBody|null
     *
     * @throws \Bitly\Exception\GetBitlinkForbiddenException
     * @throws \Bitly\Exception\GetBitlinkNotFoundException
     * @throws \Bitly\Exception\GetBitlinkGoneException
     * @throws \Bitly\Exception\GetBitlinkTooManyRequestsException
     * @throws \Bitly\Exception\GetBitlinkInternalServerErrorException
     * @throws \Bitly\Exception\GetBitlinkServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\BitlinkBody', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkGoneException($serializer->deserialize($body, 'Bitly\Model\Gone', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkTooManyRequestsException($serializer->deserialize($body, 'Bitly\Model\MonthlyLimitExceeded', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetBitlinkServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
