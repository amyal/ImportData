<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StakeholderGroup
 */
class StakeholderGroup
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $typee;

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
     * @var string
     */
    private $contact;

    /**
     * @var integer
     */
    private $stakeholderGroupId;


    /**
     * Set name
     *
     * @param string $name
     * @return StakeholderGroup
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
     * Set typee
     *
     * @param string $typee
     * @return StakeholderGroup
     */
    public function setTypee($typee)
    {
        $this->typee = $typee;
    
        return $this;
    }

    /**
     * Get typee
     *
     * @return string 
     */
    public function getTypee()
    {
        return $this->typee;
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
     * Set contact
     *
     * @param string $contact
     * @return StakeholderGroup
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
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
