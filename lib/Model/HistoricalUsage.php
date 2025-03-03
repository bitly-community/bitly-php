<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class HistoricalUsage extends \ArrayObject
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
     * the usage count during the time period.
     *
     * @var int
     */
    protected $count;
    /**
     * ISO_TIMESTAMP of the beginning of the time period.
     *
     * @var string
     */
    protected $unitStart;

    /**
     * the usage count during the time period.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * the usage count during the time period.
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * ISO_TIMESTAMP of the beginning of the time period.
     */
    public function getUnitStart(): string
    {
        return $this->unitStart;
    }

    /**
     * ISO_TIMESTAMP of the beginning of the time period.
     */
    public function setUnitStart(string $unitStart): self
    {
        $this->initialized['unitStart'] = true;
        $this->unitStart = $unitStart;

        return $this;
    }
}
