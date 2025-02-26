<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrgTierHistory extends \ArrayObject
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
    protected $orgGuid;
    /**
     * @var string
     */
    protected $status;
    /**
     * ISO timestamp.
     *
     * @var string
     */
    protected $created;
    /**
     * ISO timestamp.
     *
     * @var string
     */
    protected $modified;
    /**
     * @var string
     */
    protected $tierName;
    /**
     * ISO timestamp.
     *
     * @var string
     */
    protected $tierChangeDate;
    /**
     * ISO timestamp.
     *
     * @var string
     */
    protected $activated;
    /**
     * ISO timestamp.
     *
     * @var string
     */
    protected $deactivated;

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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * ISO timestamp.
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * ISO timestamp.
     */
    public function setCreated(string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    /**
     * ISO timestamp.
     */
    public function getModified(): string
    {
        return $this->modified;
    }

    /**
     * ISO timestamp.
     */
    public function setModified(string $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;

        return $this;
    }

    public function getTierName(): string
    {
        return $this->tierName;
    }

    public function setTierName(string $tierName): self
    {
        $this->initialized['tierName'] = true;
        $this->tierName = $tierName;

        return $this;
    }

    /**
     * ISO timestamp.
     */
    public function getTierChangeDate(): string
    {
        return $this->tierChangeDate;
    }

    /**
     * ISO timestamp.
     */
    public function setTierChangeDate(string $tierChangeDate): self
    {
        $this->initialized['tierChangeDate'] = true;
        $this->tierChangeDate = $tierChangeDate;

        return $this;
    }

    /**
     * ISO timestamp.
     */
    public function getActivated(): string
    {
        return $this->activated;
    }

    /**
     * ISO timestamp.
     */
    public function setActivated(string $activated): self
    {
        $this->initialized['activated'] = true;
        $this->activated = $activated;

        return $this;
    }

    /**
     * ISO timestamp.
     */
    public function getDeactivated(): string
    {
        return $this->deactivated;
    }

    /**
     * ISO timestamp.
     */
    public function setDeactivated(string $deactivated): self
    {
        $this->initialized['deactivated'] = true;
        $this->deactivated = $deactivated;

        return $this;
    }
}
