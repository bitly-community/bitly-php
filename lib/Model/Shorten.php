<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class Shorten extends \ArrayObject
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
    protected $longUrl;
    /**
     * @var string
     */
    protected $domain = 'bit.ly';
    /**
     * @var string
     */
    protected $groupGuid;

    public function getLongUrl(): string
    {
        return $this->longUrl;
    }

    public function setLongUrl(string $longUrl): self
    {
        $this->initialized['longUrl'] = true;
        $this->longUrl = $longUrl;

        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    public function getGroupGuid(): string
    {
        return $this->groupGuid;
    }

    public function setGroupGuid(string $groupGuid): self
    {
        $this->initialized['groupGuid'] = true;
        $this->groupGuid = $groupGuid;

        return $this;
    }
}
