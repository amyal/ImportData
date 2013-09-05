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
