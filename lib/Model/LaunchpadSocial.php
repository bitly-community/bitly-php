<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class LaunchpadSocial extends \ArrayObject
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
     * @var LaunchpadContentSocial
     */
    protected $content;
    /**
     * Available button types for Launchpad content.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $launchpadId;
    /**
     * @var string
     */
    protected $buttonId;
    /**
     * @var string
     */
    protected $digitalBusinessCardId;
    /**
     * @var int
     */
    protected $sortOrder;
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
     * @var bool
     */
    protected $isPinned;
    /**
     * @var string
     */
    protected $parent;
    /**
     * @var bool
     */
    protected $isSample;
    /**
     * @var string
     */
    protected $title;

    public function getContent(): LaunchpadContentSocial
    {
        return $this->content;
    }

    public function setContent(LaunchpadContentSocial $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * Available button types for Launchpad content.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Available button types for Launchpad content.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getLaunchpadId(): string
    {
        return $this->launchpadId;
    }

    public function setLaunchpadId(string $launchpadId): self
    {
        $this->initialized['launchpadId'] = true;
        $this->launchpadId = $launchpadId;

        return $this;
    }

    public function getButtonId(): string
    {
        return $this->buttonId;
    }

    public function setButtonId(string $buttonId): self
    {
        $this->initialized['buttonId'] = true;
        $this->buttonId = $buttonId;

        return $this;
    }

    public function getDigitalBusinessCardId(): string
    {
        return $this->digitalBusinessCardId;
    }

    public function setDigitalBusinessCardId(string $digitalBusinessCardId): self
    {
        $this->initialized['digitalBusinessCardId'] = true;
        $this->digitalBusinessCardId = $digitalBusinessCardId;

        return $this;
    }

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;

        return $this;
    }

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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->initialized['isPinned'] = true;
        $this->isPinned = $isPinned;

        return $this;
    }

    public function getParent(): string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;

        return $this;
    }

    public function getIsSample(): bool
    {
        return $this->isSample;
    }

    public function setIsSample(bool $isSample): self
    {
        $this->initialized['isSample'] = true;
        $this->isSample = $isSample;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
