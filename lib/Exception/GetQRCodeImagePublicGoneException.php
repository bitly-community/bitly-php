<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetQRCodeImagePublicGoneException extends GoneException
{
    /**
     * @var \Bitly\Model\Gone
     */
    private $gone;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\Gone $gone, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GONE');
        $this->gone = $gone;
        $this->response = $response;
    }

    public function getGone(): \Bitly\Model\Gone
    {
        return $this->gone;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
