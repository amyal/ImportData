<?php

namespace Srm\CoreBundle\Entity;

/**
 * GroupStakeholder
 */
class GroupStakeholder
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
    private $groupStakeholderId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stakeholders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stakeholderArchetypes;
    
    /**
     * @var \Srm\CoreBundle\Entity\StakeholderGroup
     */
    private $stakeholderGroup;
    
    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stakeholders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stakeholderArchetypes = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return GroupStakeholder
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
     * @return GroupStakeholder
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
     * @return GroupStakeholder
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
     * @return GroupStakeholder
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
     * @return GroupStakeholder
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
     * Get groupStakeholderId
     *
     * @return integer
     */
    public function getGroupStakeholderId()
    {
        return $this->groupStakeholderId;
    }

    /**
     * Add stakeholder
     *
     * @param \Srm\CoreBundle\Entity\Stakeholder $stakeholder
     * @return GroupStakeholder
     */
    public function addStakeholder(Stakeholder $stakeholder)
    {
        $this->stakeholders[] = $stakeholder;

        return $this;
    }

    /**
     * Remove stakeholder
     *
     * @param \Srm\CoreBundle\Entity\Stakeholder $stakeholder
     */
    public function removeStakeholder(Stakeholder $stakeholder)
    {
        $this->stakeholders->removeElement($stakeholder);
    }

    /**
     * Get stakeholders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStakeholders()
    {
        return $this->stakeholders;
    }
    
    /*public function setStakeholders($stakeholders)
    {
        $this->stakeholders = $stakeholders;

        return $this;
    }
    */
    /**
     * Add stakeholderArchetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype
     * @return GroupStakeholder
     */
    public function addStakeholderArchetype(StakeholderArchetype $stakeholderArchetype)
    {
        $this->stakeholderArchetypes[] = $stakeholderArchetype;

        return $this;
    }

    /**
     * Remove stakeholderArchetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype
     */
    public function removeStakeholderArchetype(StakeholderArchetype $stakeholderArchetype)
    {
        $this->stakeholderArchetypes->removeElement($stakeholderArchetype);
    }

    /**
     * Get stakeholderArchetypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStakeholderArchetypes()
    {
        return $this->stakeholderArchetypes;
    }

    /**
     * Set stakeholderArchetypes
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype
     * @return GroupStakeholder
     */
    public function setStakeholderArchetypes(StakeholderArchetype $stakeholderArchetype = null)
    {
        $this->stakeholderArchetypes = $stakeholderArchetype;

        return $this;
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
     * Set stakeholderGroup
     *
     * @param \Srm\CoreBundle\Entity\StakeholderGroup $stakeholderGroup
     * @return StakeholderGroup
     */
    public function setStakeholderGroup(StakeholderGroup $stakeholderGroup = null)
    {
        $this->stakeholderGroup = $stakeholderGroup;

        return $this;
    }

    /**
     * Get stakeholderGroup
     *
     * @return \Srm\CoreBundle\Entity\StakeholderGroup
     */
    public function getStakeholderGroup()
    {
        return $this->stakeholderGroup;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
