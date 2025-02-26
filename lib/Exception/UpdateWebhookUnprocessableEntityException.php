<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class UpdateWebhookUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Bitly\Model\UnprocessableEntity
     */
    private $unprocessableEntity;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\UnprocessableEntity $unprocessableEntity, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UNPROCESSABLE_ENTITY');
        $this->unprocessableEntity = $unprocessableEntity;
        $this->response = $response;
    }

    public function getUnprocessableEntity(): \Bitly\Model\UnprocessableEntity
    {
        return $this->unprocessableEntity;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
