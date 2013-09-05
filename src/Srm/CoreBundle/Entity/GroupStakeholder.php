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
    public function addStakeholder(\Srm\CoreBundle\Entity\Stakeholder $stakeholder)
    {
        $this->stakeholders[] = $stakeholder;

        return $this;
    }

    /**
     * Remove stakeholder
     *
     * @param \Srm\CoreBundle\Entity\Stakeholder $stakeholder
     */
    public function removeStakeholder(\Srm\CoreBundle\Entity\Stakeholder $stakeholder)
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

    /**
     * Add stakeholderArchetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype
     * @return GroupStakeholder
     */
    public function addStakeholderArchetype(\Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype)
    {
        $this->stakeholderArchetypes[] = $stakeholderArchetype;

        return $this;
    }

    /**
     * Remove stakeholderArchetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype
     */
    public function removeStakeholderArchetype(\Srm\CoreBundle\Entity\StakeholderArchetype $stakeholderArchetype)
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

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
