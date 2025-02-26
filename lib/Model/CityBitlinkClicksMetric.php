<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class CityBitlinkClicksMetric extends \ArrayObject
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
    protected $bitlinkClicks;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $subregion;
    /**
     * @var string
     */
    protected $region;
    /**
     * @var string
     */
    protected $country;

    public function getBitlinkClicks(): int
    {
        return $this->bitlinkClicks;
    }

    public function setBitlinkClicks(int $bitlinkClicks): self
    {
        $this->initialized['bitlinkClicks'] = true;
        $this->bitlinkClicks = $bitlinkClicks;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    public function getSubregion(): string
    {
        return $this->subregion;
    }

    public function setSubregion(string $subregion): self
    {
        $this->initialized['subregion'] = true;
        $this->subregion = $subregion;

        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }
}
