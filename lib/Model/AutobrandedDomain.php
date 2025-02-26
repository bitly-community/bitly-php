<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AutobrandedDomain extends \ArrayObject
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
     * @var list<AutobrandedDomainResultItem>
     */
    protected $result;

    /**
     * @return list<AutobrandedDomainResultItem>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param list<AutobrandedDomainResultItem> $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
