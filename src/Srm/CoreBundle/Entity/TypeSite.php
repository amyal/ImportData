<?php

namespace Srm\CoreBundle\Entity;

class TypeSite
{
    private $label;
    private $category;
    private $typeSiteId;


    /**
     * Set label
     *
     * @param string $label
     * @return TypeSite
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
     * Set category
     *
     * @param string $category
     * @return TypeSite
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get typeSiteId
     *
     * @return integer
     */
    public function getTypeSiteId()
    {
        return $this->typeSiteId;
    }
}
