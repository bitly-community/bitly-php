<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class SortedButtonsPageViewsItem extends \ArrayObject
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
    protected $micrositeGuid;
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var float
     */
    protected $views;

    public function getMicrositeGuid(): string
    {
        return $this->micrositeGuid;
    }

    public function setMicrositeGuid(string $micrositeGuid): self
    {
        $this->initialized['micrositeGuid'] = true;
        $this->micrositeGuid = $micrositeGuid;

        return $this;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }

    public function getViews(): float
    {
        return $this->views;
    }

    public function setViews(float $views): self
    {
        $this->initialized['views'] = true;
        $this->views = $views;

        return $this;
    }
}
