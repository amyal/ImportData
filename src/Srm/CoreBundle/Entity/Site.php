<?php

namespace Srm\CoreBundle\Entity;

/**
 * Site
 */
class Site
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var integer
     */
    private $fax;

    /**
     * @var boolean
     */
    private $importance;

    /**
     * @var string
     */
    private $map;

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
    private $siteId;

    /**
     * @var \Srm\CoreBundle\Entity\Language
     */
    private $language;

    /**
     * @var \Srm\CoreBundle\Entity\TypeSite
     */
    private $typeSite;

    /**
     * @var \Srm\CoreBundle\Entity\Currency
     */
    private $currency;

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
    private $subDepartments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subSiteActivities;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dangerousSubstances;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $siteActivities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subDepartments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subSiteActivities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dangerousSubstances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->poles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->siteActivities = new \Doctrine\Common\Collections\ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Site
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
     * Set phone
     *
     * @param integer $phone
     * @return Site
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
     * @return Site
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
     * Set fax
     *
     * @param integer $fax
     * @return Site
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set importance
     *
     * @param boolean $importance
     * @return Site
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

        return $this;
    }

    /**
     * Get importance
     *
     * @return boolean
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Set map
     *
     * @param string $map
     * @return Site
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * Get siteId
     *
     * @return integer
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set language
     *
     * @param \Srm\CoreBundle\Entity\Language $language
     * @return Site
     */
    public function setLanguage(Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \Srm\CoreBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set typeSite
     *
     * @param \Srm\CoreBundle\Entity\TypeSite $typeSite
     * @return Site
     */
    public function setTypeSite(TypeSite $typeSite = null)
    {
        $this->typeSite = $typeSite;

        return $this;
    }

    /**
     * Get typeSite
     *
     * @return \Srm\CoreBundle\Entity\TypeSite
     */
    public function getTypeSite()
    {
        return $this->typeSite;
    }

    /**
     * Set currency
     *
     * @param \Srm\CoreBundle\Entity\Currency $currency
     * @return Site
     */
    public function setCurrency(Currency $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \Srm\CoreBundle\Entity\Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set address
     *
     * @param \Srm\CoreBundle\Entity\Address $address
     * @return Site
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
     * Add subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Site
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
     * Add subSiteActivity
     *
     * @param \Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity
     * @return Site
     */
    public function addSubSiteActivity(SubSiteActivity $subSiteActivity)
    {
        $this->subSiteActivities[] = $subSiteActivity;

        return $this;
    }

    /**
     * Remove subSiteActivity
     *
     * @param \Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity
     */
    public function removeSubSiteActivity(SubSiteActivity $subSiteActivity)
    {
        $this->subSiteActivities->removeElement($subSiteActivity);
    }

    /**
     * Get subSiteActivities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubSiteActivities()
    {
        return $this->subSiteActivities;
    }

    /**
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Site
     */
    public function addContact(Contact $contact)
    {
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
     * Add DangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $DangerousSubstance
     * @return Site
     */
    public function addDangerousSubstance(DangerousSubstance $dangerousSubstance)
    {
        $this->dangerousSubstances[] = $dangerousSubstance;

        return $this;
    }

    /**
     * Remove DangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance
     */
    public function removeDangerousSubstance(DangerousSubstance $dangerousSubstance)
    {
        $this->dangerousSubstances->removeElement($dangerousSubstance);
    }

    /**
     * Get DangerousSubstance
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDangerousSubstances()
    {
        return $this->dangerousSubstances;
    }

    /**
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return Site
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
     * Get department
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * Add pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     * @return Site
     */
    public function addPole(Pole $pole)
    {
        $this->poles[] = $pole;

        return $this;
    }

    /**
     * Remove pole
     *
     * @param \Srm\CoreBundle\Entity\Pole $pole
     */
    public function removePole(Pole $pole)
    {
        $this->poles->removeElement($pole);
    }

    /**
     * Get poles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPoles()
    {
        return $this->poles;
    }

    /**
     * Add siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     * @return Site
     */
    public function addSiteActivity(SiteActivity $siteActivity)
    {
        $this->siteActivities[] = $siteActivity;

        return $this;
    }

    /**
     * Remove siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     */
    public function removeSiteActivity(SiteActivity $siteActivity)
    {
        $this->siteActivities->removeElement($siteActivity);
    }

    /**
     * Get siteActivities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSiteActivities()
    {
        return $this->siteActivities;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
