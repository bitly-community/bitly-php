<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class GroupClicksByFacetRollup extends \ArrayObject
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
    protected $unit;
    /**
     * @var int
     */
    protected $units;
    /**
     * @var string
     */
    protected $unitReference;
    /**
     * @var list<FacetCountItem>
     */
    protected $data;

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

    public function getUnits(): int
    {
        return $this->units;
    }

    public function setUnits(int $units): self
    {
        $this->initialized['units'] = true;
        $this->units = $units;

        return $this;
    }

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

    /**
     * @return list<FacetCountItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<FacetCountItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
