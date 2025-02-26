<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class ClicksForBitlinks extends \ArrayObject
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
     * @var list<ClicksCount>
     */
    protected $clicks;

    /**
     * @return list<ClicksCount>
     */
    public function getClicks(): array
    {
        return $this->clicks;
    }

    /**
     * @param list<ClicksCount> $clicks
     */
    public function setClicks(array $clicks): self
    {
        $this->initialized['clicks'] = true;
        $this->clicks = $clicks;

        return $this;
    }
}
