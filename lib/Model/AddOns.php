<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AddOns extends \ArrayObject
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
     * @var list<AddOn>
     */
    protected $addOns;

    /**
     * @return list<AddOn>
     */
    public function getAddOns(): array
    {
        return $this->addOns;
    }

    /**
     * @param list<AddOn> $addOns
     */
    public function setAddOns(array $addOns): self
    {
        $this->initialized['addOns'] = true;
        $this->addOns = $addOns;

        return $this;
    }
}
