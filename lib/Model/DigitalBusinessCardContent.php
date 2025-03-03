<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class DigitalBusinessCardContent extends \ArrayObject
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
    protected $digitalBusinessCardId;
    /**
     * @var string
     */
    protected $linkTitle;
    /**
     * @var string
     */
    protected $layout;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $pronouns;
    /**
     * @var string
     */
    protected $company;
    /**
     * @var string
     */
    protected $jobTitle;
    /**
     * @var list<DigitalBusinessCardContact>
     */
    protected $contacts;
    /**
     * @var bool
     */
    protected $downloadEnabled;
    /**
     * @var DigitalBusinessCardContentFile
     */
    protected $file;

    public function getDigitalBusinessCardId(): string
    {
        return $this->digitalBusinessCardId;
    }

    public function setDigitalBusinessCardId(string $digitalBusinessCardId): self
    {
        $this->initialized['digitalBusinessCardId'] = true;
        $this->digitalBusinessCardId = $digitalBusinessCardId;

        return $this;
    }

    public function getLinkTitle(): string
    {
        return $this->linkTitle;
    }

    public function setLinkTitle(string $linkTitle): self
    {
        $this->initialized['linkTitle'] = true;
        $this->linkTitle = $linkTitle;

        return $this;
    }

    public function getLayout(): string
    {
        return $this->layout;
    }

    public function setLayout(string $layout): self
    {
        $this->initialized['layout'] = true;
        $this->layout = $layout;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getPronouns(): string
    {
        return $this->pronouns;
    }

    public function setPronouns(string $pronouns): self
    {
        $this->initialized['pronouns'] = true;
        $this->pronouns = $pronouns;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): self
    {
        $this->initialized['jobTitle'] = true;
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return list<DigitalBusinessCardContact>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @param list<DigitalBusinessCardContact> $contacts
     */
    public function setContacts(array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;

        return $this;
    }

    public function getDownloadEnabled(): bool
    {
        return $this->downloadEnabled;
    }

    public function setDownloadEnabled(bool $downloadEnabled): self
    {
        $this->initialized['downloadEnabled'] = true;
        $this->downloadEnabled = $downloadEnabled;

        return $this;
    }

    public function getFile(): DigitalBusinessCardContentFile
    {
        return $this->file;
    }

    public function setFile(DigitalBusinessCardContentFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;

        return $this;
    }
}
