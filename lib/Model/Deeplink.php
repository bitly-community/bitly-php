<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class Deeplink extends \ArrayObject
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
    protected $appId;
    /**
     * @var string
     */
    protected $appUriPath;
    /**
     * @var string
     */
    protected $installUrl;
    /**
     * @var string
     */
    protected $installType;

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;

        return $this;
    }

    public function getAppUriPath(): string
    {
        return $this->appUriPath;
    }

    public function setAppUriPath(string $appUriPath): self
    {
        $this->initialized['appUriPath'] = true;
        $this->appUriPath = $appUriPath;

        return $this;
    }

    public function getInstallUrl(): string
    {
        return $this->installUrl;
    }

    public function setInstallUrl(string $installUrl): self
    {
        $this->initialized['installUrl'] = true;
        $this->installUrl = $installUrl;

        return $this;
    }

    public function getInstallType(): string
    {
        return $this->installType;
    }

    public function setInstallType(string $installType): self
    {
        $this->initialized['installType'] = true;
        $this->installType = $installType;

        return $this;
    }
}
