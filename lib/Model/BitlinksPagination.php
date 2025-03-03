<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class BitlinksPagination extends \ArrayObject
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
    protected $next;
    /**
     * @var string
     */
    protected $searchAfter;
    /**
     * @var int
     */
    protected $size;

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    public function getSearchAfter(): string
    {
        return $this->searchAfter;
    }

    public function setSearchAfter(string $searchAfter): self
    {
        $this->initialized['searchAfter'] = true;
        $this->searchAfter = $searchAfter;

        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }
}
