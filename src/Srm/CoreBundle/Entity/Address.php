<?php

namespace Srm\CoreBundle\Entity;

/**
 * Address
 */
class Address
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string
     */
    private $additional1;

    /**
     * @var string
     */
    private $additional2;

    /**
     * @var integer
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var integer
     */
    private $addressId;

    /**
     * @var \Srm\CoreBundle\Entity\Country
     */
    private $country;


    /**
     * Set label
     *
     * @param string $label
     * @return Address
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
     * Set addressType
     *
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set additional1
     *
     * @param string $additional1
     * @return Address
     */
    public function setAdditional1($additional1)
    {
        $this->additional1 = $additional1;

        return $this;
    }

    /**
     * Get additional1
     *
     * @return string
     */
    public function getAdditional1()
    {
        return $this->additional1;
    }

    /**
     * Set additional2
     *
     * @param string $additional2
     * @return Address
     */
    public function setAdditional2($additional2)
    {
        $this->additional2 = $additional2;

        return $this;
    }

    /**
     * Get additional2
     *
     * @return string
     */
    public function getAdditional2()
    {
        return $this->additional2;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get addressId
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set country
     *
     * @param \Srm\CoreBundle\Entity\Country $country
     * @return Address
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Srm\CoreBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }
}
