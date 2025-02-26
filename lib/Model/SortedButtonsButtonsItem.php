<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class SortedButtonsButtonsItem extends \ArrayObject
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
    protected $id;
    /**
     * Available button types for Launchpad content.
     *
     * @var string
     */
    protected $buttonType;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $micrositeGuid;

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

    /**
     * Available button types for Launchpad content.
     */
    public function getButtonType(): string
    {
        return $this->buttonType;
    }

    /**
     * Available button types for Launchpad content.
     */
    public function setButtonType(string $buttonType): self
    {
        $this->initialized['buttonType'] = true;
        $this->buttonType = $buttonType;

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

    public function getMicrositeGuid(): string
    {
        return $this->micrositeGuid;
    }

    public function setMicrositeGuid(string $micrositeGuid): self
    {
        $this->initialized['micrositeGuid'] = true;
        $this->micrositeGuid = $micrositeGuid;

        return $this;
    }
}
