<?php

namespace Srm\CoreBundle\Entity;

/**
 * Zip
 */
class Zip
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var integer
     */
    private $zipId;

    /**
     * @var \Srm\CoreBundle\Entity\City
     */
    private $city;


    /**
     * Set code
     *
     * @param string $code
     * @return Zip
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Zip
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Zip
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get zipId
     *
     * @return integer
     */
    public function getZipId()
    {
        return $this->zipId;
    }

    /**
     * Set city
     *
     * @param \Srm\CoreBundle\Entity\City $city
     * @return Zip
     */
    public function setCity(City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Srm\CoreBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }
}
