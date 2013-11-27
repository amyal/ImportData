<?php

namespace Srm\CoreBundle\Entity;

/**
 * IndicatorLevel1
 */
class IndicatorLevel1
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
    private $indicatorLevel1Id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;


    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return IndicatorLevel1
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
     * @return IndicatorLevel1
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return IndicatorLevel1
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
     * @return IndicatorLevel1
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
     * Get indicatorLevel1Id
     *
     * @return integer
     */
    public function getIndicatorLevel1Id()
    {
        return $this->indicatorLevel1Id;
    }
    
    /**
     * Add indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $category
     * @return IndicatorLevel1
     */
    public function addIndicatorLevel1(IndicatorLevel1 $category)
    {
        $category->addIndicatorLevel1($this);
        $this->indicatorLevel1[] = $category;

        return $this;
    }

    /**
     * Remove indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $category
     */
    public function removeIndicatorLevel1(IndicatorLevel1 $category)
    {
        $category->removeIndicatorLevel1($this);
        $this->indicatorLevel1->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndicatorLevels1()
    {
        return $this->categories;
    }
}
