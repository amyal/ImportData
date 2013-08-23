<?php

namespace Srm\CoreBundle\Entity;

/**
 * StakeholderGroup
 */
class StakeholderGroup
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $stakeholderGroupType;

    /**
     * @var string
     */
    private $archetype;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var integer
     */
    private $stakeholderGroupId;


    /**
     * Set label
     *
     * @param string $label
     * @return StakeholderGroup
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
     * Set stakeholderGroupType
     *
     * @param string $stakeholderGroupType
     * @return StakeholderGroup
     */
    public function setStakeholderGroupType($stakeholderGroupType)
    {
        $this->stakeholderGroupType = $stakeholderGroupType;

        return $this;
    }

    /**
     * Get stakeholderGroupType
     *
     * @return string
     */
    public function getStakeholderGroupType()
    {
        return $this->stakeholderGroupType;
    }

    /**
     * Set archetype
     *
     * @param string $archetype
     * @return StakeholderGroup
     */
    public function setArchetype($archetype)
    {
        $this->archetype = $archetype;

        return $this;
    }

    /**
     * Get archetype
     *
     * @return string
     */
    public function getArchetype()
    {
        return $this->archetype;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return StakeholderGroup
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
     * @return StakeholderGroup
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
     * Get stakeholderGroupId
     *
     * @return integer
     */
    public function getStakeholderGroupId()
    {
        return $this->stakeholderGroupId;
    }
}
