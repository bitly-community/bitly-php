<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class SupportedCurrency extends \ArrayObject
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
     * @var bool
     */
    protected $isSupported;

    public function getIsSupported(): bool
    {
        return $this->isSupported;
    }

    public function setIsSupported(bool $isSupported): self
    {
        $this->initialized['isSupported'] = true;
        $this->isSupported = $isSupported;

        return $this;
    }
}
