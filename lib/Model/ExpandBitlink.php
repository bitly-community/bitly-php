<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class ExpandBitlink extends \ArrayObject
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
    protected $bitlinkId;

    public function getBitlinkId(): string
    {
        return $this->bitlinkId;
    }

    public function setBitlinkId(string $bitlinkId): self
    {
        $this->initialized['bitlinkId'] = true;
        $this->bitlinkId = $bitlinkId;

        return $this;
    }
}
