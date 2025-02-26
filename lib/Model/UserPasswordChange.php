<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class UserPasswordChange extends \ArrayObject
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
    protected $originalPassword;
    /**
     * @var string
     */
    protected $newPassword;

    public function getOriginalPassword(): string
    {
        return $this->originalPassword;
    }

    public function setOriginalPassword(string $originalPassword): self
    {
        $this->initialized['originalPassword'] = true;
        $this->originalPassword = $originalPassword;

        return $this;
    }

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->initialized['newPassword'] = true;
        $this->newPassword = $newPassword;

        return $this;
    }
}
