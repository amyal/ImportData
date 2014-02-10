<?php

namespace Srm\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Organisation
 */
class Organisation
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var integer
     */
    private $fax;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $identificationCode;

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
    private $organisationId;

    /**
     * @var \Srm\CoreBundle\Entity\OrganisationStatus
     */
    private $organisationStatus;

    /**
     * @var \Srm\CoreBundle\Entity\Subscription
     */
    private $subscription;

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
     * @var \Srm\CoreBundle\Entity\Employees
     */
    private $employees;

    /**
     * @var \Srm\CoreBundle\Entity\Turnover
     */
    private $turnover;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referencials;

    /**
     * @var string $picture
     *
     * @Assert\File( maxSize = "5000k", mimeTypesMessage = "Merci de charger une image")
     *
     */
    private $picture;
    private $tempFile;

    public function __construct($identificationCode = null)
    {
        if (null !== $identificationCode) {
            $this->identificationCode = $identificationCode;
        }

        $this->referencials = new \Doctrine\Common\Collections\ArrayCollection();
        
        $this->creationDate = new \DateTime();
        $this->deleted = false;
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
     * Set phone
     *
     * @param integer $phone
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
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param integer $fax
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
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
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
     * Set website
     *
     * @param string $website
     * @return Organisation
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
     * Set identificationCode
     *
     * @param string $identificationCode
     * @return Organisation
     */
    public function setIdentificationCode($identificationCode)
    {
        $this->identificationCode = $identificationCode;

        return $this;
    }

    /**
     * Get identificationCode
     *
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
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
     * Set organisationStatus
     *
     * @param \Srm\CoreBundle\Entity\OrganisationStatus $organisationStatus
     * @return Organisation
     */
    public function setOrganisationStatus(OrganisationStatus $organisationStatus = null)
    {
        $this->organisationStatus = $organisationStatus;

        return $this;
    }

    /**
     * Get organisationStatus
     *
     * @return \Srm\CoreBundle\Entity\OrganisationStatus
     */
    public function getOrganisationStatus()
    {
        return $this->organisationStatus;
    }

    /**
     * Set subscription
     *
     * @param \Srm\CoreBundle\Entity\Subscription $subscription
     * @return Organisation
     */
    public function setSubscription(Subscription $subscription = null)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return \Srm\CoreBundle\Entity\Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set language
     *
     * @param \Srm\CoreBundle\Entity\Language $language
     * @return Organisation
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
     * @return Organisation
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
     * Set employees
     *
     * @param \Srm\CoreBundle\Entity\Employees $employees
     * @return Organisation
     */
    public function setEmployees(Employees $employees = null)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get employees
     *
     * @return \Srm\CoreBundle\Entity\Employees
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Set turnover
     *
     * @param \Srm\CoreBundle\Entity\Turnover $turnover
     * @return Organisation
     */
    public function setTurnover(Turnover $turnover = null)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Get turnover
     *
     * @return \Srm\CoreBundle\Entity\Turnover
     */
    public function getTurnover()
    {
        return $this->turnover;
    }

    /**
     * Add referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Indicator
     */
    public function addReferencial(Referencial $referencial)
    {
        $this->referencials[] = $referencial;

        return $this;
    }

    /**
     * Remove referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     */
    public function removeReferencial(Referencial $referencial)
    {
        $this->referencials->removeElement($referencial);
    }

    /**
     * Get referencials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferencials()
    {
        return $this->referencials;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
        
    // Upload files
    public function setPicture($picture)
    {
        $this->picture = $picture;
        // check if we have an old image path
        if (isset($this->logo)) {
            // store the old name to delete after the update
            $this->tempFile = $this->logo;
            $this->logo = null;
        } else {
            $this->logo = 'initial';
        }
    }

    public function getPicture()
    {
        return $this->picture;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir().$this->getIdentificationCode();
    }

    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
            return __DIR__ . '/../../../../web/uploads/documents/';
    }

    public function preUpload()
    {
        if (null !== $this->getPicture()) {
            // do whatever you want to generate a unique name (php_fileinfo is necessary)
            $filename = sha1(uniqid(mt_rand(), true));
            $this->logo = $filename.'.'.$this->getPicture()->guessExtension();
            //$this->logo = $this->picture->getClientOriginalName();
        }
    }

    public function upload()
    {
        if (null === $this->getPicture()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getPicture()->move($this->getUploadRootDir(), $this->logo);

        // check if we have an old image
        if (isset($this->tempFile) && $this->tempFile != '') {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->tempFile);
            // clear the temp image path
            $this->tempFile = null;
        }
        $this->picture = null;
    }
}
