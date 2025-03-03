<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PriceMap extends \ArrayObject
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
    protected $uSD;
    /**
     * @var int
     */
    protected $eUR;

    public function getUSD(): int
    {
        return $this->uSD;
    }

    public function setUSD(int $uSD): self
    {
        $this->initialized['uSD'] = true;
        $this->uSD = $uSD;

        return $this;
    }

    public function getEUR(): int
    {
        return $this->eUR;
    }

    public function setEUR(int $eUR): self
    {
        $this->initialized['eUR'] = true;
        $this->eUR = $eUR;

        return $this;
    }
}
