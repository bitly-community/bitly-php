<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class BillingSignature extends \ArrayObject
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
    protected $signature;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $iframeId;
    /**
     * @var string
     */
    protected $fieldAccountId;

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;

        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

    public function getIframeId(): string
    {
        return $this->iframeId;
    }

    public function setIframeId(string $iframeId): self
    {
        $this->initialized['iframeId'] = true;
        $this->iframeId = $iframeId;

        return $this;
    }

    public function getFieldAccountId(): string
    {
        return $this->fieldAccountId;
    }

    public function setFieldAccountId(string $fieldAccountId): self
    {
        $this->initialized['fieldAccountId'] = true;
        $this->fieldAccountId = $fieldAccountId;

        return $this;
    }
}
