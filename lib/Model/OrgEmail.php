<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OrgEmail extends \ArrayObject
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
    protected $email;
    /**
     * @var string
     */
    protected $orgGuid;
    /**
     * @var string
     */
    protected $login;
    /**
     * @var int
     */
    protected $createdTs;

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

    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    public function setCreatedTs(int $createdTs): self
    {
        $this->initialized['createdTs'] = true;
        $this->createdTs = $createdTs;

        return $this;
    }
}
