<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class ImageCrop extends \ArrayObject
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
     * @var ImageCropPoint
     */
    protected $min;
    /**
     * @var ImageCropPoint
     */
    protected $max;

    public function getMin(): ImageCropPoint
    {
        return $this->min;
    }

    public function setMin(ImageCropPoint $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    public function getMax(): ImageCropPoint
    {
        return $this->max;
    }

    public function setMax(ImageCropPoint $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }
}
