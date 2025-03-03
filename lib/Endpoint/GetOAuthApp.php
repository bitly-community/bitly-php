<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetOAuthApp extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $client_id;

    /**
     * Retrieve the details for the provided OAuth App client ID.
     *
     * @param string $clientId The client ID of an OAuth app
     */
    public function __construct(string $clientId)
    {
        $this->client_id = $clientId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{client_id}'], [$this->client_id], '/apps/{client_id}');
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
     * @return \Bitly\Model\OAuthApp|null
     *
     * @throws \Bitly\Exception\GetOAuthAppForbiddenException
     * @throws \Bitly\Exception\GetOAuthAppNotFoundException
     * @throws \Bitly\Exception\GetOAuthAppInternalServerErrorException
     * @throws \Bitly\Exception\GetOAuthAppServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\OAuthApp', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetOAuthAppForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetOAuthAppNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetOAuthAppInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetOAuthAppServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
