<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AppAssociationDetail extends \ArrayObject
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
    protected $appGuid;
    /**
     * @var int
     */
    protected $priority;
    /**
     * @var string
     */
    protected $os;
    /**
     * @var bool
     */
    protected $fallback;

    public function getAppGuid(): string
    {
        return $this->appGuid;
    }

    public function setAppGuid(string $appGuid): self
    {
        $this->initialized['appGuid'] = true;
        $this->appGuid = $appGuid;

        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    public function getOs(): string
    {
        return $this->os;
    }

    public function setOs(string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;

        return $this;
    }

    public function getFallback(): bool
    {
        return $this->fallback;
    }

    public function setFallback(bool $fallback): self
    {
        $this->initialized['fallback'] = true;
        $this->fallback = $fallback;

        return $this;
    }
}
