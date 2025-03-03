<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class TimePeriod extends \ArrayObject
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
     * Unix of the start of the date time range for this column to be included in the report.
     *
     * @var int
     */
    protected $from;
    /**
     * Unix of the end of the date time range for this column to be included in the report.
     *
     * @var int
     */
    protected $to;
    /**
     * Metrics column header on the csv follow the format  "%s (01/01/2020 - 01/01/2022)." This field determines what goes on the first %s. For example, "Engagements Custom Date Range" will result in "Engagements Custom Date Range (01/01/2020 - 01/01/2022)".
     *
     * @var string
     */
    protected $csvHeaderPrefix;
    /**
     * The minimum number of clicks a link must have in order to be included in the report. Default is 0. For example, minimum_count 100 means only links with at least a 100 clicks during this time period will be included in the report.
     *
     * @var int
     */
    protected $minimumCount;

    /**
     * Unix of the start of the date time range for this column to be included in the report.
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * Unix of the start of the date time range for this column to be included in the report.
     */
    public function setFrom(int $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * Unix of the end of the date time range for this column to be included in the report.
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * Unix of the end of the date time range for this column to be included in the report.
     */
    public function setTo(int $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    /**
     * Metrics column header on the csv follow the format  "%s (01/01/2020 - 01/01/2022)." This field determines what goes on the first %s. For example, "Engagements Custom Date Range" will result in "Engagements Custom Date Range (01/01/2020 - 01/01/2022)".
     */
    public function getCsvHeaderPrefix(): string
    {
        return $this->csvHeaderPrefix;
    }

    /**
     * Metrics column header on the csv follow the format  "%s (01/01/2020 - 01/01/2022)." This field determines what goes on the first %s. For example, "Engagements Custom Date Range" will result in "Engagements Custom Date Range (01/01/2020 - 01/01/2022)".
     */
    public function setCsvHeaderPrefix(string $csvHeaderPrefix): self
    {
        $this->initialized['csvHeaderPrefix'] = true;
        $this->csvHeaderPrefix = $csvHeaderPrefix;

        return $this;
    }

    /**
     * The minimum number of clicks a link must have in order to be included in the report. Default is 0. For example, minimum_count 100 means only links with at least a 100 clicks during this time period will be included in the report.
     */
    public function getMinimumCount(): int
    {
        return $this->minimumCount;
    }

    /**
     * The minimum number of clicks a link must have in order to be included in the report. Default is 0. For example, minimum_count 100 means only links with at least a 100 clicks during this time period will be included in the report.
     */
    public function setMinimumCount(int $minimumCount): self
    {
        $this->initialized['minimumCount'] = true;
        $this->minimumCount = $minimumCount;

        return $this;
    }
}
