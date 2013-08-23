<?php

namespace Srm\CoreBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $acronym;

    /**
     * @var string
     */
    private $contactFunction;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var boolean
     */
    private $gender;

    /**
     * @var string
     */
    private $organisationInvolved;

    /**
     * @var string
     */
    private $manager;

    /**
     * @var \DateTime
     */
    private $dateBirth;

    /**
     * @var boolean
     */
    private $connPlatform;

    /**
     * @var string
     */
    private $owner;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var string
     */
    private $mail;

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
    private $contactId;

    /**
     * @var \Srm\CoreBundle\Entity\StakeholderGroup
     */
    private $stakeholderGroup;

    /**
     * @var \Srm\CoreBundle\Entity\Role
     */
    private $role;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subDepartment;

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
        $this->subDepartment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->department = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set acronym
     *
     * @param string $acronym
     * @return Contact
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * Get acronym
     *
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Set contactFunction
     *
     * @param string $contactFunction
     * @return Contact
     */
    public function setContactFunction($contactFunction)
    {
        $this->contactFunction = $contactFunction;

        return $this;
    }

    /**
     * Get contactFunction
     *
     * @return string
     */
    public function getContactFunction()
    {
        return $this->contactFunction;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Contact
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Contact
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return Contact
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set organisationInvolved
     *
     * @param string $organisationInvolved
     * @return Contact
     */
    public function setOrganisationInvolved($organisationInvolved)
    {
        $this->organisationInvolved = $organisationInvolved;

        return $this;
    }

    /**
     * Get organisationInvolved
     *
     * @return string
     */
    public function getOrganisationInvolved()
    {
        return $this->organisationInvolved;
    }

    /**
     * Set manager
     *
     * @param string $manager
     * @return Contact
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     * @return Contact
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set connPlatform
     *
     * @param boolean $connPlatform
     * @return Contact
     */
    public function setConnPlatform($connPlatform)
    {
        $this->connPlatform = $connPlatform;

        return $this;
    }

    /**
     * Get connPlatform
     *
     * @return boolean
     */
    public function getConnPlatform()
    {
        return $this->connPlatform;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return Contact
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set stakeholderGroup
     *
     * @param \Srm\CoreBundle\Entity\StakeholderGroup $stakeholderGroup
     * @return Contact
     */
    public function setStakeholderGroup(StakeholderGroup $stakeholderGroup = null)
    {
        $this->stakeholderGroup = $stakeholderGroup;

        return $this;
    }

    /**
     * Get stakeholderGroup
     *
     * @return \Srm\CoreBundle\Entity\StakeholderGroup
     */
    public function getStakeholderGroup()
    {
        return $this->stakeholderGroup;
    }

    /**
     * Set role
     *
     * @param \Srm\CoreBundle\Entity\Role $role
     * @return Contact
     */
    public function setRole(Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Srm\CoreBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return Contact
     */
    public function setOrganisation(Organisation $organisation = null)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \Srm\CoreBundle\Entity\Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return Contact
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
     * Add subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Contact
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

    /**
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return Contact
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
