<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class MicrositeDownloadMetric extends \ArrayObject
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
     * @var int
     */
    protected $downloads;
    /**
     * @var string
     */
    protected $pageId;

    public function getDownloads(): int
    {
        return $this->downloads;
    }

    public function setDownloads(int $downloads): self
    {
        $this->initialized['downloads'] = true;
        $this->downloads = $downloads;

        return $this;
    }

    public function getPageId(): string
    {
        return $this->pageId;
    }

    public function setPageId(string $pageId): self
    {
        $this->initialized['pageId'] = true;
        $this->pageId = $pageId;

        return $this;
    }
}
