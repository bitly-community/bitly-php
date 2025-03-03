<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PublicUpdateQRCodeRequest extends \ArrayObject
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
    protected $title;
    /**
     * Options for customizing a QR Code's appearance.
     *
     * @var QRCodeCustomizationsPublic
     */
    protected $renderCustomizations;
    /**
     * A boolean representing if the QR code has been archived.
     *
     * @var bool
     */
    protected $archived;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Options for customizing a QR Code's appearance.
     */
    public function getRenderCustomizations(): QRCodeCustomizationsPublic
    {
        return $this->renderCustomizations;
    }

    /**
     * Options for customizing a QR Code's appearance.
     */
    public function setRenderCustomizations(QRCodeCustomizationsPublic $renderCustomizations): self
    {
        $this->initialized['renderCustomizations'] = true;
        $this->renderCustomizations = $renderCustomizations;

        return $this;
    }

    /**
     * A boolean representing if the QR code has been archived.
     */
    public function getArchived(): bool
    {
        return $this->archived;
    }

    /**
     * A boolean representing if the QR code has been archived.
     */
    public function setArchived(bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

        return $this;
    }
}
