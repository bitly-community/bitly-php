<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrgInvitationRequest extends \ArrayObject
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
    protected $email;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $notes;
    /**
     * @var bool
     */
    protected $isSsoUser;

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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

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

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

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
}
