<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class Webhook extends \ArrayObject
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
     * @var array<string, string>
     */
    protected $references;
    /**
     * @var string
     */
    protected $guid;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $modified;
    /**
     * @var string
     */
    protected $modifiedBy;
    /**
     * @var string
     */
    protected $alerted;
    /**
     * @var string
     */
    protected $deactivated;
    /**
     * @var bool
     */
    protected $isActive;
    /**
     * @var bool
     */
    protected $isAlert;
    /**
     * @var string
     */
    protected $organizationGuid;
    /**
     * @var string
     */
    protected $groupGuid;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $event;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $oauthUrl;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $clientSecret;
    /**
     * @var bool
     */
    protected $fetchTags;

    /**
     * @return array<string, string>
     */
    public function getReferences(): iterable
    {
        return $this->references;
    }

    /**
     * @param array<string, string> $references
     */
    public function setReferences(iterable $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;

        return $this;
    }

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

    public function getCreated(): string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getModified(): string
    {
        return $this->modified;
    }

    public function setModified(string $modified): self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;

        return $this;
    }

    public function getModifiedBy(): string
    {
        return $this->modifiedBy;
    }

    public function setModifiedBy(string $modifiedBy): self
    {
        $this->initialized['modifiedBy'] = true;
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    public function getAlerted(): string
    {
        return $this->alerted;
    }

    public function setAlerted(string $alerted): self
    {
        $this->initialized['alerted'] = true;
        $this->alerted = $alerted;

        return $this;
    }

    public function getDeactivated(): string
    {
        return $this->deactivated;
    }

    public function setDeactivated(string $deactivated): self
    {
        $this->initialized['deactivated'] = true;
        $this->deactivated = $deactivated;

        return $this;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsAlert(): bool
    {
        return $this->isAlert;
    }

    public function setIsAlert(bool $isAlert): self
    {
        $this->initialized['isAlert'] = true;
        $this->isAlert = $isAlert;

        return $this;
    }

    public function getOrganizationGuid(): string
    {
        return $this->organizationGuid;
    }

    public function setOrganizationGuid(string $organizationGuid): self
    {
        $this->initialized['organizationGuid'] = true;
        $this->organizationGuid = $organizationGuid;

        return $this;
    }

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

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->initialized['event'] = true;
        $this->event = $event;

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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getOauthUrl(): string
    {
        return $this->oauthUrl;
    }

    public function setOauthUrl(string $oauthUrl): self
    {
        $this->initialized['oauthUrl'] = true;
        $this->oauthUrl = $oauthUrl;

        return $this;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(string $clientSecret): self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;

        return $this;
    }

    public function getFetchTags(): bool
    {
        return $this->fetchTags;
    }

    public function setFetchTags(bool $fetchTags): self
    {
        $this->initialized['fetchTags'] = true;
        $this->fetchTags = $fetchTags;

        return $this;
    }
}
