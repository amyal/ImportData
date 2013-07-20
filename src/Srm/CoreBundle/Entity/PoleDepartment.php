<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoleDepartment
 */
class PoleDepartment
{
    /**
     * @var integer
     */
    private $poleDepartmentId;

    /**
     * @var \Srm\CoreBundle\Entity\Pole
     */
    private $pole;

    /**
     * @var \Srm\CoreBundle\Entity\Department
     */
    private $department;


    /**
     * Get poleDepartmentId
     *
     * @return integer 
     */
    public function getPoleDepartmentId()
    {
        return $this->poleDepartmentId;
    }

    /**
     * Set pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     * @return PoleDepartment
     */
    public function setPole(\Srm\CoreBundle\Entity\Pole $pole = null)
    {
        $this->pole = $pole;
    
        return $this;
    }

    /**
     * Get pole
     *
     * @return \Srm\CoreBundle\Entity\Pole 
     */
    public function getPole()
    {
        return $this->pole;
    }

    /**
     * Set department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return PoleDepartment
     */
    public function setDepartment(\Srm\CoreBundle\Entity\Department $department = null)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return \Srm\CoreBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
