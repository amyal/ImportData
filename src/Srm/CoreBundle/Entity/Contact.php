<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $acronym;

    /**
     * @var string
     */
    private $functionn;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $commenter;

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
    private $connPlatforme;

    /**
     * @var string
     */
    private $owner;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mail;

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
     * Set firstName
     *
     * @param string $firstName
     * @return Contact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
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
     * Set functionn
     *
     * @param string $functionn
     * @return Contact
     */
    public function setFunctionn($functionn)
    {
        $this->functionn = $functionn;
    
        return $this;
    }

    /**
     * Get functionn
     *
     * @return string 
     */
    public function getFunctionn()
    {
        return $this->functionn;
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
     * Set commenter
     *
     * @param string $commenter
     * @return Contact
     */
    public function setCommenter($commenter)
    {
        $this->commenter = $commenter;
    
        return $this;
    }

    /**
     * Get commenter
     *
     * @return string 
     */
    public function getCommenter()
    {
        return $this->commenter;
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
     * Set connPlatforme
     *
     * @param boolean $connPlatforme
     * @return Contact
     */
    public function setConnPlatforme($connPlatforme)
    {
        $this->connPlatforme = $connPlatforme;
    
        return $this;
    }

    /**
     * Get connPlatforme
     *
     * @return boolean 
     */
    public function getConnPlatforme()
    {
        return $this->connPlatforme;
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
     * Set phone
     *
     * @param string $phone
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
     * @return string 
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
    public function setStakeholderGroup(\Srm\CoreBundle\Entity\StakeholderGroup $stakeholderGroup = null)
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
    public function setRole(\Srm\CoreBundle\Entity\Role $role = null)
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
    public function setOrganisation(\Srm\CoreBundle\Entity\Organisation $organisation = null)
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
    public function addSite(\Srm\CoreBundle\Entity\Site $site)
    {
        $this->site[] = $site;
    
        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(\Srm\CoreBundle\Entity\Site $site)
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
    public function addSubDepartment(\Srm\CoreBundle\Entity\SubDepartment $subDepartment)
    {
        $this->subDepartment[] = $subDepartment;
    
        return $this;
    }

    /**
     * Remove subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     */
    public function removeSubDepartment(\Srm\CoreBundle\Entity\SubDepartment $subDepartment)
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
    public function addDepartment(\Srm\CoreBundle\Entity\Department $department)
    {
        $this->department[] = $department;
    
        return $this;
    }

    /**
     * Remove department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     */
    public function removeDepartment(\Srm\CoreBundle\Entity\Department $department)
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
