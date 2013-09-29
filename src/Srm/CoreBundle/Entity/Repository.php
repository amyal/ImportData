<?php

namespace Srm\CoreBundle\Entity;

/**
 * Repository
 */
class Repository
{

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

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
    private $repositoryId;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $repositoryIndicators;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $repositoryCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencials;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repositoryIndicators = new \Doctrine\Common\Collections\ArrayCollection();
        $this->repositoryCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->referencials         = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Repository
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
     * Set description
     *
     * @param string $description
     * @return Repository
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Repository
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     * @return Repository
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Repository
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
     * @return Repository
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
     * Get repositoryId
     *
     * @return integer
     */
    public function getRepositoryId()
    {
        return $this->repositoryId;
    }

    /**
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return organisation
     */
    public function setOrganisation(Organisation $organisation = null)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \Srm\CoreBundle\Entity\Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Add indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     * @return Repository
     */
    public function addIndicator(Indicator $indicator)
    {
        $indicator->addRepository($this);
        $this->repositoryIndicators[] = $indicator;

        return $this;
    }

    /**
     * Remove indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     */
    public function removeIndicator(Indicator $indicator)
    {
        $indicator->removeRepository($this);
        $this->repositoryIndicators->removeElement($indicator);
    }

    /**
     * Get repositoryIndicators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositoryIndicators()
    {
        return $this->repositoryIndicators;
    }

    /**
     * Add indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     * @return Repository
     */
    public function addIndicatorLevel1(IndicatorLevel1 $indicatorLevel1)
    {
        $indicatorLevel1->addRepository($this);
        $this->repositoryCategories[] = $indicatorLevel1;

        return $this;
    }

    /**
     * Remove indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     */
    public function removeIndicatorLevel1(IndicatorLevel1 $indicatorLevel1)
    {
        $indicatorLevel1->removeRepository($this);
        $this->repositoryCategories->removeElement($indicatorLevel1);
    }

    /**
     * Get repositoryCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositoryCategories()
    {
        return $this->repositoryCategories;
    }

    /**
     * Add referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Referencial
     */
    public function addReferencial(Referencial $referencial)
    {
        $referencial->addRepository($this);
        $this->referencials[] = $referencial;

        return $this;
    }

    /**
     * Remove referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     */
    public function removeReferencial(Referencial $referencial)
    {
        $referencial->removeRepository($this);
        $this->referencials->removeElement($referencial);
    }

    /**
     * Get referencials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferencials()
    {
        return $this->referencials;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}