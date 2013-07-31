<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Role
 */
class Role
{
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
    private $roleId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affiliation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affiliation = new ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Role
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
     * @return Role
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
     * @return Role
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
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Add affiliation
     *
     * @param \Srm\CoreBundle\Entity\Affiliation $affiliation
     * @return Role
     */
    public function addAffiliation(Affiliation $affiliation)
    {
        $this->affiliation[] = $affiliation;

        return $this;
    }

    /**
     * Remove affiliation
     *
     * @param \Srm\CoreBundle\Entity\Affiliation $affiliation
     */
    public function removeAffiliation(Affiliation $affiliation)
    {
        $this->affiliation->removeElement($affiliation);
    }

    /**
     * Get affiliation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }
}
