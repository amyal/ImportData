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

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencialsCat3;


    public function __construct()
    {
        $this->referencialsCat3 = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Add referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Category3
     */
    public function addReferencial(Referencial $referencial)
    {
        $this->referencialsCat3[] = $referencial;

        return $this;
    }

    /**
     * Remove referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     */
    public function removeReferencial(Referencial $referencial)
    {
        $this->referencialsCat3->removeElement($referencial);
    }

    /**
     * Get referencialsCat3
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferencialsCat3()
    {
        return $this->referencialsCat3;
    }

}
