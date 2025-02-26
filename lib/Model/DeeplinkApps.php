<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DeeplinkApps extends \ArrayObject
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
     * @var list<DeeplinkApp>
     */
    protected $apps;

    /**
     * @return list<DeeplinkApp>
     */
    public function getApps(): array
    {
        return $this->apps;
    }

    /**
     * @param list<DeeplinkApp> $apps
     */
    public function setApps(array $apps): self
    {
        $this->initialized['apps'] = true;
        $this->apps = $apps;

        return $this;
    }
}
