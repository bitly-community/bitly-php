<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PlanLimits extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $references;
    /**
     * @var string
     */
    protected $organizationGuid;
    /**
     * @var list<PlanLimit>
     */
    protected $planLimits;

    /**
     * @return array<string, string>
     */
    public function getReferences(): iterable
    {
        return $this->references;
    }

    /**
     * @param array<string, string> $references
     */
    public function setReferences(iterable $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;

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

    /**
     * @return list<PlanLimit>
     */
    public function getPlanLimits(): array
    {
        return $this->planLimits;
    }

    /**
     * @param list<PlanLimit> $planLimits
     */
    public function setPlanLimits(array $planLimits): self
    {
        $this->initialized['planLimits'] = true;
        $this->planLimits = $planLimits;

        return $this;
    }
}
