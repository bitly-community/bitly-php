<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetCampaignsBadGatewayException extends BadGatewayException
{
    /**
     * @var \Bitly\Model\BadGateway
     */
    private $badGateway;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\BadGateway $badGateway, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('BAD_GATEWAY');
        $this->badGateway = $badGateway;
        $this->response = $response;
    }

    public function getBadGateway(): \Bitly\Model\BadGateway
    {
        return $this->badGateway;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
