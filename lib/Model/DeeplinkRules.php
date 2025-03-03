<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DeeplinkRules extends \ArrayObject
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
     * @var list<DeeplinkRule>
     */
    protected $rules;

    /**
     * @return list<DeeplinkRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * @param list<DeeplinkRule> $rules
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;

        return $this;
    }
}
