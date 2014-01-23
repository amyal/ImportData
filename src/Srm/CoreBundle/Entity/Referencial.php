<?php

namespace Srm\CoreBundle\Entity;

/**
 * Referencial
 */
class Referencial
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
    private $referencialId;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    //private $referencialIndicators;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $organisationReferencials;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    //private $repositoryCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencialType;

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->referencialIndicators = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->repositoryCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->organisationReferencials = new \Doctrine\Common\Collections\ArrayCollection();
        $this->referencialType         = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Referencial
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
     * @return Referencial
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
     * @return Referencial
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
     * @return Referencial
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
     * @return Referencial
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
     * @return Referencial
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
     * Get referencialId
     *
     * @return integer
     */
    public function getReferencialId()
    {
        return $this->referencialId;
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
     * @param \Srm\CoreBundle\Entity\Indicators $indicator
     * @return Referencial
     */
    /*public function addIndicator(Indicators $indicator)
    {
        $indicator->addReferencial($this);
        $this->referencialIndicators[] = $indicator;

        return $this;
    }*/

    /**
     * Remove indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicator
     */
    /*public function removeIndicator(Indicators $indicator)
    {
        $indicator->removeReferencial($this);
        $this->referencialIndicators->removeElement($indicator);
    }*/

    /**
     * Get referencialIndicators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getReferencialIndicators()
    {
        return $this->referencialIndicators;
    }*/

    /**
     * Add indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicator
     * @return Referencial
     */
    public function addIndicator(Indicators $indicator)
    {
        $indicator->addReferencial($this);
        $this->organisationReferencials[] = $indicator;

        return $this;
    }

    /**
     * Remove indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicator
     */
    public function removeIndicator(Indicators $indicator)
    {
        $indicator->removeReferencial($this);
        $this->organisationReferencials->removeElement($indicator);
    }

    /**
     * Get organisationReferencials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganisationReferencials()
    {
        return $this->organisationReferencials;
    }

    /**
     * Add indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     * @return Referencial
     */
    /*public function addIndicatorLevel1(IndicatorLevel1 $indicatorLevel1)
    {
        $indicatorLevel1->addReferencial($this);
        $this->repositoryCategories[] = $indicatorLevel1;

        return $this;
    }*/

    /**
     * Remove indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     */
    /*public function removeIndicatorLevel1(IndicatorLevel1 $indicatorLevel1)
    {
        $indicatorLevel1->removeReferencial($this);
        $this->repositoryCategories->removeElement($indicatorLevel1);
    }*/

    /**
     * Get repositoryCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getRepositoryCategories()
    {
        return $this->repositoryCategories;
    }
*/
    /**
     * Set referencialType
     *
     * @param \Srm\CoreBundle\Entity\ReferencialType $referencialType
     * @return organisation
     */
    public function setReferencialType(ReferencialType $referencialType = null)
    {
        $this->referencialType = $referencialType;

        return $this;
    }

    /**
     * Get referencialType
     *
     * @return \Srm\CoreBundle\Entity\ReferencialType
     */
    public function getReferencialType()
    {
        return $this->referencialType;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}