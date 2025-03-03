<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AccessFeature extends \ArrayObject
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
     * ISO_TIMESTAMP.
     *
     * @var string
     */
    protected $created;
    /**
     * ISO_TIMESTAMP.
     *
     * @var string
     */
    protected $modified;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $hasAccess;
    /**
     * @var bool
     */
    protected $isTierDefault;

    /**
     * ISO_TIMESTAMP.
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * ISO_TIMESTAMP.
     */
    public function setCreated(string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    /**
     * ISO_TIMESTAMP.
     */
    public function getModified(): string
    {
        return $this->modified;
    }

    /**
     * ISO_TIMESTAMP.
     */
    public function setModified(string $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getHasAccess(): bool
    {
        return $this->hasAccess;
    }

    public function setHasAccess(bool $hasAccess): self
    {
        $this->initialized['hasAccess'] = true;
        $this->hasAccess = $hasAccess;

        return $this;
    }

    public function getIsTierDefault(): bool
    {
        return $this->isTierDefault;
    }

    public function setIsTierDefault(bool $isTierDefault): self
    {
        $this->initialized['isTierDefault'] = true;
        $this->isTierDefault = $isTierDefault;

        return $this;
    }
}
