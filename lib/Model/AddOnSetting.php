<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class AddOnSetting extends \ArrayObject
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
    protected $featureName;
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var string
     */
    protected $product;
    /**
     * @var int
     */
    protected $incr;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var PriceMap
     */
    protected $priceMap;

    public function getFeatureName(): string
    {
        return $this->featureName;
    }

    public function setFeatureName(string $featureName): self
    {
        $this->initialized['featureName'] = true;
        $this->featureName = $featureName;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;

        return $this;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    public function getIncr(): int
    {
        return $this->incr;
    }

    public function setIncr(int $incr): self
    {
        $this->initialized['incr'] = true;
        $this->incr = $incr;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getPriceMap(): PriceMap
    {
        return $this->priceMap;
    }

    public function setPriceMap(PriceMap $priceMap): self
    {
        $this->initialized['priceMap'] = true;
        $this->priceMap = $priceMap;

        return $this;
    }
}
