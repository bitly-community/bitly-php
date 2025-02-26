<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class CampaignChannelClicks extends \ArrayObject
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
    protected $channelGuid;
    /**
     * @var string
     */
    protected $channelName;
    /**
     * @var int
     */
    protected $createdTs;
    /**
     * @var int
     */
    protected $totalClicks;
    /**
     * @var list<CampaignClickData>
     */
    protected $clicks;
    /**
     * @var ChannelBitlinks
     */
    protected $channelBitlinks;

    public function getChannelGuid(): string
    {
        return $this->channelGuid;
    }

    public function setChannelGuid(string $channelGuid): self
    {
        $this->initialized['channelGuid'] = true;
        $this->channelGuid = $channelGuid;

        return $this;
    }

    public function getChannelName(): string
    {
        return $this->channelName;
    }

    public function setChannelName(string $channelName): self
    {
        $this->initialized['channelName'] = true;
        $this->channelName = $channelName;

        return $this;
    }

    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    public function setCreatedTs(int $createdTs): self
    {
        $this->initialized['createdTs'] = true;
        $this->createdTs = $createdTs;

        return $this;
    }

    public function getTotalClicks(): int
    {
        return $this->totalClicks;
    }

    public function setTotalClicks(int $totalClicks): self
    {
        $this->initialized['totalClicks'] = true;
        $this->totalClicks = $totalClicks;

        return $this;
    }

    /**
     * @return list<CampaignClickData>
     */
    public function getClicks(): array
    {
        return $this->clicks;
    }

    /**
     * @param list<CampaignClickData> $clicks
     */
    public function setClicks(array $clicks): self
    {
        $this->initialized['clicks'] = true;
        $this->clicks = $clicks;

        return $this;
    }

    public function getChannelBitlinks(): ChannelBitlinks
    {
        return $this->channelBitlinks;
    }

    public function setChannelBitlinks(ChannelBitlinks $channelBitlinks): self
    {
        $this->initialized['channelBitlinks'] = true;
        $this->channelBitlinks = $channelBitlinks;

        return $this;
    }
}
