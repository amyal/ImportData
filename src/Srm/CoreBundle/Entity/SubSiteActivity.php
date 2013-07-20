<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubSiteActivity
 */
class SubSiteActivity
{
    /**
     * @var string
     */
    private $label;

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
    private $subSiteActivityId;

    /**
     * @var \Srm\CoreBundle\Entity\SiteActivity
     */
    private $siteActivity;

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
     * Set label
     *
     * @param string $label
     * @return SubSiteActivity
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return SubSiteActivity
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
     * @return SubSiteActivity
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
     * Get subSiteActivityId
     *
     * @return integer 
     */
    public function getSubSiteActivityId()
    {
        return $this->subSiteActivityId;
    }

    /**
     * Set siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     * @return SubSiteActivity
     */
    public function setSiteActivity(\Srm\CoreBundle\Entity\SiteActivity $siteActivity = null)
    {
        $this->siteActivity = $siteActivity;
    
        return $this;
    }

    /**
     * Get siteActivity
     *
     * @return \Srm\CoreBundle\Entity\SiteActivity 
     */
    public function getSiteActivity()
    {
        return $this->siteActivity;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return SubSiteActivity
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
