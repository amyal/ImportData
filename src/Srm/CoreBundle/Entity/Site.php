<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $map;

    /**
     * @var string
     */
    private $importance;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

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
     * @var string
     */
    private $fax;

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
     * @var \Srm\CoreBundle\Entity\TypeSite
     */
    private $typeSite;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subDepartment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dangerousSubstance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $department;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subSiteActivity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $siteActivity;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subDepartment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dangerousSubstance = new \Doctrine\Common\Collections\ArrayCollection();
        $this->department = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subSiteActivity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->siteActivity = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function setLanguage(\Srm\CoreBundle\Entity\Language $language = null)
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
    public function setCurrency(\Srm\CoreBundle\Entity\Currency $currency = null)
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
    public function setAddress(\Srm\CoreBundle\Entity\Address $address = null)
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
     * Set typeSite
     *
     * @param \Srm\CoreBundle\Entity\TypeSite $typeSite
     * @return Site
     */
    public function setTypeSite(\Srm\CoreBundle\Entity\TypeSite $typeSite = null)
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
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return Site
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
     * Add subDepartment
     *
     * @param \Srm\CoreBundle\Entity\SubDepartment $subDepartment
     * @return Site
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
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Site
     */
    public function addContact(\Srm\CoreBundle\Entity\Contact $contact)
    {
        $this->contact[] = $contact;
    
        return $this;
    }

    /**
     * Remove contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     */
    public function removeContact(\Srm\CoreBundle\Entity\Contact $contact)
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
     * Add dangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance
     * @return Site
     */
    public function addDangerousSubstance(\Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance)
    {
        $this->dangerousSubstance[] = $dangerousSubstance;
    
        return $this;
    }

    /**
     * Remove dangerousSubstance
     *
     * @param \Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance
     */
    public function removeDangerousSubstance(\Srm\CoreBundle\Entity\DangerousSubstance $dangerousSubstance)
    {
        $this->dangerousSubstance->removeElement($dangerousSubstance);
    }

    /**
     * Get dangerousSubstance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDangerousSubstance()
    {
        return $this->dangerousSubstance;
    }

    /**
     * Add department
     *
     * @param \Srm\CoreBundle\Entity\Department $department
     * @return Site
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

    /**
     * Add subSiteActivity
     *
     * @param \Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity
     * @return Site
     */
    public function addSubSiteActivity(\Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity)
    {
        $this->subSiteActivity[] = $subSiteActivity;
    
        return $this;
    }

    /**
     * Remove subSiteActivity
     *
     * @param \Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity
     */
    public function removeSubSiteActivity(\Srm\CoreBundle\Entity\SubSiteActivity $subSiteActivity)
    {
        $this->subSiteActivity->removeElement($subSiteActivity);
    }

    /**
     * Get subSiteActivity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubSiteActivity()
    {
        return $this->subSiteActivity;
    }

    /**
     * Add siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     * @return Site
     */
    public function addSiteActivity(\Srm\CoreBundle\Entity\SiteActivity $siteActivity)
    {
        $this->siteActivity[] = $siteActivity;
    
        return $this;
    }

    /**
     * Remove siteActivity
     *
     * @param \Srm\CoreBundle\Entity\SiteActivity $siteActivity
     */
    public function removeSiteActivity(\Srm\CoreBundle\Entity\SiteActivity $siteActivity)
    {
        $this->siteActivity->removeElement($siteActivity);
    }

    /**
     * Get siteActivity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSiteActivity()
    {
        return $this->siteActivity;
    }
}
