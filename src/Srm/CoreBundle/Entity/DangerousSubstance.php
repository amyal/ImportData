<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DangerousSubstance
 */
class DangerousSubstance
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
     * @var string
     */
    private $category;

    /**
     * @var integer
     */
    private $dangerousSubstanceId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return DangerousSubstance
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
     * @return DangerousSubstance
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
     * @return DangerousSubstance
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
     * Set category
     *
     * @param string $category
     * @return DangerousSubstance
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get dangerousSubstanceId
     *
     * @return integer 
     */
    public function getDangerousSubstanceId()
    {
        return $this->dangerousSubstanceId;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return DangerousSubstance
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
}
