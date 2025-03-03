<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DeeplinkApp extends \ArrayObject
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
    protected $guid;
    /**
     * @var string
     */
    protected $organizationGuid;
    /**
     * @var string
     */
    protected $thirdPartyAppId;
    /**
     * @var string
     */
    protected $scheme;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $iconUrl;
    /**
     * @var string
     */
    protected $installUrl;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var string
     */
    protected $modifiedTs;
    /**
     * @var string
     */
    protected $createdTs;
    /**
     * @var string
     */
    protected $legacyAppId;
    /**
     * @var string
     */
    protected $appleAppEntitlementId;
    /**
     * @var list<string>
     */
    protected $androidSha256;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->initialized['guid'] = true;
        $this->guid = $guid;

        return $this;
    }

    public function getOrganizationGuid(): string
    {
        return $this->organizationGuid;
    }

    public function setOrganizationGuid(string $organizationGuid): self
    {
        $this->initialized['organizationGuid'] = true;
        $this->organizationGuid = $organizationGuid;

        return $this;
    }

    public function getThirdPartyAppId(): string
    {
        return $this->thirdPartyAppId;
    }

    public function setThirdPartyAppId(string $thirdPartyAppId): self
    {
        $this->initialized['thirdPartyAppId'] = true;
        $this->thirdPartyAppId = $thirdPartyAppId;

        return $this;
    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function setScheme(string $scheme): self
    {
        $this->initialized['scheme'] = true;
        $this->scheme = $scheme;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function setIconUrl(string $iconUrl): self
    {
        $this->initialized['iconUrl'] = true;
        $this->iconUrl = $iconUrl;

        return $this;
    }

    public function getInstallUrl(): string
    {
        return $this->installUrl;
    }

    public function setInstallUrl(string $installUrl): self
    {
        $this->initialized['installUrl'] = true;
        $this->installUrl = $installUrl;

        return $this;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setOs(string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;

        return $this;
    }

    public function getModifiedTs(): string
    {
        return $this->modifiedTs;
    }

    public function setModifiedTs(string $modifiedTs): self
    {
        $this->initialized['modifiedTs'] = true;
        $this->modifiedTs = $modifiedTs;

        return $this;
    }

    public function getCreatedTs(): string
    {
        return $this->createdTs;
    }

    public function setCreatedTs(string $createdTs): self
    {
        $this->initialized['createdTs'] = true;
        $this->createdTs = $createdTs;

        return $this;
    }

    public function getLegacyAppId(): string
    {
        return $this->legacyAppId;
    }

    public function setLegacyAppId(string $legacyAppId): self
    {
        $this->initialized['legacyAppId'] = true;
        $this->legacyAppId = $legacyAppId;

        return $this;
    }

    public function getAppleAppEntitlementId(): string
    {
        return $this->appleAppEntitlementId;
    }

    public function setAppleAppEntitlementId(string $appleAppEntitlementId): self
    {
        $this->initialized['appleAppEntitlementId'] = true;
        $this->appleAppEntitlementId = $appleAppEntitlementId;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getAndroidSha256(): array
    {
        return $this->androidSha256;
    }

    /**
     * @param list<string> $androidSha256
     */
    public function setAndroidSha256(array $androidSha256): self
    {
        $this->initialized['androidSha256'] = true;
        $this->androidSha256 = $androidSha256;

        return $this;
    }
}
