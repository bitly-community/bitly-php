<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DomainValidate extends \ArrayObject
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
    protected $organizationGuid;
    /**
     * @var string
     */
    protected $customDomain;
    /**
     * @var string
     */
    protected $domain;
    /**
     * @var string
     */
    protected $subdomain;
    /**
     * @var list<string>
     */
    protected $groupGuids;
    /**
     * @var bool
     */
    protected $prevalidate;

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

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    public function getSubdomain(): string
    {
        return $this->subdomain;
    }

    public function setSubdomain(string $subdomain): self
    {
        $this->initialized['subdomain'] = true;
        $this->subdomain = $subdomain;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getGroupGuids(): array
    {
        return $this->groupGuids;
    }

    /**
     * @param list<string> $groupGuids
     */
    public function setGroupGuids(array $groupGuids): self
    {
        $this->initialized['groupGuids'] = true;
        $this->groupGuids = $groupGuids;

        return $this;
    }

    public function getPrevalidate(): bool
    {
        return $this->prevalidate;
    }

    public function setPrevalidate(bool $prevalidate): self
    {
        $this->initialized['prevalidate'] = true;
        $this->prevalidate = $prevalidate;

        return $this;
    }
}
