<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PublicQRCodeResponse extends \ArrayObject
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
     * @var QRCodeMinimal
     */
    protected $qrCode;

    public function getQrCode(): QRCodeMinimal
    {
        return $this->qrCode;
    }

    public function setQrCode(QRCodeMinimal $qrCode): self
    {
        $this->initialized['qrCode'] = true;
        $this->qrCode = $qrCode;

        return $this;
    }
}
