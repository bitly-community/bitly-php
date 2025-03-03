<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class LaunchpadQRCode extends \ArrayObject
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
    protected $link;
    /**
     * @var string
     */
    protected $launchpadId;
    /**
     * @var string
     */
    protected $qrCode;
    /**
     * @var string
     */
    protected $qrCodeId;

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;

        return $this;
    }

    public function getLaunchpadId(): string
    {
        return $this->launchpadId;
    }

    public function setLaunchpadId(string $launchpadId): self
    {
        $this->initialized['launchpadId'] = true;
        $this->launchpadId = $launchpadId;

        return $this;
    }

    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    public function setQrCode(string $qrCode): self
    {
        $this->initialized['qrCode'] = true;
        $this->qrCode = $qrCode;

        return $this;
    }

    public function getQrCodeId(): string
    {
        return $this->qrCodeId;
    }

    public function setQrCodeId(string $qrCodeId): self
    {
        $this->initialized['qrCodeId'] = true;
        $this->qrCodeId = $qrCodeId;

        return $this;
    }
}
