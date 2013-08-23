<?php

namespace Srm\CoreBundle\Entity;

/**
 * Department
 */
class Department
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
     * @var string
     */
    private $category;

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
    private $departmentId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pole;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subDepartment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pole = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subDepartment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Department
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
     * @return Department
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
     * Set category
     *
     * @param string $category
     * @return Department
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Department
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
     * @return Department
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
     * @return Department
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
     * @return Department
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
     * Get departmentId
     *
     * @return integer
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return Department
     */
    public function addSite(Site $site)
    {
        $this->sites[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(Site $site)
    {
        $this->sites->removeElement($site);
    }

    /**
     * Get sites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Add pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     * @return Department
     */
    public function addPole(Pole $pole)
    {
        $this->pole[] = $pole;

        return $this;
    }

    /**
     * Remove pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     */
    public function removePole(Pole $pole)
    {
        $this->pole->removeElement($pole);
    }

    /**
     * Get pole
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPole()
    {
        return $this->pole;
    }

    /**
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Department
     */
    public function addContact(Contact $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     */
    public function removeContact(Contact $contact)
    {
        $this->contact->removeElement($contact);
    }

    /**
     * Get contact
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Add subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Department
     */
    public function addSubDepartment(SubDepartment $subDepartment)
    {
        $this->subDepartment[] = $subDepartment;

        return $this;
    }

    /**
     * Remove subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     */
    public function removeSubDepartment(SubDepartment $subDepartment)
    {
        $this->subDepartment->removeElement($subDepartment);
    }

    /**
     * Get subDepartment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubDepartment()
    {
        return $this->subDepartment;
    }
}
