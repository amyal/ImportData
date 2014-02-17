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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencialIndicators;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    //private $organisationReferencials;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $indicator;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencialType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $toGroupStakeholder;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fromGroupStakeholder;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories3;

    /**
     * @var \Srm\CoreBundle\Entity\Indicators
     */
    private $indicators;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->referencialIndicators    = new \Doctrine\Common\Collections\ArrayCollection();
        $this->indicator                = new \Doctrine\Common\Collections\ArrayCollection();
        $this->referencialType          = new \Doctrine\Common\Collections\ArrayCollection();
        $this->toGroupStakeholder       = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fromGroupStakeholder     = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Get 
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferencialIndicators()
    {
        return $this->referencialIndicators;
    }

    public function setReferencialIndicators($referencialIndicators)
    {
        $this->referencialIndicators = $referencialIndicators;

        return $this;
    }

    /**
     * Get organisationReferencials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getOrganisationReferencials()
    {
        return $this->organisationReferencials;
    }

    public function setOrganisationReferencials($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }*/

    /**
     * Get indicators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndicators()
    {
        return $this->indicators;
    }

    public function setIndicators($indicators)
    {
        $this->indicators = $indicators;

        return $this;
    }

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

    /**
     * Set toGroupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $toGroupStakeholder
     * @return organisation
     */
    public function setToGroupStakeholder(GroupStakeholder $toGroupStakeholder = null)
    {
        $this->toGroupStakeholder = $toGroupStakeholder;

        return $this;
    }

    /**
     * Get toGroupStakeholder
     *
     * @return \Srm\CoreBundle\Entity\GroupStakeholder
     */
    public function getToGroupStakeholder()
    {
        return $this->toGroupStakeholder;
    }

    /**
     * Set fromGroupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $fromGroupStakeholder
     * @return organisation
     */
    public function setFromGroupStakeholder(GroupStakeholder $fromGroupStakeholder = null)
    {
        $this->fromGroupStakeholder = $fromGroupStakeholder;

        return $this;
    }

    /**
     * Get fromGroupStakeholder
     *
     * @return \Srm\CoreBundle\Entity\GroupStakeholder
     */
    public function getFromGroupStakeholder()
    {
        return $this->fromGroupStakeholder;
    }
   
    /**
     * Add category1
     *
     * @param \Srm\CoreBundle\Entity\Category1 $category1
     * @return Referencial
     */
    public function addCategories1(Category1 $category1)
    {
        $category1->addReferencial($this);
        $this->categories1[] = $category1;

        return $this;
    }

    /**
     * Remove category1
     *
     * @param \Srm\CoreBundle\Entity\Category1 $category1
     */
    public function removeCategories1(Category1 $category1)
    {
        $category1->removeReferencial($this);
        $this->categories1->removeElement($category1);
    }

    /**
     * Get categories1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories1()
    {
        return $this->categories1;
    }

    
    /**
     * Add category2
     *
     * @param \Srm\CoreBundle\Entity\Category2 $category2
     * @return Referencial
     */
    public function addCategories2(Category2 $category2)
    {
        $category2->addReferencial($this);
        $this->categories2[] = $category2;

        return $this;
    }

    /**
     * Remove category2
     *
     * @param \Srm\CoreBundle\Entity\Category2 $category2
     */
    public function removeCategories2(Category2 $category2)
    {
        $category2->removeReferencial($this);
        $this->categories2->removeElement($category2);
    }

    /**
     * Get categories2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories2()
    {
        return $this->categories2;
    }

  
    
   /**
     * Add category3
     *
     * @param \Srm\CoreBundle\Entity\Category3 $category3
     * @return Referencial
     */
    public function addCategories3(Category3 $category3)
    {
        $category3->addReferencial($this);
        $this->categories3[] = $category3;

        return $this;
    }

    /**
     * Remove category3
     *
     * @param \Srm\CoreBundle\Entity\Category3 $category3
     */
    public function removeCategories3(Category3 $category3)
    {
        $category3->removeReferencial($this);
        $this->categories3->removeElement($category3);
    }

    /**
     * Get categories3
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories3()
    {
        return $this->categories3;
    }

      
    

    /**
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return Site
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
     * @return Referencial
     */
    public function addIndicator(Indicator $indicator)
    {
        $this->indicator->setDeleted(true);
        $this->indicator[] = $indicator;

        return $this;
    }

    /**
     * Remove referencial
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     */
    public function removeIndicator(Indicator $indicator)
    {
        $this->indicator->removeElement($indicator);
    }

    /**
     * Get indicator
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndicator()
    {
        return $this->indicator;
    }
    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}