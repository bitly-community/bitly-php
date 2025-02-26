<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetWebhooksNotFoundException extends NotFoundException
{
    /**
     * @var \Bitly\Model\NotFound
     */
    private $notFound;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\NotFound $notFound, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('NOT_FOUND');
        $this->notFound = $notFound;
        $this->response = $response;
    }

    public function getNotFound(): \Bitly\Model\NotFound
    {
        return $this->notFound;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
