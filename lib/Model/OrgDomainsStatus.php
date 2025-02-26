<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrgDomainsStatus extends \ArrayObject
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
     * @var list<OrgDomainStatus>
     */
    protected $orgDomainsStatus;

    /**
     * @return list<OrgDomainStatus>
     */
    public function getOrgDomainsStatus(): array
    {
        return $this->orgDomainsStatus;
    }

    /**
     * @param list<OrgDomainStatus> $orgDomainsStatus
     */
    public function setOrgDomainsStatus(array $orgDomainsStatus): self
    {
        $this->initialized['orgDomainsStatus'] = true;
        $this->orgDomainsStatus = $orgDomainsStatus;

        return $this;
    }
}
