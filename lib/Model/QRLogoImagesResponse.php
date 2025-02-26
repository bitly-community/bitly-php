<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRLogoImagesResponse extends \ArrayObject
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
     * @var list<QRLogoImages>
     */
    protected $qrLogoImages;

    /**
     * @return list<QRLogoImages>
     */
    public function getQrLogoImages(): array
    {
        return $this->qrLogoImages;
    }

    /**
     * @param list<QRLogoImages> $qrLogoImages
     */
    public function setQrLogoImages(array $qrLogoImages): self
    {
        $this->initialized['qrLogoImages'] = true;
        $this->qrLogoImages = $qrLogoImages;

        return $this;
    }
}
