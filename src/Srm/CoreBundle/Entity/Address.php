<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

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
    private $addressId;

    /**
     * @var \Srm\CoreBundle\Entity\Zip
     */
    private $zip;


    /**
     * Set name
     *
     * @param string $name
     * @return Address
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
     * Set type
     *
     * @param string $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set zip
     *
     * @param \Srm\CoreBundle\Entity\Zip $zip
     * @return Address
     */
    public function setZip(\Srm\CoreBundle\Entity\Zip $zip = null)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return \Srm\CoreBundle\Entity\Zip 
     */
    public function getZip()
    {
        return $this->zip;
    }
}
