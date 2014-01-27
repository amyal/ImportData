<?php

namespace Srm\CoreBundle\Entity;

/**
 * Country
 */
class Country
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $countryId;
    
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $alpha2;
    
    /**
     * @var string
     */
    private $alpha3;
    
    /**
     * @var string
     */
    private $label_an;
    
    /**
     * Set code
     *
     * @param string $code
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set alpha2
     *
     * @param string $alpha2
     * @return Country
     */
    public function setAlpha2($alpha2)
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    /**
     * Get alpha2
     *
     * @return string
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * Set alpha3
     *
     * @param string $alpha3
     * @return Country
     */
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get alpha3
     *
     * @return string
     */
    public function getAlpha3()
    {
        return $this->alpha3;
    }
    
    /**
     * Set label_an
     *
     * @param string $label_an
     * @return Country
     */
    public function setLabelAn($label_an)
    {
        $this->label_an = $label_an;

        return $this;
    }

    /**
     * Get label_an
     *
     * @return string
     */
    public function getLabelAn()
    {
        return $this->label_an;
    }
    
    /**
     * Set label
     *
     * @param string $label
     * @return Country
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
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
}
