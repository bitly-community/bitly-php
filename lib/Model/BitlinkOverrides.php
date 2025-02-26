<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class BitlinkOverrides extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $references;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $rules;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $modified;
    /**
     * The fully qualified URL to the Override which is the Bitly link to use. Ex: https://foo.com/bar.
     *
     * @var string
     */
    protected $link;
    /**
     * @var string
     */
    protected $groupGuid;

    /**
     * @return array<string, string>
     */
    public function getReferences(): iterable
    {
        return $this->references;
    }

    /**
     * @param array<string, string> $references
     */
    public function setReferences(iterable $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;

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

    public function getRules(): string
    {
        return $this->rules;
    }

    public function setRules(string $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;

        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getModified(): string
    {
        return $this->modified;
    }

    public function setModified(string $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;

        return $this;
    }

    /**
     * The fully qualified URL to the Override which is the Bitly link to use. Ex: https://foo.com/bar.
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * The fully qualified URL to the Override which is the Bitly link to use. Ex: https://foo.com/bar.
     */
    public function setLink(string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;

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
