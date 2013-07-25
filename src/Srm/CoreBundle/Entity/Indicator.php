<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indicator
 */
class Indicator
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $referenceCode;

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
    private $indicatorId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $item;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->item = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Indicator
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
     * Set referenceCode
     *
     * @param string $referenceCode
     * @return Indicator
     */
    public function setReferenceCode($referenceCode)
    {
        $this->referenceCode = $referenceCode;
    
        return $this;
    }

    /**
     * Get referenceCode
     *
     * @return string 
     */
    public function getReferenceCode()
    {
        return $this->referenceCode;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Indicator
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
     * @return Indicator
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
     * @return Indicator
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
     * Get indicatorId
     *
     * @return integer 
     */
    public function getIndicatorId()
    {
        return $this->indicatorId;
    }

    /**
     * Add item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     * @return Indicator
     */
    public function addItem(\Srm\CoreBundle\Entity\Item $item)
    {
        $this->item[] = $item;
    
        return $this;
    }

    /**
     * Remove item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     */
    public function removeItem(\Srm\CoreBundle\Entity\Item $item)
    {
        $this->item->removeElement($item);
    }

    /**
     * Get item
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItem()
    {
        return $this->item;
    }
}
