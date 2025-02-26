<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Petstore\Endpoint;

class GetUserByName extends \Petstore\Runtime\Client\BaseEndpoint implements \Petstore\Runtime\Client\Endpoint
{
    use \Petstore\Runtime\Client\EndpointTrait;
    protected $username;
    protected $accept;

    /**
     * @param string $username The name that needs to be fetched. Use user1 for testing.
     * @param array  $accept   Accept content header application/xml|application/json
     */
    public function __construct(string $username, array $accept = [])
    {
        $this->username = $username;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{username}'], [$this->username], '/user/{username}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/xml', 'application/json']];
        }

        return $this->accept;
    }

    /**
     * @return \Petstore\Model\User|null
     *
     * @throws \Petstore\Exception\GetUserByNameBadRequestException
     * @throws \Petstore\Exception\GetUserByNameNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Petstore\Model\User', 'json');
        }
        if (400 === $status) {
            throw new \Petstore\Exception\GetUserByNameBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Petstore\Exception\GetUserByNameNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
