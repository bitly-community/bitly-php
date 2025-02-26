<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class HasReferences extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $references;

    /**
     * @return array<string, string>
     */
    public function getReferences(): iterable
    {
        return $this->references;
    }

    /**
     * @param array<string, string> $references
     */
    public function setReferences(iterable $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;

        return $this;
    }
}
