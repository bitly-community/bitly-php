<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class TimeComparisonDetails extends \ArrayObject
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
     * data returned up to this reference timestamp ISO-8601 format.
     *
     * @var string
     */
    protected $comparisonStart;
    /**
     * data returned up to this reference timestamp ISO-8601 format.
     *
     * @var string
     */
    protected $comparisonEnd;

    /**
     * data returned up to this reference timestamp ISO-8601 format.
     */
    public function getComparisonStart(): string
    {
        return $this->comparisonStart;
    }

    /**
     * data returned up to this reference timestamp ISO-8601 format.
     */
    public function setComparisonStart(string $comparisonStart): self
    {
        $this->initialized['comparisonStart'] = true;
        $this->comparisonStart = $comparisonStart;

        return $this;
    }

    /**
     * data returned up to this reference timestamp ISO-8601 format.
     */
    public function getComparisonEnd(): string
    {
        return $this->comparisonEnd;
    }

    /**
     * data returned up to this reference timestamp ISO-8601 format.
     */
    public function setComparisonEnd(string $comparisonEnd): self
    {
        $this->initialized['comparisonEnd'] = true;
        $this->comparisonEnd = $comparisonEnd;

        return $this;
    }
}
