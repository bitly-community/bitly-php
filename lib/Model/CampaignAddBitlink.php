<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class CampaignAddBitlink extends \ArrayObject
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
     * @var list<string>
     */
    protected $channelGuids;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var bool
     */
    protected $addUtmParams;

    /**
     * @return list<string>
     */
    public function getChannelGuids(): array
    {
        return $this->channelGuids;
    }

    /**
     * @param list<string> $channelGuids
     */
    public function setChannelGuids(array $channelGuids): self
    {
        $this->initialized['channelGuids'] = true;
        $this->channelGuids = $channelGuids;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getAddUtmParams(): bool
    {
        return $this->addUtmParams;
    }

    public function setAddUtmParams(bool $addUtmParams): self
    {
        $this->initialized['addUtmParams'] = true;
        $this->addUtmParams = $addUtmParams;

        return $this;
    }
}
