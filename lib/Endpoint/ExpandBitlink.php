<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class ExpandBitlink extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;

    /**
     * Returns the short link and long URL for the specified link.
     */
    public function __construct(\Bitly\Model\ExpandBitlink $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/expand';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Bitly\Model\ExpandBitlink) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Bitly\Model\ExpandedBitlink|null
     *
     * @throws \Bitly\Exception\ExpandBitlinkBadRequestException
     * @throws \Bitly\Exception\ExpandBitlinkNotFoundException
     * @throws \Bitly\Exception\ExpandBitlinkGoneException
     * @throws \Bitly\Exception\ExpandBitlinkUnprocessableEntityException
     * @throws \Bitly\Exception\ExpandBitlinkInternalServerErrorException
     * @throws \Bitly\Exception\ExpandBitlinkServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\ExpandedBitlink', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkBadRequestException($serializer->deserialize($body, 'Bitly\Model\BadRequest', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkGoneException($serializer->deserialize($body, 'Bitly\Model\Gone', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkUnprocessableEntityException($serializer->deserialize($body, 'Bitly\Model\UnprocessableEntity', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\ExpandBitlinkServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
