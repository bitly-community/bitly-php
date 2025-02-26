<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PromoCodeValidPlans extends \ArrayObject
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
     * @var list<string>
     */
    protected $validPlans;

    /**
     * @return list<string>
     */
    public function getValidPlans(): array
    {
        return $this->validPlans;
    }

    /**
     * @param list<string> $validPlans
     */
    public function setValidPlans(array $validPlans): self
    {
        $this->initialized['validPlans'] = true;
        $this->validPlans = $validPlans;

        return $this;
    }
}
