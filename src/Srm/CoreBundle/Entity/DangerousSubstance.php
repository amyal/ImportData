<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class DangerousSubstance
{
    /**
     * @var string
     */
    private $name;

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
        $this->site = new ArrayCollection();
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
