<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class UserInternal extends \ArrayObject
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
    protected $login;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $isActive;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $modified;
    /**
     * @var bool
     */
    protected $isSsoUser;
    /**
     * @var list<Email>
     */
    protected $emails;
    /**
     * @var bool
     */
    protected $is2faEnabled;
    /**
     * @var string
     */
    protected $defaultGroupGuid;
    /**
     * @var string
     */
    protected $roleName;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

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

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

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

    public function getIsSsoUser(): bool
    {
        return $this->isSsoUser;
    }

    public function setIsSsoUser(bool $isSsoUser): self
    {
        $this->initialized['isSsoUser'] = true;
        $this->isSsoUser = $isSsoUser;

        return $this;
    }

    /**
     * @return list<Email>
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @param list<Email> $emails
     */
    public function setEmails(array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;

        return $this;
    }

    public function getIs2faEnabled(): bool
    {
        return $this->is2faEnabled;
    }

    public function setIs2faEnabled(bool $is2faEnabled): self
    {
        $this->initialized['is2faEnabled'] = true;
        $this->is2faEnabled = $is2faEnabled;

        return $this;
    }

    public function getDefaultGroupGuid(): string
    {
        return $this->defaultGroupGuid;
    }

    public function setDefaultGroupGuid(string $defaultGroupGuid): self
    {
        $this->initialized['defaultGroupGuid'] = true;
        $this->defaultGroupGuid = $defaultGroupGuid;

        return $this;
    }

    public function getRoleName(): string
    {
        return $this->roleName;
    }

    public function setRoleName(string $roleName): self
    {
        $this->initialized['roleName'] = true;
        $this->roleName = $roleName;

        return $this;
    }
}
