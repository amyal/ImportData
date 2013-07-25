<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pole
 */
class Pole
{
    /**
     * @var string
     */
    private $name;

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
    private $poleId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $department;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
        $this->department = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Pole
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return Pole
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
     * @return Pole
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
     * Get poleId
     *
     * @return integer 
     */
    public function getPoleId()
    {
        return $this->poleId;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return Pole
     */
    public function addSite(\Srm\CoreBundle\Entity\Site $site)
    {
        $this->site[] = $site;
    
        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(\Srm\CoreBundle\Entity\Site $site)
    {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return Pole
     */
    public function addDepartment(\Srm\CoreBundle\Entity\Department $department)
    {
        $this->department[] = $department;
    
        return $this;
    }

    /**
     * Remove department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     */
    public function removeDepartment(\Srm\CoreBundle\Entity\Department $department)
    {
        $this->department->removeElement($department);
    }

    /**
     * Get department
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
