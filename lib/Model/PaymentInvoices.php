<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class PaymentInvoices extends \ArrayObject
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
     * @var list<PaymentInvoice>
     */
    protected $paymentInvoices;

    /**
     * @return list<PaymentInvoice>
     */
    public function getPaymentInvoices(): array
    {
        return $this->paymentInvoices;
    }

    /**
     * @param list<PaymentInvoice> $paymentInvoices
     */
    public function setPaymentInvoices(array $paymentInvoices): self
    {
        $this->initialized['paymentInvoices'] = true;
        $this->paymentInvoices = $paymentInvoices;

        return $this;
    }
}
