<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Endpoint;

class GetScanMetricsForQRCode extends \Bitly\Runtime\Client\BaseEndpoint implements \Bitly\Runtime\Client\Endpoint
{
    use \Bitly\Runtime\Client\EndpointTrait;
    protected $qrcode_id;

    /**
     * Returns an array of scan counts for the specified QR code. The array is comprised of scan counts for each time window, where the window is based on the provided unit.
     *
     * @param string $qrcodeId        The QR Code ID
     * @param array  $queryParameters {
     *
     * @var string $unit A unit of time
     * @var int    $units An integer representing the time units to query data for. pass -1 to return all units of time
     * @var string $unit_reference An ISO-8601 timestamp, indicating the most recent time for which to pull metrics. Will default to current time. Timestamp values should be url encoded (i.e. replace '+' with '%2B' and ':' with '%3A'; 2022-02-02T15:53:02+0000 becomes 2022-02-02T15%3A53%3A02%2B0000)
     *             }
     */
    public function __construct(string $qrcodeId, array $queryParameters = [])
    {
        $this->qrcode_id = $qrcodeId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{qrcode_id}'], [$this->qrcode_id], '/qr-codes/{qrcode_id}/scans');
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
        $optionsResolver->setDefined(['unit', 'units', 'unit_reference']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('unit', ['string']);
        $optionsResolver->addAllowedTypes('units', ['int']);
        $optionsResolver->addAllowedTypes('unit_reference', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Bitly\Model\BitlinkScans|null
     *
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeBadRequestException
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeForbiddenException
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeNotFoundException
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeGoneException
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeInternalServerErrorException
     * @throws \Bitly\Exception\GetScanMetricsForQRCodeServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bitly\Model\BitlinkScans', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeBadRequestException($serializer->deserialize($body, 'Bitly\Model\BadRequest', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeForbiddenException($serializer->deserialize($body, 'Bitly\Model\Forbidden', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeNotFoundException($serializer->deserialize($body, 'Bitly\Model\NotFound', 'json'), $response);
        }
        if (is_null($contentType) === false && (410 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeGoneException($serializer->deserialize($body, 'Bitly\Model\Gone', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeInternalServerErrorException($serializer->deserialize($body, 'Bitly\Model\InternalError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Bitly\Exception\GetScanMetricsForQRCodeServiceUnavailableException($serializer->deserialize($body, 'Bitly\Model\TemporarilyUnavailable', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
