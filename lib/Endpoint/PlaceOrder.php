<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class PlaceOrder extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;

    /**
     * Place a new order in the store.
     */
    public function __construct(?\Bitly\Model\Order $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/store/order';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Bitly\Model\Order) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Bitly\Model\Order) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
        if ($this->body instanceof \Bitly\Model\Order) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Bitly\Model\Order|null
     *
     * @throws \Bitly\Exception\PlaceOrderMethodNotAllowedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\Order', 'json');
        }
        if (405 === $status) {
            throw new \Bitly\Exception\PlaceOrderMethodNotAllowedException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
