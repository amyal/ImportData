<?php

namespace Srm\CoreBundle\Entity;

/**
 * Category3
 */
class Category3
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
    private $category3Id;

    /**
     * @var \Srm\CoreBundle\Entity\Category2
     */
    private $category2;


    public function __construct()
    {
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Category3
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
     * @return Category3
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
     * @return Category3
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
     * @return Category3
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
     * Get category3Id
     *
     * @return integer
     */
    public function getCategory3Id()
    {
        return $this->category3Id;
    }

    /**
     * Set category2
     *
     * @param \Srm\CoreBundle\Entity\Category2 $category2
     * @return Category3
     */
    public function setCategory2(Category2 $category2 = null)
    {
        $this->category2 = $category2;

        return $this;
    }

    /**
     * Get category2
     *
     * @return \Srm\CoreBundle\Entity\Category2
     */
    public function getCategory2()
    {
        return $this->category2;
    }
}
