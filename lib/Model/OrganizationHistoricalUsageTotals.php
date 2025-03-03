<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrganizationHistoricalUsageTotals extends \ArrayObject
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
     * the organization's guid.
     *
     * @var string
     */
    protected $orgGuid;
    /**
     * Date ("2006-01-02") of the beginning of the usage totals.
     *
     * @var string
     */
    protected $startDate;
    /**
     * Date ("2006-01-02") of the end of the usage totals.
     *
     * @var string
     */
    protected $endDate;
    /**
     * an array of all of the organization's groups' historical feature usage totals.
     *
     * @var list<GroupHistoricalUsageTotals>
     */
    protected $groupsHistoricalUsageTotals;

    /**
     * the organization's guid.
     */
    public function getOrgGuid(): string
    {
        return $this->orgGuid;
    }

    /**
     * the organization's guid.
     */
    public function setOrgGuid(string $orgGuid): self
    {
        $this->initialized['orgGuid'] = true;
        $this->orgGuid = $orgGuid;

        return $this;
    }

    /**
     * Date ("2006-01-02") of the beginning of the usage totals.
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * Date ("2006-01-02") of the beginning of the usage totals.
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Date ("2006-01-02") of the end of the usage totals.
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * Date ("2006-01-02") of the end of the usage totals.
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * an array of all of the organization's groups' historical feature usage totals.
     *
     * @return list<GroupHistoricalUsageTotals>
     */
    public function getGroupsHistoricalUsageTotals(): array
    {
        return $this->groupsHistoricalUsageTotals;
    }

    /**
     * an array of all of the organization's groups' historical feature usage totals.
     *
     * @param list<GroupHistoricalUsageTotals> $groupsHistoricalUsageTotals
     */
    public function setGroupsHistoricalUsageTotals(array $groupsHistoricalUsageTotals): self
    {
        $this->initialized['groupsHistoricalUsageTotals'] = true;
        $this->groupsHistoricalUsageTotals = $groupsHistoricalUsageTotals;

        return $this;
    }
}
