<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PayPalTokenRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $orgGuid;
    /**
     * @var string
     */
    protected $tierName;
    /**
     * @var string
     */
    protected $billingPeriod;

    public function getOrgGuid(): string
    {
        return $this->orgGuid;
    }

    public function setOrgGuid(string $orgGuid): self
    {
        $this->initialized['orgGuid'] = true;
        $this->orgGuid = $orgGuid;

        return $this;
    }

    public function getTierName(): string
    {
        return $this->tierName;
    }

    public function setTierName(string $tierName): self
    {
        $this->initialized['tierName'] = true;
        $this->tierName = $tierName;

        return $this;
    }

    public function getBillingPeriod(): string
    {
        return $this->billingPeriod;
    }

    public function setBillingPeriod(string $billingPeriod): self
    {
        $this->initialized['billingPeriod'] = true;
        $this->billingPeriod = $billingPeriod;

        return $this;
    }
}
