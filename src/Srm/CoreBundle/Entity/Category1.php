<?php

namespace Srm\CoreBundle\Entity;

/**
 * Category1
 */
class Category1
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
    private $category1Id;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    //private $categories;


    public function __construct()
    {
        //$this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Category1
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
     * @return Category1
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
     * @return Category1
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
     * @return Category1
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
     * Get category1Id
     *
     * @return integer
     */
    public function getCategory1Id()
    {
        return $this->category1Id;
    }
    
    /**
     * Add category1
     *
     * @param \Srm\CoreBundle\Entity\Category1 $category
     * @return Category1
     */
    public function addCategory1(Category1 $category)
    {
        $category->addCategory1($this);
        $this->category1[] = $category;

        return $this;
    }

    /**
     * Remove category1
     *
     * @param \Srm\CoreBundle\Entity\Category1 $category
     */
    /*public function removeCategory1(Category1 $category)
    {
        $category->removeCategory1($this);
        $this->category1->removeElement($category);
    }*/

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getIndicatorLevels1()
    {
        return $this->categories;
    }*/
}
