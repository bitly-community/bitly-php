<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class DeleteWebhookForbiddenException extends ForbiddenException
{
    /**
     * @var \Bitly\Model\Forbidden
     */
    private $forbidden;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\Forbidden $forbidden, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('FORBIDDEN');
        $this->forbidden = $forbidden;
        $this->response = $response;
    }

    public function getForbidden(): \Bitly\Model\Forbidden
    {
        return $this->forbidden;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
