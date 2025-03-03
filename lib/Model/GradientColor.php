<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class GradientColor extends \ArrayObject
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
     * A color in hexadecimal format to be used in one of the gradient's <stop> elements.
     *
     * @var string
     */
    protected $color;
    /**
     * A number between 0-100 denoting the offset of the gradient color, interpreted as a percentage.
     *
     * @var int
     */
    protected $offset = 0;

    /**
     * A color in hexadecimal format to be used in one of the gradient's <stop> elements.
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * A color in hexadecimal format to be used in one of the gradient's <stop> elements.
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }

    /**
     * A number between 0-100 denoting the offset of the gradient color, interpreted as a percentage.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * A number between 0-100 denoting the offset of the gradient color, interpreted as a percentage.
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;

        return $this;
    }
}
