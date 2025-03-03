<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class SSOSettings extends \ArrayObject
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
    protected $organizationGuid;
    /**
     * @var string
     */
    protected $identityProvider;
    /**
     * @var string
     */
    protected $issuerUrl;
    /**
     * @var string
     */
    protected $urlSlug;
    /**
     * @var string
     */
    protected $idpUrl;
    /**
     * @var string
     */
    protected $samlEndpoint;
    /**
     * @var string
     */
    protected $certificate;
    /**
     * @var string
     */
    protected $sloEndpoint;
    /**
     * @var list<string>
     */
    protected $domains;
    /**
     * @var string
     */
    protected $defaultGroupGuid;

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

    public function getIdentityProvider(): string
    {
        return $this->identityProvider;
    }

    public function setIdentityProvider(string $identityProvider): self
    {
        $this->initialized['identityProvider'] = true;
        $this->identityProvider = $identityProvider;

        return $this;
    }

    public function getIssuerUrl(): string
    {
        return $this->issuerUrl;
    }

    public function setIssuerUrl(string $issuerUrl): self
    {
        $this->initialized['issuerUrl'] = true;
        $this->issuerUrl = $issuerUrl;

        return $this;
    }

    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }

    public function setUrlSlug(string $urlSlug): self
    {
        $this->initialized['urlSlug'] = true;
        $this->urlSlug = $urlSlug;

        return $this;
    }

    public function getIdpUrl(): string
    {
        return $this->idpUrl;
    }

    public function setIdpUrl(string $idpUrl): self
    {
        $this->initialized['idpUrl'] = true;
        $this->idpUrl = $idpUrl;

        return $this;
    }

    public function getSamlEndpoint(): string
    {
        return $this->samlEndpoint;
    }

    public function setSamlEndpoint(string $samlEndpoint): self
    {
        $this->initialized['samlEndpoint'] = true;
        $this->samlEndpoint = $samlEndpoint;

        return $this;
    }

    public function getCertificate(): string
    {
        return $this->certificate;
    }

    public function setCertificate(string $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;

        return $this;
    }

    public function getSloEndpoint(): string
    {
        return $this->sloEndpoint;
    }

    public function setSloEndpoint(string $sloEndpoint): self
    {
        $this->initialized['sloEndpoint'] = true;
        $this->sloEndpoint = $sloEndpoint;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getDomains(): array
    {
        return $this->domains;
    }

    /**
     * @param list<string> $domains
     */
    public function setDomains(array $domains): self
    {
        $this->initialized['domains'] = true;
        $this->domains = $domains;

        return $this;
    }

    public function getDefaultGroupGuid(): string
    {
        return $this->defaultGroupGuid;
    }

    public function setDefaultGroupGuid(string $defaultGroupGuid): self
    {
        $this->initialized['defaultGroupGuid'] = true;
        $this->defaultGroupGuid = $defaultGroupGuid;

        return $this;
    }
}
