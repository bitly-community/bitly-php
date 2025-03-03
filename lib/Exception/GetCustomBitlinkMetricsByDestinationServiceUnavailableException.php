<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetCustomBitlinkMetricsByDestinationServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Bitly\Model\TemporarilyUnavailable
     */
    private $temporarilyUnavailable;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\TemporarilyUnavailable $temporarilyUnavailable, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('TEMPORARILY_UNAVAILABLE');
        $this->temporarilyUnavailable = $temporarilyUnavailable;
        $this->response = $response;
    }

    public function getTemporarilyUnavailable(): \Bitly\Model\TemporarilyUnavailable
    {
        return $this->temporarilyUnavailable;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
