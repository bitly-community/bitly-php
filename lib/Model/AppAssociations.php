<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AppAssociations extends \ArrayObject
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
    protected $customDomain;
    /**
     * @var list<AppAssociationDetail>
     */
    protected $iosApps;
    /**
     * @var list<AppAssociationDetail>
     */
    protected $androidApps;
    /**
     * @var string
     */
    protected $iosInstallPreference;
    /**
     * @var string
     */
    protected $androidInstallPreference;

    public function getCustomDomain(): string
    {
        return $this->customDomain;
    }

    public function setCustomDomain(string $customDomain): self
    {
        $this->initialized['customDomain'] = true;
        $this->customDomain = $customDomain;

        return $this;
    }

    /**
     * @return list<AppAssociationDetail>
     */
    public function getIosApps(): array
    {
        return $this->iosApps;
    }

    /**
     * @param list<AppAssociationDetail> $iosApps
     */
    public function setIosApps(array $iosApps): self
    {
        $this->initialized['iosApps'] = true;
        $this->iosApps = $iosApps;

        return $this;
    }

    /**
     * @return list<AppAssociationDetail>
     */
    public function getAndroidApps(): array
    {
        return $this->androidApps;
    }

    /**
     * @param list<AppAssociationDetail> $androidApps
     */
    public function setAndroidApps(array $androidApps): self
    {
        $this->initialized['androidApps'] = true;
        $this->androidApps = $androidApps;

        return $this;
    }

    public function getIosInstallPreference(): string
    {
        return $this->iosInstallPreference;
    }

    public function setIosInstallPreference(string $iosInstallPreference): self
    {
        $this->initialized['iosInstallPreference'] = true;
        $this->iosInstallPreference = $iosInstallPreference;

        return $this;
    }

    public function getAndroidInstallPreference(): string
    {
        return $this->androidInstallPreference;
    }

    public function setAndroidInstallPreference(string $androidInstallPreference): self
    {
        $this->initialized['androidInstallPreference'] = true;
        $this->androidInstallPreference = $androidInstallPreference;

        return $this;
    }
}
