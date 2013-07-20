<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SitePole
 */
class SitePole
{
    /**
     * @var integer
     */
    private $sitePoleId;

    /**
     * @var \Srm\CoreBundle\Entity\Site
     */
    private $site;

    /**
     * @var \Srm\CoreBundle\Entity\Pole
     */
    private $pole;


    /**
     * Get sitePoleId
     *
     * @return integer 
     */
    public function getSitePoleId()
    {
        return $this->sitePoleId;
    }

    /**
     * Set site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return SitePole
     */
    public function setSite(\Srm\CoreBundle\Entity\Site $site = null)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return \Srm\CoreBundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     * @return SitePole
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
}
