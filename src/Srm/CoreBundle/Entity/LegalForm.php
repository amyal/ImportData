<?php

namespace Srm\CoreBundle\Entity;

/**
 * LegalForm
 */
class LegalForm
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $natureCapital;

    /**
     * @var string
     */
    private $activity;

    /**
     * @var string
     */
    private $apeCode;

    /**
     * @var string
     */
    private $category;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $siretNumber;

    /**
     * @var string
     */
    private $tvaNumber;

    /**
     * @var string
     */
    private $nationality;

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
    private $legalFormId;

    /**
     * @var \Srm\CoreBundle\Entity\Organisation
     */
    private $organisation;

    /**
     * @var \Srm\CoreBundle\Entity\LegalStatus
     */
    private $legalStatus;


    public function __construct(Organisation $organisation)
    {
        $this->organisation = $organisation;

        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return LegalForm
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
     * Set natureCapital
     *
     * @param string $natureCapital
     * @return LegalForm
     */
    public function setNatureCapital($natureCapital)
    {
        $this->natureCapital = $natureCapital;

        return $this;
    }

    /**
     * Get natureCapital
     *
     * @return string
     */
    public function getNatureCapital()
    {
        return $this->natureCapital;
    }

    /**
     * Set activity
     *
     * @param string $activity
     * @return LegalForm
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set apeCode
     *
     * @param string $apeCode
     * @return LegalForm
     */
    public function setApeCode($apeCode)
    {
        $this->apeCode = $apeCode;

        return $this;
    }

    /**
     * Get apeCode
     *
     * @return string
     */
    public function getApeCode()
    {
        return $this->apeCode;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return LegalForm
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
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return LegalForm
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set siretNumber
     *
     * @param string $siretNumber
     * @return LegalForm
     */
    public function setSiretNumber($siretNumber)
    {
        $this->siretNumber = $siretNumber;

        return $this;
    }

    /**
     * Get siretNumber
     *
     * @return string
     */
    public function getSiretNumber()
    {
        return $this->siretNumber;
    }

    /**
     * Set tvaNumber
     *
     * @param string $tvaNumber
     * @return LegalForm
     */
    public function setTvaNumber($tvaNumber)
    {
        $this->tvaNumber = $tvaNumber;

        return $this;
    }

    /**
     * Get tvaNumber
     *
     * @return string
     */
    public function getTvaNumber()
    {
        return $this->tvaNumber;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return LegalForm
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return LegalForm
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
     * @return LegalForm
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
     * @return LegalForm
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
     * @return LegalForm
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
     * Get legalFormId
     *
     * @return integer
     */
    public function getLegalFormId()
    {
        return $this->legalFormId;
    }

    /**
     * Set organisation
     *
     * @param \Srm\CoreBundle\Entity\Organisation $organisation
     * @return LegalForm
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

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
    
    /**
     * Set legalStatus
     *
     * @param \Srm\CoreBundle\Entity\LegalStatus $legalStatus
     * @return LegalStatus
     */
    public function setLegalStatus(LegalStatus $legalStatus = null)
    {
        $this->legalStatus = $legalStatus;

        return $this;
    }

    /**
     * Get legalStatus
     *
     * @return \Srm\CoreBundle\Entity\LegalStatus
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

}
