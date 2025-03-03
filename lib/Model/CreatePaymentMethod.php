<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class CreatePaymentMethod extends \ArrayObject
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
    protected $type;
    /**
     * @var string
     */
    protected $paypalBaid;
    /**
     * @var string
     */
    protected $paypalEmail;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getPaypalBaid(): string
    {
        return $this->paypalBaid;
    }

    public function setPaypalBaid(string $paypalBaid): self
    {
        $this->initialized['paypalBaid'] = true;
        $this->paypalBaid = $paypalBaid;

        return $this;
    }

    public function getPaypalEmail(): string
    {
        return $this->paypalEmail;
    }

    public function setPaypalEmail(string $paypalEmail): self
    {
        $this->initialized['paypalEmail'] = true;
        $this->paypalEmail = $paypalEmail;

        return $this;
    }
}
