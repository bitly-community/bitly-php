<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeTemplateResponse extends \ArrayObject
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
     * A template for a set of QR code customizations.
     *
     * @var QRCodeTemplate
     */
    protected $qrCodeTemplate;

    /**
     * A template for a set of QR code customizations.
     */
    public function getQrCodeTemplate(): QRCodeTemplate
    {
        return $this->qrCodeTemplate;
    }

    /**
     * A template for a set of QR code customizations.
     */
    public function setQrCodeTemplate(QRCodeTemplate $qrCodeTemplate): self
    {
        $this->initialized['qrCodeTemplate'] = true;
        $this->qrCodeTemplate = $qrCodeTemplate;

        return $this;
    }
}
