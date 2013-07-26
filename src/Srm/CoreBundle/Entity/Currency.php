<?php

namespace Srm\CoreBundle\Entity;

class Currency
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $convertEuro;

    /**
     * @var integer
     */
    private $currencyId;


    /**
     * Set name
     *
     * @param string $name
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
