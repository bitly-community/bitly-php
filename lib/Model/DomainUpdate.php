<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DomainUpdate extends \ArrayObject
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
    protected $rootRedirect;
    /**
     * @var string
     */
    protected $wildcardRedirect;
    /**
     * @var bool
     */
    protected $httpsEnabled;
    /**
     * @var bool
     */
    protected $hstsEnabled;
    /**
     * @var bool
     */
    protected $upgradeInsecureRequests;

    public function getRootRedirect(): string
    {
        return $this->rootRedirect;
    }

    public function setRootRedirect(string $rootRedirect): self
    {
        $this->initialized['rootRedirect'] = true;
        $this->rootRedirect = $rootRedirect;

        return $this;
    }

    public function getWildcardRedirect(): string
    {
        return $this->wildcardRedirect;
    }

    public function setWildcardRedirect(string $wildcardRedirect): self
    {
        $this->initialized['wildcardRedirect'] = true;
        $this->wildcardRedirect = $wildcardRedirect;

        return $this;
    }

    public function getHttpsEnabled(): bool
    {
        return $this->httpsEnabled;
    }

    public function setHttpsEnabled(bool $httpsEnabled): self
    {
        $this->initialized['httpsEnabled'] = true;
        $this->httpsEnabled = $httpsEnabled;

        return $this;
    }

    public function getHstsEnabled(): bool
    {
        return $this->hstsEnabled;
    }

    public function setHstsEnabled(bool $hstsEnabled): self
    {
        $this->initialized['hstsEnabled'] = true;
        $this->hstsEnabled = $hstsEnabled;

        return $this;
    }

    public function getUpgradeInsecureRequests(): bool
    {
        return $this->upgradeInsecureRequests;
    }

    public function setUpgradeInsecureRequests(bool $upgradeInsecureRequests): self
    {
        $this->initialized['upgradeInsecureRequests'] = true;
        $this->upgradeInsecureRequests = $upgradeInsecureRequests;

        return $this;
    }
}
