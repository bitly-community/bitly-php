<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrganizationPreferences extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $preferences;

    /**
     * @return list<array<string, mixed>>
     */
    public function getPreferences(): array
    {
        return $this->preferences;
    }

    /**
     * @param list<array<string, mixed>> $preferences
     */
    public function setPreferences(array $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;

        return $this;
    }
}
