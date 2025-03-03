<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class BulkShortenValidate extends \ArrayObject
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
    protected $groupGuid;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $filename;
    /**
     * @var string
     */
    protected $domain;
    /**
     * @var string
     */
    protected $uploadType;
    /**
     * @var bool
     */
    protected $bitlyBrand;

    public function getGroupGuid(): string
    {
        return $this->groupGuid;
    }

    public function setGroupGuid(string $groupGuid): self
    {
        $this->initialized['groupGuid'] = true;
        $this->groupGuid = $groupGuid;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;

        return $this;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    public function getUploadType(): string
    {
        return $this->uploadType;
    }

    public function setUploadType(string $uploadType): self
    {
        $this->initialized['uploadType'] = true;
        $this->uploadType = $uploadType;

        return $this;
    }

    public function getBitlyBrand(): bool
    {
        return $this->bitlyBrand;
    }

    public function setBitlyBrand(bool $bitlyBrand): self
    {
        $this->initialized['bitlyBrand'] = true;
        $this->bitlyBrand = $bitlyBrand;

        return $this;
    }
}
