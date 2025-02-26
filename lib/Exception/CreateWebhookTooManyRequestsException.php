<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class CreateWebhookTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Bitly\Model\MonthlyLimitExceeded
     */
    private $monthlyLimitExceeded;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\MonthlyLimitExceeded $monthlyLimitExceeded, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('MONTHLY_LIMIT_EXCEEDED');
        $this->monthlyLimitExceeded = $monthlyLimitExceeded;
        $this->response = $response;
    }

    public function getMonthlyLimitExceeded(): \Bitly\Model\MonthlyLimitExceeded
    {
        return $this->monthlyLimitExceeded;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
