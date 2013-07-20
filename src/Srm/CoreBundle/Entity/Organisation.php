<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisation
 */
class Organisation
{
    /**
     * @var string
     */
    private $officialCode;

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
     * @var string
     */
    private $logo;

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
     * @var string
     */
    private $slogan1;

    /**
     * @var string
     */
    private $slogan2;

    /**
     * @var string
     */
    private $slogan3;

    /**
     * @var integer
     */
    private $organisationId;

    /**
     * @var \Srm\CoreBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Srm\CoreBundle\Entity\Language
     */
    private $language;

    /**
     * @var \Srm\CoreBundle\Entity\Currency
     */
    private $currency;


    /**
     * Set officialCode
     *
     * @param string $officialCode
     * @return Organisation
     */
    public function setOfficialCode($officialCode)
    {
        $this->officialCode = $officialCode;
    
        return $this;
    }

    /**
     * Get officialCode
     *
     * @return string 
     */
    public function getOfficialCode()
    {
        return $this->officialCode;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * Set logo
     *
     * @param string $logo
     * @return Organisation
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * @return Organisation
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
     * Set slogan1
     *
     * @param string $slogan1
     * @return Organisation
     */
    public function setSlogan1($slogan1)
    {
        $this->slogan1 = $slogan1;
    
        return $this;
    }

    /**
     * Get slogan1
     *
     * @return string 
     */
    public function getSlogan1()
    {
        return $this->slogan1;
    }

    /**
     * Set slogan2
     *
     * @param string $slogan2
     * @return Organisation
     */
    public function setSlogan2($slogan2)
    {
        $this->slogan2 = $slogan2;
    
        return $this;
    }

    /**
     * Get slogan2
     *
     * @return string 
     */
    public function getSlogan2()
    {
        return $this->slogan2;
    }

    /**
     * Set slogan3
     *
     * @param string $slogan3
     * @return Organisation
     */
    public function setSlogan3($slogan3)
    {
        $this->slogan3 = $slogan3;
    
        return $this;
    }

    /**
     * Get slogan3
     *
     * @return string 
     */
    public function getSlogan3()
    {
        return $this->slogan3;
    }

    /**
     * Get organisationId
     *
     * @return integer 
     */
    public function getOrganisationId()
    {
        return $this->organisationId;
    }

    /**
     * Set address
     *
     * @param \Srm\CoreBundle\Entity\Address $address
     * @return Organisation
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
     * Set language
     *
     * @param \Srm\CoreBundle\Entity\Language $language
     * @return Organisation
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
     * @return Organisation
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
}
