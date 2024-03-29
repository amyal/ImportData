<?php

namespace Srm\CoreBundle\Entity;

/**
 * DangerousSubstance
 */
class DangerousSubstance
{
    /**
     * @var string
     */
    private $label;

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
    private $sites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return DangerousSubstance
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
    public function addSite(Site $site)
    {
        $this->sites[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(Site $site)
    {
        $this->sites->removeElement($site);
    }

    /**
     * Get sites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSites()
    {
        return $this->sites;
    }
}
