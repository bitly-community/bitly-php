<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class CreateWebhook extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;

    /**
     * Creates a webhook.
     */
    public function __construct(\Bitly\Model\WebhookCreate $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/webhooks';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Bitly\Model\WebhookCreate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Bitly\Model\Webhook|null
     *
     * @throws \Bitly\Exception\CreateWebhookBadRequestException
     * @throws \Bitly\Exception\CreateWebhookPaymentRequiredException
     * @throws \Bitly\Exception\CreateWebhookForbiddenException
     * @throws \Bitly\Exception\CreateWebhookNotFoundException
     * @throws \Bitly\Exception\CreateWebhookUnprocessableEntityException
     * @throws \Bitly\Exception\CreateWebhookTooManyRequestsException
     * @throws \Bitly\Exception\CreateWebhookInternalServerErrorException
     * @throws \Bitly\Exception\CreateWebhookServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\Webhook', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookBadRequestException($serializer->deserialize($body, 'Bitly\Model\BadRequest', 'json'), $response);
        }
        if (is_null($contentType) === false && (402 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookPaymentRequiredException($serializer->deserialize($body, 'Bitly\Model\UpgradeRequired', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookUnprocessableEntityException($serializer->deserialize($body, 'Bitly\Model\UnprocessableEntity', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookTooManyRequestsException($serializer->deserialize($body, 'Bitly\Model\MonthlyLimitExceeded', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\CreateWebhookServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
