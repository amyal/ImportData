<?php

namespace Srm\CoreBundle\Entity;

/**
 * SubDepartment
 */
class SubDepartment
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $shortLabel;

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
     * @var integer
     */
    private $subDepartmentId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $department;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->department = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return SubDepartment
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
     * Set shortLabel
     *
     * @param string $shortLabel
     * @return SubDepartment
     */
    public function setShortLabel($shortLabel)
    {
        $this->shortLabel = $shortLabel;

        return $this;
    }

    /**
     * Get shortLabel
     *
     * @return string
     */
    public function getShortLabel()
    {
        return $this->shortLabel;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return SubDepartment
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
     * @return SubDepartment
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
     * @return SubDepartment
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
     * Get subDepartmentId
     *
     * @return integer
     */
    public function getSubDepartmentId()
    {
        return $this->subDepartmentId;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return SubDepartment
     */
    public function addSite(Site $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(Site $site)
    {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return SubDepartment
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
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return SubDepartment
     */
    public function addDepartment(Department $department)
    {
        $this->department[] = $department;

        return $this;
    }

    /**
     * Remove department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     */
    public function removeDepartment(Department $department)
    {
        $this->department->removeElement($department);
    }

    /**
     * Get department
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
