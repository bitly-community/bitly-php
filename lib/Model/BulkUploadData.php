<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class BulkUploadData extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $headers;
    /**
     * @var string
     */
    protected $uploadUrl;

    /**
     * @return array<string, mixed>
     */
    public function getHeaders(): iterable
    {
        return $this->headers;
    }

    /**
     * @param array<string, mixed> $headers
     */
    public function setHeaders(iterable $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    public function getUploadUrl(): string
    {
        return $this->uploadUrl;
    }

    public function setUploadUrl(string $uploadUrl): self
    {
        $this->initialized['uploadUrl'] = true;
        $this->uploadUrl = $uploadUrl;

        return $this;
    }
}
