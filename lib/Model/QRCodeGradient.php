<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class QRCodeGradient extends \ArrayObject
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
     * The style of the gradient. Can be either linear or radial.
     *
     * @var string
     */
    protected $style = 'no_gradient';
    /**
     * The angle by which the gradient will be rotated. Only applies to linear gradients.
     *
     * @var float
     */
    protected $angle;
    /**
     * The list of hex colors and their offsets to be used in the gradient.
     *
     * @var list<GradientColor>
     */
    protected $colors;
    /**
     * Ignore gradient mask on corners.
     *
     * @var bool
     */
    protected $excludeCorners;

    /**
     * The style of the gradient. Can be either linear or radial.
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * The style of the gradient. Can be either linear or radial.
     */
    public function setStyle(string $style): self
    {
        $this->initialized['style'] = true;
        $this->style = $style;

        return $this;
    }

    /**
     * The angle by which the gradient will be rotated. Only applies to linear gradients.
     */
    public function getAngle(): float
    {
        return $this->angle;
    }

    /**
     * The angle by which the gradient will be rotated. Only applies to linear gradients.
     */
    public function setAngle(float $angle): self
    {
        $this->initialized['angle'] = true;
        $this->angle = $angle;

        return $this;
    }

    /**
     * The list of hex colors and their offsets to be used in the gradient.
     *
     * @return list<GradientColor>
     */
    public function getColors(): array
    {
        return $this->colors;
    }

    /**
     * The list of hex colors and their offsets to be used in the gradient.
     *
     * @param list<GradientColor> $colors
     */
    public function setColors(array $colors): self
    {
        $this->initialized['colors'] = true;
        $this->colors = $colors;

        return $this;
    }

    /**
     * Ignore gradient mask on corners.
     */
    public function getExcludeCorners(): bool
    {
        return $this->excludeCorners;
    }

    /**
     * Ignore gradient mask on corners.
     */
    public function setExcludeCorners(bool $excludeCorners): self
    {
        $this->initialized['excludeCorners'] = true;
        $this->excludeCorners = $excludeCorners;

        return $this;
    }
}
