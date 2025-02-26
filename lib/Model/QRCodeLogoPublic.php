<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeLogoPublic extends \ArrayObject
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
     * A GUID for an image uploaded to Bitly.
     *
     * @var string
     */
    protected $imageGuid;

    /**
     * A GUID for an image uploaded to Bitly.
     */
    public function getImageGuid(): string
    {
        return $this->imageGuid;
    }

    /**
     * A GUID for an image uploaded to Bitly.
     */
    public function setImageGuid(string $imageGuid): self
    {
        $this->initialized['imageGuid'] = true;
        $this->imageGuid = $imageGuid;

        return $this;
    }
}
