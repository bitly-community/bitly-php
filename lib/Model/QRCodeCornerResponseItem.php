<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeCornerResponseItem extends \ArrayObject
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
     * A QR code shape's thumbnail image data as a data url. Can be svg, png, jpg. Only used in response bodies.
     *
     * @var string
     */
    protected $thumbnail;
    /**
     * Determines whether the user has acccess to this field.
     *
     * @var bool
     */
    protected $locked;

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
     * A QR code shape's thumbnail image data as a data url. Can be svg, png, jpg. Only used in response bodies.
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * A QR code shape's thumbnail image data as a data url. Can be svg, png, jpg. Only used in response bodies.
     */
    public function setThumbnail(string $thumbnail): self
    {
        $this->initialized['thumbnail'] = true;
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Determines whether the user has acccess to this field.
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }

    /**
     * Determines whether the user has acccess to this field.
     */
    public function setLocked(bool $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;

        return $this;
    }
}
