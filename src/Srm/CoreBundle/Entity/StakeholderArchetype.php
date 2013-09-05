<?php

namespace Srm\CoreBundle\Entity;

/**
 * StakeholderArchetype
 */
class StakeholderArchetype
{
    /**
     * @var string
     */
    private $label;

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
    private $stakeholderArchetypeId;

    /**
     * @var \Srm\CoreBundle\Entity\StakeholderGroup
     */
    private $stakeholderGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupStakeholders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupStakeholders = new \Doctrine\Common\Collections\ArrayCollection();

        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return StakeholderArchetype
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return StakeholderArchetype
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
     * @return StakeholderArchetype
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
     * Get stakeholderArchetypeId
     *
     * @return integer
     */
    public function getStakeholderArchetypeId()
    {
        return $this->stakeholderArchetypeId;
    }

    /**
     * Set stakeholderGroup
     *
     * @param \Srm\CoreBundle\Entity\StakeholderGroup $stakeholderGroup
     * @return StakeholderArchetype
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

    /**
     * Add groupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $groupStakeholder
     * @return StakeholderArchetype
     */
    public function addGroupStakeholder(GroupStakeholder $groupStakeholder)
    {
        $this->groupStakeholders[] = $groupStakeholder;

        return $this;
    }

    /**
     * Remove groupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $groupStakeholder
     */
    public function removeGroupStakeholder(GroupStakeholder $groupStakeholder)
    {
        $this->groupStakeholders->removeElement($groupStakeholder);
    }

    /**
     * Get groupStakeholders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupStakeholders()
    {
        return $this->groupStakeholders;
    }
}