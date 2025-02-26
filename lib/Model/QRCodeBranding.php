<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeBranding extends \ArrayObject
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
     * A boolean that determines if the QR code should have the bitly brand in its bottom right corner.
     *
     * @var bool
     */
    protected $bitlyBrand;

    /**
     * A boolean that determines if the QR code should have the bitly brand in its bottom right corner.
     */
    public function getBitlyBrand(): bool
    {
        return $this->bitlyBrand;
    }

    /**
     * A boolean that determines if the QR code should have the bitly brand in its bottom right corner.
     */
    public function setBitlyBrand(bool $bitlyBrand): self
    {
        $this->initialized['bitlyBrand'] = true;
        $this->bitlyBrand = $bitlyBrand;

        return $this;
    }
}
