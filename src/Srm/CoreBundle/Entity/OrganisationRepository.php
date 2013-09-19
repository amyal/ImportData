<?php

namespace Srm\CoreBundle\Entity;

/**
 * OrganisationRepository
 */
class OrganisationRepository
{

    /**
     * @var string
     */
    private $label;

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
    private $organisationRepositoryId;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $repositoryIndicators;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repositoryIndicators = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return OrganisationRepository
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return OrganisationRepository
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
     * @return OrganisationRepository
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
     * @return OrganisationRepository
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
     * @return OrganisationRepository
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
     * Get organisationRepositoryId
     *
     * @return integer
     */
    public function getOrganisationRepositoryId()
    {
        return $this->organisationRepositoryId;
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
     * @return OrganisationRepository
     */
    public function addIndicator(Indicator $indicator)
    {
        $indicator->addOrganisationRepository($this);
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
        $indicator->removeOrganisationRepository($this);
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

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
