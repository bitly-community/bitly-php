<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class WebhookCreate extends \ArrayObject
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
     * @var bool
     */
    protected $isActive;
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
