<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetPetById extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $petId;
    protected $accept;

    /**
     * Returns a single pet.
     *
     * @param int   $petId  ID of pet to return
     * @param array $accept Accept content header application/xml|application/json
     */
    public function __construct(int $petId, array $accept = [])
    {
        $this->petId = $petId;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{petId}'], [$this->petId], '/pet/{petId}');
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
     * @return \Bitly\Model\Pet|null
     *
     * @throws \Bitly\Exception\GetPetByIdBadRequestException
     * @throws \Bitly\Exception\GetPetByIdNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\Pet', 'json');
        }
        if (400 === $status) {
            throw new \Bitly\Exception\GetPetByIdBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Bitly\Exception\GetPetByIdNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['api_key', 'petstore_auth'];
    }
}
