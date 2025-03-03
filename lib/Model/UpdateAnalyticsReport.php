<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class UpdateAnalyticsReport extends \ArrayObject
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
     * @var ReportSettings
     */
    protected $reportSettings;
    /**
     * @var bool
     */
    protected $isActive;

    public function getReportSettings(): ReportSettings
    {
        return $this->reportSettings;
    }

    public function setReportSettings(ReportSettings $reportSettings): self
    {
        $this->initialized['reportSettings'] = true;
        $this->reportSettings = $reportSettings;

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
}
