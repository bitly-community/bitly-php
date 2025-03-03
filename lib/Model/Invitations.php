<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class Invitations extends \ArrayObject
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
     * @var list<Invitation>
     */
    protected $invitations;

    /**
     * @return list<Invitation>
     */
    public function getInvitations(): array
    {
        return $this->invitations;
    }

    /**
     * @param list<Invitation> $invitations
     */
    public function setInvitations(array $invitations): self
    {
        $this->initialized['invitations'] = true;
        $this->invitations = $invitations;

        return $this;
    }
}
