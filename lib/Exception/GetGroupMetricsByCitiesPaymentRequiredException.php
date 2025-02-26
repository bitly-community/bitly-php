<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Exception;

class GetGroupMetricsByCitiesPaymentRequiredException extends PaymentRequiredException
{
    /**
     * @var \Bitly\Model\UpgradeRequired
     */
    private $upgradeRequired;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Bitly\Model\UpgradeRequired $upgradeRequired, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UPGRADE_REQUIRED');
        $this->upgradeRequired = $upgradeRequired;
        $this->response = $response;
    }

    public function getUpgradeRequired(): \Bitly\Model\UpgradeRequired
    {
        return $this->upgradeRequired;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
