<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Item
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $value;

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
    private $itemId;

    /**
     * @var \Srm\CoreBundle\Entity\Periodicity
     */
    private $periodicity;

    /**
     * @var \Srm\CoreBundle\Entity\SubDepartment
     */
    private $subDepartment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $indicator;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->indicator = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Item
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
     * Set description
     *
     * @param string $description
     * @return Item
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
     * Set value
     *
     * @param string $value
     * @return Item
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set periodicity
     *
     * @param \Srm\CoreBundle\Entity\Periodicity $periodicity
     * @return Item
     */
    public function setPeriodicity(Periodicity $periodicity = null)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return \Srm\CoreBundle\Entity\Periodicity
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Item
     */
    public function setSubDepartment(SubDepartment $subDepartment = null)
    {
        $this->subDepartment = $subDepartment;

        return $this;
    }

    /**
     * Get subDepartment
     *
     * @return \Srm\CoreBundle\Entity\SubDepartment
     */
    public function getSubDepartment()
    {
        return $this->subDepartment;
    }

    /**
     * Add indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     * @return Item
     */
    public function addIndicator(Indicator $indicator)
    {
        $this->indicator[] = $indicator;

        return $this;
    }

    /**
     * Remove indicator
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
}
