<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class InterventionsOffered extends \ArrayObject
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
    protected $interventionType;
    /**
     * @var string
     */
    protected $interventionValue;
    /**
     * @var string
     */
    protected $interventionResponse;

    public function getInterventionType(): string
    {
        return $this->interventionType;
    }

    public function setInterventionType(string $interventionType): self
    {
        $this->initialized['interventionType'] = true;
        $this->interventionType = $interventionType;

        return $this;
    }

    public function getInterventionValue(): string
    {
        return $this->interventionValue;
    }

    public function setInterventionValue(string $interventionValue): self
    {
        $this->initialized['interventionValue'] = true;
        $this->interventionValue = $interventionValue;

        return $this;
    }

    public function getInterventionResponse(): string
    {
        return $this->interventionResponse;
    }

    public function setInterventionResponse(string $interventionResponse): self
    {
        $this->initialized['interventionResponse'] = true;
        $this->interventionResponse = $interventionResponse;

        return $this;
    }
}
