<?php

namespace Srm\CoreBundle\Entity;

/**
 * Stakeholder
 */
class Stakeholder
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $companySize;

    /**
     * @var \DateTime
     */
    private $startActivity;

    /**
     * @var integer
     */
    private $siretNumber;

    /**
     * @var float
     */
    private $turnovers;

    /**
     * @var string
     */
    private $website;

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
    private $phone;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $parent;

    /**
     * @var string
     */
    private $subsidiary;

    /**
     * @var string
     */
    private $importance;

    /**
     * @var boolean
     */
    private $connexion;

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
    private $stakeholderId;

    /**
     * @var \Srm\CoreBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Srm\CoreBundle\Entity\StakeholderGroup
     */
    private $stakeholderGroup;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupStakeholders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $archetypes;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupStakeholders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Stakeholder
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
     * Set companySize
     *
     * @param integer $companySize
     * @return Stakeholder
     */
    public function setCompanySize($companySize)
    {
        $this->companySize = $companySize;

        return $this;
    }

    /**
     * Get companySize
     *
     * @return integer
     */
    public function getCompanySize()
    {
        return $this->companySize;
    }

    /**
     * Set startActivity
     *
     * @param \DateTime $startActivity
     * @return Stakeholder
     */
    public function setStartActivity($startActivity)
    {
        $this->startActivity = $startActivity;

        return $this;
    }

    /**
     * Get startActivity
     *
     * @return \DateTime
     */
    public function getStartActivity()
    {
        return $this->startActivity;
    }

    /**
     * Set siretNumber
     *
     * @param integer $siretNumber
     * @return Stakeholder
     */
    public function setSiretNumber($siretNumber)
    {
        $this->siretNumber = $siretNumber;

        return $this;
    }

    /**
     * Get siretNumber
     *
     * @return integer
     */
    public function getSiretNumber()
    {
        return $this->siretNumber;
    }

    /**
     * Set turnovers
     *
     * @param float $turnovers
     * @return Stakeholder
     */
    public function setTurnovers($turnovers)
    {
        $this->turnovers = $turnovers;

        return $this;
    }

    /**
     * Get turnovers
     *
     * @return float
     */
    public function getTurnovers()
    {
        return $this->turnovers;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Stakeholder
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
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
     * Set phone
     *
     * @param string $phone
     * @return Stakeholder
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
     * Set fax
     *
     * @param string $fax
     * @return Stakeholder
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
     * Set email
     *
     * @param string $email
     * @return Stakeholder
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return Stakeholder
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set subsidiary
     *
     * @param string $subsidiary
     * @return Stakeholder
     */
    public function setSubsidiary($subsidiary)
    {
        $this->subsidiary = $subsidiary;

        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return string
     */
    public function getSubsidiary()
    {
        return $this->subsidiary;
    }

    /**
     * Set importance
     *
     * @param string $importance
     * @return Stakeholder
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

        return $this;
    }

    /**
     * Get importance
     *
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Set connexion
     *
     * @param boolean $connexion
     * @return Stakeholder
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;

        return $this;
    }

    /**
     * Get connexion
     *
     * @return boolean
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Stakeholder
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
     * @return Stakeholder
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
     * @return Stakeholder
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
     * @return Stakeholder
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
     * Get stakeholderId
     *
     * @return integer
     */
    public function getStakeholderId()
    {
        return $this->stakeholderId;
    }

    /**
     * Set address
     *
     * @param \Srm\CoreBundle\Entity\Address $address
     * @return Stakeholder
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
     * Set stakeholderGroup
     *
     * @param \Srm\CoreBundle\Entity\StakeholderGroup $stakeholderGroup
     * @return Stakeholder
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
     * Add groupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $groupStakeholder
     * @return Stakeholder
     */
    public function addGroupStakeholder(GroupStakeholder $groupStakeholder)
    {
        $groupStakeholder->addStakeholder($this);
        $this->groupStakeholders[] = $groupStakeholder;

        return $this;
    }

    /**
     * Remove groupStakeholder
     *
     * @param \Srm\CoreBundle\Entity\GroupStakeholder $groupStakeholder
     */
    public function removeGroupStakeholder(GroupStakeholder $groupStakeholder)
    {
        $groupStakeholder->removeStakeholder($this);
        $this->groupStakeholders->removeElement($groupStakeholder);
    }

    /**
     * Get groupStakeholders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupStakeholders()
    {
        return $this->groupStakeholders;
    }

    /**
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Stakeholder
     */
    public function addContact(Contact $contact)
    {   // $contact->addStackholder($this);
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     */
    public function removeContact(Contact $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return Site
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
     * Add archetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $archetype
     * @return Stakeholder
     */
    public function addArchetype(StakeholderArchetype $archetype)
    {   
        $this->archetypes[] = $archetype;

        return $this;
    }

    /**
     * Remove archetype
     *
     * @param \Srm\CoreBundle\Entity\StakeholderArchetype $archetype
     */
    public function removeArchetype(StakeholderArchetype $archetype)
    {
        $this->archetypes->removeElement($archetype);
    }

    /**
     * Get archetypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArchetypes()
    {
        return $this->archetypes;
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
