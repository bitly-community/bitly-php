<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class LaunchpadImage extends \ArrayObject
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
    protected $crop;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $imageUse;
    /**
     * @var string
     */
    protected $imageGuid;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImageUse(): string
    {
        return $this->imageUse;
    }

    public function setImageUse(string $imageUse): self
    {
        $this->initialized['imageUse'] = true;
        $this->imageUse = $imageUse;

        return $this;
    }

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
}
