<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeCustomizationsPublic extends \ArrayObject
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
     * The QR code's background color in hex code format with values for alpha channel.
     *
     * @var string
     */
    protected $backgroundColor;
    /**
     * The QR code's dot pattern color in hex code format.
     *
     * @var string
     */
    protected $dotPatternColor;
    /**
     * @var string
     */
    protected $dotPatternType = 'standard';
    /**
     * An object representing all three corners of the QR code. The corners corresponding to each property are: corner_1 = top left, corner_2 = top right, and corner_3 = bottom right.
     *
     * @var QRCodeCorners
     */
    protected $corners;
    /**
     * @var QRCodeGradient
     */
    protected $gradient;
    /**
     * @var QRCodeGradient
     */
    protected $backgroundGradient;
    /**
     * @var QRCodeLogoPublic
     */
    protected $logo;
    /**
     * @var QRCodeFrameRequest
     */
    protected $frame;
    /**
     * Contains the center, top, and bottom text to be used in the QR code.
     *
     * @var QRCodeText
     */
    protected $text;
    /**
     * @var QRCodeBranding
     */
    protected $branding;
    /**
     * The QR code's editable spec settings, which for now is just the error correction.
     *
     * @var QRCodeSpecSettingsPublic
     */
    protected $specSettings;

    /**
     * The QR code's background color in hex code format with values for alpha channel.
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * The QR code's background color in hex code format with values for alpha channel.
     */
    public function setBackgroundColor(string $backgroundColor): self
    {
        $this->initialized['backgroundColor'] = true;
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * The QR code's dot pattern color in hex code format.
     */
    public function getDotPatternColor(): string
    {
        return $this->dotPatternColor;
    }

    /**
     * The QR code's dot pattern color in hex code format.
     */
    public function setDotPatternColor(string $dotPatternColor): self
    {
        $this->initialized['dotPatternColor'] = true;
        $this->dotPatternColor = $dotPatternColor;

        return $this;
    }

    public function getDotPatternType(): string
    {
        return $this->dotPatternType;
    }

    public function setDotPatternType(string $dotPatternType): self
    {
        $this->initialized['dotPatternType'] = true;
        $this->dotPatternType = $dotPatternType;

        return $this;
    }

    /**
     * An object representing all three corners of the QR code. The corners corresponding to each property are: corner_1 = top left, corner_2 = top right, and corner_3 = bottom right.
     */
    public function getCorners(): QRCodeCorners
    {
        return $this->corners;
    }

    /**
     * An object representing all three corners of the QR code. The corners corresponding to each property are: corner_1 = top left, corner_2 = top right, and corner_3 = bottom right.
     */
    public function setCorners(QRCodeCorners $corners): self
    {
        $this->initialized['corners'] = true;
        $this->corners = $corners;

        return $this;
    }

    public function getGradient(): QRCodeGradient
    {
        return $this->gradient;
    }

    public function setGradient(QRCodeGradient $gradient): self
    {
        $this->initialized['gradient'] = true;
        $this->gradient = $gradient;

        return $this;
    }

    public function getBackgroundGradient(): QRCodeGradient
    {
        return $this->backgroundGradient;
    }

    public function setBackgroundGradient(QRCodeGradient $backgroundGradient): self
    {
        $this->initialized['backgroundGradient'] = true;
        $this->backgroundGradient = $backgroundGradient;

        return $this;
    }

    public function getLogo(): QRCodeLogoPublic
    {
        return $this->logo;
    }

    public function setLogo(QRCodeLogoPublic $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;

        return $this;
    }

    public function getFrame(): QRCodeFrameRequest
    {
        return $this->frame;
    }

    public function setFrame(QRCodeFrameRequest $frame): self
    {
        $this->initialized['frame'] = true;
        $this->frame = $frame;

        return $this;
    }

    /**
     * Contains the center, top, and bottom text to be used in the QR code.
     */
    public function getText(): QRCodeText
    {
        return $this->text;
    }

    /**
     * Contains the center, top, and bottom text to be used in the QR code.
     */
    public function setText(QRCodeText $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    public function getBranding(): QRCodeBranding
    {
        return $this->branding;
    }

    public function setBranding(QRCodeBranding $branding): self
    {
        $this->initialized['branding'] = true;
        $this->branding = $branding;

        return $this;
    }

    /**
     * The QR code's editable spec settings, which for now is just the error correction.
     */
    public function getSpecSettings(): QRCodeSpecSettingsPublic
    {
        return $this->specSettings;
    }

    /**
     * The QR code's editable spec settings, which for now is just the error correction.
     */
    public function setSpecSettings(QRCodeSpecSettingsPublic $specSettings): self
    {
        $this->initialized['specSettings'] = true;
        $this->specSettings = $specSettings;

        return $this;
    }
}
