<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class OAuthApp extends \ArrayObject
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
    protected $name;
    /**
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $link;
    /**
     * @var bool
     */
    protected $requireOauthPkce;

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

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;

        return $this;
    }

    public function getRequireOauthPkce(): bool
    {
        return $this->requireOauthPkce;
    }

    public function setRequireOauthPkce(bool $requireOauthPkce): self
    {
        $this->initialized['requireOauthPkce'] = true;
        $this->requireOauthPkce = $requireOauthPkce;

        return $this;
    }
}
