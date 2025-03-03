<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class UpdateCanvaUserBrand extends \ArrayObject
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
     * The Bitly brand_guid preference for use in the Bitly Canva app.
     *
     * @var string
     */
    protected $brandGuid;

    /**
     * The Bitly brand_guid preference for use in the Bitly Canva app.
     */
    public function getBrandGuid(): string
    {
        return $this->brandGuid;
    }

    /**
     * The Bitly brand_guid preference for use in the Bitly Canva app.
     */
    public function setBrandGuid(string $brandGuid): self
    {
        $this->initialized['brandGuid'] = true;
        $this->brandGuid = $brandGuid;

        return $this;
    }
}
