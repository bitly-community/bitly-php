<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetScanMetricsForQRCodeByCitiesBadRequestException extends BadRequestException
{
    /**
     * @var \Bitly\Model\BadRequest
     */
    private $badRequest;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\BadRequest $badRequest, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('BAD_REQUEST');
        $this->badRequest = $badRequest;
        $this->response = $response;
    }

    public function getBadRequest(): \Bitly\Model\BadRequest
    {
        return $this->badRequest;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
