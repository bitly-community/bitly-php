<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DecideRequest extends \ArrayObject
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
    protected $flag;
    /**
     * @var string
     */
    protected $orgGuid;
    /**
     * @var string
     */
    protected $action;

    public function getFlag(): string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): self
    {
        $this->initialized['flag'] = true;
        $this->flag = $flag;

        return $this;
    }

    public function getOrgGuid(): string
    {
        return $this->orgGuid;
    }

    public function setOrgGuid(string $orgGuid): self
    {
        $this->initialized['orgGuid'] = true;
        $this->orgGuid = $orgGuid;

        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }
}
