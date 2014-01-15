<?php

namespace Srm\CoreBundle\Entity;

/**
 * Category2
 */
class Category2
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
    private $category2Id;

    /**
     * @var \Srm\CoreBundle\Entity\Category3
     */
    private $category3;


    public function __construct()
    {
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Category2
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
     * @return Category2
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
     * @return Category2
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
     * @return Category2
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
     * Get category2Id
     *
     * @return integer
     */
    public function getCategory2Id()
    {
        return $this->category2Id;
    }

    /**
     * Set category3
     *
     * @param \Srm\CoreBundle\Entity\Category3 $category3
     * @return Category2
     */
    public function setCategory3(Category3 $category3 = null)
    {
        $this->category3 = $category3;

        return $this;
    }

    /**
     * Get category3
     *
     * @return \Srm\CoreBundle\Entity\Category3
     */
    public function getCategory3()
    {
        return $this->category3;
    }

}
