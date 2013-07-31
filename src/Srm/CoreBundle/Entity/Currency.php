<?php

namespace Srm\CoreBundle\Entity;

/**
 * Currency
 */
class Currency
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var float
     */
    private $convertEuro;

    /**
     * @var integer
     */
    private $currencyId;


    /**
     * Set label
     *
     * @param string $label
     * @return Currency
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set convertEuro
     *
     * @param float $convertEuro
     * @return Currency
     */
    public function setConvertEuro($convertEuro)
    {
        $this->convertEuro = $convertEuro;

        return $this;
    }

    /**
     * Get convertEuro
     *
     * @return float
     */
    public function getConvertEuro()
    {
        return $this->convertEuro;
    }

    /**
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }
}
