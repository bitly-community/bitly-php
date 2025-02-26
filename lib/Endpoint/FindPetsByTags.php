<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Petstore\Endpoint;

class FindPetsByTags extends \Petstore\Runtime\Client\BaseEndpoint implements \Petstore\Runtime\Client\Endpoint
{
    use \Petstore\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
     *
     * @param array $queryParameters {
     *
     * @var array $tags Tags to filter by
     *            }
     *
     * @param array $accept Accept content header application/xml|application/json
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/pet/findByTags';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['tags']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('tags', ['array']);

        return $optionsResolver;
    }

    /**
     * @return \Petstore\Model\Pet[]|null
     *
     * @throws \Petstore\Exception\FindPetsByTagsBadRequestException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Petstore\Model\Pet[]', 'json');
        }
        if (400 === $status) {
            throw new \Petstore\Exception\FindPetsByTagsBadRequestException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['petstore_auth'];
    }
}
