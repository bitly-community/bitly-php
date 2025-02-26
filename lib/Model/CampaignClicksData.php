<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class CampaignClicksData extends \ArrayObject
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
    protected $guid;
    /**
     * @var string
     */
    protected $brandGuid;
    /**
     * @var string
     */
    protected $createdBy;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $createdTs;
    /**
     * @var int
     */
    protected $totalClicks;
    /**
     * @var list<CampaignChannelClicks>
     */
    protected $campaignChannels;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->initialized['guid'] = true;
        $this->guid = $guid;

        return $this;
    }

    public function getBrandGuid(): string
    {
        return $this->brandGuid;
    }

    public function setBrandGuid(string $brandGuid): self
    {
        $this->initialized['brandGuid'] = true;
        $this->brandGuid = $brandGuid;

        return $this;
    }

    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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
     * @return list<CampaignChannelClicks>
     */
    public function getCampaignChannels(): array
    {
        return $this->campaignChannels;
    }

    /**
     * @param list<CampaignChannelClicks> $campaignChannels
     */
    public function setCampaignChannels(array $campaignChannels): self
    {
        $this->initialized['campaignChannels'] = true;
        $this->campaignChannels = $campaignChannels;

        return $this;
    }
}
