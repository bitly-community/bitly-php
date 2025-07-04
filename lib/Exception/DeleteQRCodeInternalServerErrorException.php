<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class DeleteQRCodeInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Bitly\Model\InternalError
     */
    private $internalError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\InternalError $internalError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('INTERNAL_ERROR');
        $this->internalError = $internalError;
        $this->response = $response;
    }

    public function getInternalError(): \Bitly\Model\InternalError
    {
        return $this->internalError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
