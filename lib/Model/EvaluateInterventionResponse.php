<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bitly\Model;

class EvaluateInterventionResponse extends \ArrayObject
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
    protected $tier;
    /**
     * @var string
     */
    protected $intervention;
    /**
     * @var EvaluateInterventionResponseMonthlyPromo
     */
    protected $monthlyPromo;
    /**
     * @var EvaluateInterventionResponseAnnualPromo
     */
    protected $annualPromo;

    public function getTier(): string
    {
        return $this->tier;
    }

    public function setTier(string $tier): self
    {
        $this->initialized['tier'] = true;
        $this->tier = $tier;

        return $this;
    }

    public function getIntervention(): string
    {
        return $this->intervention;
    }

    public function setIntervention(string $intervention): self
    {
        $this->initialized['intervention'] = true;
        $this->intervention = $intervention;

        return $this;
    }

    public function getMonthlyPromo(): EvaluateInterventionResponseMonthlyPromo
    {
        return $this->monthlyPromo;
    }

    public function setMonthlyPromo(EvaluateInterventionResponseMonthlyPromo $monthlyPromo): self
    {
        $this->initialized['monthlyPromo'] = true;
        $this->monthlyPromo = $monthlyPromo;

        return $this;
    }

    public function getAnnualPromo(): EvaluateInterventionResponseAnnualPromo
    {
        return $this->annualPromo;
    }

    public function setAnnualPromo(EvaluateInterventionResponseAnnualPromo $annualPromo): self
    {
        $this->initialized['annualPromo'] = true;
        $this->annualPromo = $annualPromo;

        return $this;
    }
}
