<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeSpecSettings extends \ArrayObject
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
     * The QR code's selected version, determined automatically when the QR code is generated.
     *
     * @var int
     */
    protected $version;
    /**
     * The amount of error correction that the QR code was generated with.
     *
     * @var int
     */
    protected $errorCorrection;
    /**
     * The mask value, which changes the QR codes dot arrangement without changing the underlying data.
     *
     * @var int
     */
    protected $mask;

    /**
     * The QR code's selected version, determined automatically when the QR code is generated.
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * The QR code's selected version, determined automatically when the QR code is generated.
     */
    public function setVersion(int $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * The amount of error correction that the QR code was generated with.
     */
    public function getErrorCorrection(): int
    {
        return $this->errorCorrection;
    }

    /**
     * The amount of error correction that the QR code was generated with.
     */
    public function setErrorCorrection(int $errorCorrection): self
    {
        $this->initialized['errorCorrection'] = true;
        $this->errorCorrection = $errorCorrection;

        return $this;
    }

    /**
     * The mask value, which changes the QR codes dot arrangement without changing the underlying data.
     */
    public function getMask(): int
    {
        return $this->mask;
    }

    /**
     * The mask value, which changes the QR codes dot arrangement without changing the underlying data.
     */
    public function setMask(int $mask): self
    {
        $this->initialized['mask'] = true;
        $this->mask = $mask;

        return $this;
    }
}
