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
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
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
     * @var \Srm\CoreBundle\Entity\TypeSite
     */
    private $typeSite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subSiteActivities;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $siteActivities;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dangerousSubstances;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subSiteActivities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->siteActivities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dangerousSubstances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->poles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();

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
     * @param string $phone
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
     * @param string $fax
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
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set importance
     *
     * @param string $importance
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
     * @return string
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
     * Add subSiteActivity
     *
     * @param \Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity
     * @return Site
     */
    public function addSubSiteActivity(SubSiteActivity $subSiteActivity)
    {
        $subSiteActivity->addSite($this);
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
        $subSiteActivity->removeSite($this);
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
     * Get departments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartments()
    {
        return $this->departments;
    }

    /**
     * Add siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     * @return Site
     */
    public function addSiteActivity(SiteActivity $siteActivity)
    {
        $siteActivity->addSite($this);
        $this->siteActivities[] = $siteActivity;

        return $this;
    }

    /**
     * Remove siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     */
    public function removeSiteActiviy(SiteActivity $siteActivity)
    {
        $siteActivity->removeSite($this);
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

    /**
     * Add dangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance
     * @return Site
     */
    public function addDangerousSubstance(DangerousSubstance $dangerousSubstance)
    {
        $dangerousSubstance->addSite($this);
        $this->dangerousSubstances[] = $dangerousSubstance;

        return $this;
    }

    /**
     * Remove dangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance
     */
    public function removeDangerousSubstance(DangerousSubstance $dangerousSubstance)
    {
        $dangerousSubstance->removeSite($this);
        $this->dangerousSubstances->removeElement($dangerousSubstance);
    }

    /**
     * Get dangerousSubstances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDangerousSubstances()
    {
        return $this->dangerousSubstances;
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
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Site
     */
    public function addContact(Contact $contact)
    {
        $contact->addSite($this);
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
        $contact->removeSite($this);
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

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
