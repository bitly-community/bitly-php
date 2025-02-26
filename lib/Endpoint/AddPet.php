<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class AddPet extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Add a new pet to the store.
     *
     * @param array $accept Accept content header application/xml|application/json
     */
    public function __construct(\Bitly\Model\Pet $requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/pet';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Bitly\Model\Pet) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Bitly\Model\Pet) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        if ($this->body instanceof \Bitly\Model\Pet) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
        }

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
     * @throws \Bitly\Exception\AddPetMethodNotAllowedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\Pet', 'json');
        }
        if (405 === $status) {
            throw new \Bitly\Exception\AddPetMethodNotAllowedException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['petstore_auth'];
    }
}
