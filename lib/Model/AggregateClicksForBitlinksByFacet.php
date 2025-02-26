<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AggregateClicksForBitlinksByFacet extends \ArrayObject
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
    protected $unitReference;
    /**
     * @var string
     */
    protected $unit;
    /**
     * @var float
     */
    protected $units;
    /**
     * @var string
     */
    protected $info;
    /**
     * @var string
     */
    protected $facet;
    /**
     * @var list<ClicksByFacet>
     */
    protected $totalsForTimePeriod;

    public function getUnitReference(): string
    {
        return $this->unitReference;
    }

    public function setUnitReference(string $unitReference): self
    {
        $this->initialized['unitReference'] = true;
        $this->unitReference = $unitReference;

        return $this;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    public function getUnits(): float
    {
        return $this->units;
    }

    public function setUnits(float $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->initialized['info'] = true;
        $this->info = $info;

        return $this;
    }

    public function getFacet(): string
    {
        return $this->facet;
    }

    public function setFacet(string $facet): self
    {
        $this->initialized['facet'] = true;
        $this->facet = $facet;

        return $this;
    }

    /**
     * @return list<ClicksByFacet>
     */
    public function getTotalsForTimePeriod(): array
    {
        return $this->totalsForTimePeriod;
    }

    /**
     * @param list<ClicksByFacet> $totalsForTimePeriod
     */
    public function setTotalsForTimePeriod(array $totalsForTimePeriod): self
    {
        $this->initialized['totalsForTimePeriod'] = true;
        $this->totalsForTimePeriod = $totalsForTimePeriod;

        return $this;
    }
}
