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
     * @var boolean
     */
    private $isUser;

    /**
     * @var boolean
     */
    private $shareholder;

    /**
     * @var string
     */
    private $parts;

    /**
     * @var string
     */
    private $officePhone;

    /**
     * @var string
     */
    private $mobilePhone;

    /**
     * @var string
     */
    private $fax;

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
     * @var \Srm\CoreBundle\Entity\Role
     */
    private $role;

    /**
     * @var \Srm\CoreBundle\Entity\Gender
     */
    private $gender;

    /**
     * @var \Srm\CoreBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stakeholders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subDepartments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stakeholders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subDepartments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sites = new \Doctrine\Common\Collections\ArrayCollection();

        $this->isUser = false;
        $this->shareholder = false;

        $this->creationDate = new \DateTime();
        $this->deleted = false;
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
     * Set isUser
     *
     * @param boolean $isUser
     * @return Contact
     */
    public function setIsUser($isUser)
    {
        $this->isUser = $isUser;

        return $this;
    }

    /**
     * Get isUser
     *
     * @return string
     */
    public function getIsUser()
    {
        return $this->isUser;
    }

    /**
     * Set shareholder
     *
     * @param boolean $shareholder
     * @return Contact
     */
    public function setShareholder($shareholder)
    {
        $this->shareholder = $shareholder;

        return $this;
    }

    /**
     * Get shareholder
     *
     * @return string
     */
    public function getShareholder()
    {
        return $this->shareholder;
    }

    /**
     * Set parts
     *
     * @param string $parts
     * @return Contact
     */
    public function setParts($parts)
    {
        $this->parts = $parts;

        return $this;
    }

    /**
     * Get parts
     *
     * @return string
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Set officePhone
     *
     * @param string $officePhone
     * @return Contact
     */
    public function setOfficePhone($officePhone)
    {
        $this->officePhone = $officePhone;

        return $this;
    }

    /**
     * Get officePhone
     *
     * @return string
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Contact
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Contact
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
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
     * Set gender
     *
     * @param \Srm\CoreBundle\Entity\Gender $gender
     * @return Contact
     */
    public function setGender(Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return \Srm\CoreBundle\Entity\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param \Srm\CoreBundle\Entity\Address $address
     * @return Contact
     */
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Srm\CoreBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
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
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return Contact
     */
    public function addDepartment(Department $department)
    {
        $this->departments[] = $department;

        return $this;
    }

    /**
     * Remove department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     */
    public function removeDepartment(Department $department)
    {
        $this->departments->removeElement($department);
    }

    /**
     * Get departments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * Add stakeholder
     *
     * @param \Srm\CoreBundle\Entity\Stakeholder $stakeholder
     * @return Contact
     */
    public function addStakeholder(Stakeholder $stakeholder)
    {
        $this->stakeholders[] = $stakeholder;

        return $this;
    }

    /**
     * Remove stakeholder
     *
     * @param \Srm\CoreBundle\Entity\Stakeholder $stakeholder
     */
    public function removeStakeholder(Stakeholder $stakeholder)
    {
        $this->stakeholders->removeElement($stakeholder);
    }

    /**
     * Get stakeholders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStakeholders()
    {
        return $this->stakeholders;
    }

    /**
     * Add subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Contact
     */
    public function addSubDepartment(SubDepartment $subDepartment)
    {
        $this->subDepartments[] = $subDepartment;

        return $this;
    }

    /**
     * Remove subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     */
    public function removeSubDepartment(SubDepartment $subDepartment)
    {
        $this->subDepartments->removeElement($subDepartment);
    }

    /**
     * Get subDepartments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubDepartments()
    {
        return $this->subDepartments;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return Contact
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


    public function getLabel()
    {
        return $this->lastname.' '.$this->firstname;
    }

    public function __toString()
    {
        return $this->getLabel();
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
