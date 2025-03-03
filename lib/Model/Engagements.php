<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class Engagements extends \ArrayObject
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
     * @var int
     */
    protected $engagementCount;
    /**
     * @var Engagement
     */
    protected $engagements;
    /**
     * @var string
     */
    protected $date;

    public function getEngagementCount(): int
    {
        return $this->engagementCount;
    }

    public function setEngagementCount(int $engagementCount): self
    {
        $this->initialized['engagementCount'] = true;
        $this->engagementCount = $engagementCount;

        return $this;
    }

    public function getEngagements(): Engagement
    {
        return $this->engagements;
    }

    public function setEngagements(Engagement $engagements): self
    {
        $this->initialized['engagements'] = true;
        $this->engagements = $engagements;

        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
