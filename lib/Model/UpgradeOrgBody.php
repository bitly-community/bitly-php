<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class UpgradeOrgBody extends \ArrayObject
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
    protected $paymentMethodId;
    /**
     * @var string
     */
    protected $currency = 'USD';
    /**
     * @var string
     */
    protected $paymentProvider = 'zuora';
    /**
     * @var string
     */
    protected $ratePlanName;
    /**
     * @var string
     */
    protected $companyName;
    /**
     * @var string
     */
    protected $taxId;
    /**
     * @var string
     */
    protected $promoCode;
    /**
     * @var BillingInfo
     */
    protected $billingInfo;
    /**
     * @var BillingInfo
     */
    protected $contactInfo;

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

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    public function getPaymentProvider(): string
    {
        return $this->paymentProvider;
    }

    public function setPaymentProvider(string $paymentProvider): self
    {
        $this->initialized['paymentProvider'] = true;
        $this->paymentProvider = $paymentProvider;

        return $this;
    }

    public function getRatePlanName(): string
    {
        return $this->ratePlanName;
    }

    public function setRatePlanName(string $ratePlanName): self
    {
        $this->initialized['ratePlanName'] = true;
        $this->ratePlanName = $ratePlanName;

        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;

        return $this;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    public function getPromoCode(): string
    {
        return $this->promoCode;
    }

    public function setPromoCode(string $promoCode): self
    {
        $this->initialized['promoCode'] = true;
        $this->promoCode = $promoCode;

        return $this;
    }

    public function getBillingInfo(): BillingInfo
    {
        return $this->billingInfo;
    }

    public function setBillingInfo(BillingInfo $billingInfo): self
    {
        $this->initialized['billingInfo'] = true;
        $this->billingInfo = $billingInfo;

        return $this;
    }

    public function getContactInfo(): BillingInfo
    {
        return $this->contactInfo;
    }

    public function setContactInfo(BillingInfo $contactInfo): self
    {
        $this->initialized['contactInfo'] = true;
        $this->contactInfo = $contactInfo;

        return $this;
    }
}
