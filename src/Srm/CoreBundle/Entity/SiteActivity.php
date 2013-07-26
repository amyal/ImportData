<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class SiteActivity
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $siteActivityId;

    /**
     * @var \Srm\CoreBundle\Entity\TypeSite
     */
    private $typeSite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return SiteActivity
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
     * Get siteActivityId
     *
     * @return integer
     */
    public function getSiteActivityId()
    {
        return $this->siteActivityId;
    }

    /**
     * Set typeSite
     *
     * @param \Srm\CoreBundle\Entity\TypeSite $typeSite
     * @return SiteActivity
     */
    public function setTypeSite(TypeSite $typeSite = null)
    {
        $this->typeSite = $typeSite;

        return $this;
    }

    /**
     * Get typeSite
     *
     * @return \Srm\CoreBundle\Entity\TypeSite
     */
    public function getTypeSite()
    {
        return $this->typeSite;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return SiteActivity
     */
    public function addSite(Site $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(Site $site)
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
