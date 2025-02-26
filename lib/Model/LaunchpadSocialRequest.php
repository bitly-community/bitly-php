<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class LaunchpadSocialRequest extends \ArrayObject
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
    protected $scheduleStart;
    /**
     * @var string
     */
    protected $scheduleEnd;
    /**
     * @var bool
     */
    protected $isActive;
    /**
     * @var ContentRequestSocial
     */
    protected $content;

    public function getScheduleStart(): string
    {
        return $this->scheduleStart;
    }

    public function setScheduleStart(string $scheduleStart): self
    {
        $this->initialized['scheduleStart'] = true;
        $this->scheduleStart = $scheduleStart;

        return $this;
    }

    public function getScheduleEnd(): string
    {
        return $this->scheduleEnd;
    }

    public function setScheduleEnd(string $scheduleEnd): self
    {
        $this->initialized['scheduleEnd'] = true;
        $this->scheduleEnd = $scheduleEnd;

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

    public function getContent(): ContentRequestSocial
    {
        return $this->content;
    }

    public function setContent(ContentRequestSocial $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }
}
