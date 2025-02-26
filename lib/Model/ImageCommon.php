<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class ImageCommon extends \ArrayObject
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
    protected $imageGuid;
    /**
     * @var string
     */
    protected $imageUrl;
    /**
     * @var string
     */
    protected $crop;

    public function getImageGuid(): string
    {
        return $this->imageGuid;
    }

    public function setImageGuid(string $imageGuid): self
    {
        $this->initialized['imageGuid'] = true;
        $this->imageGuid = $imageGuid;

        return $this;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getCrop(): string
    {
        return $this->crop;
    }

    public function setCrop(string $crop): self
    {
        $this->initialized['crop'] = true;
        $this->crop = $crop;

        return $this;
    }
}
