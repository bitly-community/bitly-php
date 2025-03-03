<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeFullResponse extends \ArrayObject
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
     * A full QR code with data and customization values.
     *
     * @var QRCode
     */
    protected $qrCode;

    /**
     * A full QR code with data and customization values.
     */
    public function getQrCode(): QRCode
    {
        return $this->qrCode;
    }

    /**
     * A full QR code with data and customization values.
     */
    public function setQrCode(QRCode $qrCode): self
    {
        $this->initialized['qrCode'] = true;
        $this->qrCode = $qrCode;

        return $this;
    }
}
