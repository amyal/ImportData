<?php

namespace Srm\CoreBundle\Entity;

/**
 * Item
 */
class Item
{
    /**
     * @var string
     */
    private $code;

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
    private $itemId;

    /**
     * @var \Srm\CoreBundle\Entity\SubDepartment
     */
    private $subDepartment;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestions
     */
    private $itemQuestions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $indicators;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->indicators = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Item
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Item
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
     * Set itemQuestions
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestions $itemQuestions
     * @return Item
     */
    public function setItemQuestions(ItemQuestions $itemQuestions = null)
    {
        $this->itemQuestions = $itemQuestions;

        return $this;
    }

    /**
     * Get itemQuestions
     *
     * @return \Srm\CoreBundle\Entity\ItemQuestions
     */
    public function getItemQuestions()
    {
        return $this->itemQuestions;
    }

    /**
     * Add indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     * @return Item
     */
    public function addIndicator(Indicator $indicator)
    {
        $indicator->addItem($this);
        $this->indicators[] = $indicator;

        return $this;
    }

    /**
     * Remove indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     */
    public function removeIndicator(Indicator $indicator)
    {
        $indicator->removeItem($this);
        $this->indicators->removeElement($indicator);
    }

    /**
     * Get indicators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndicators()
    {
        return $this->indicators;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
