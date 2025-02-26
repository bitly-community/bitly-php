<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PlatformLimit extends \ArrayObject
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
    protected $endpoint;
    /**
     * @var list<MethodLimit>
     */
    protected $methods;

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @return list<MethodLimit>
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    /**
     * @param list<MethodLimit> $methods
     */
    public function setMethods(array $methods): self
    {
        $this->initialized['methods'] = true;
        $this->methods = $methods;

        return $this;
    }
}
