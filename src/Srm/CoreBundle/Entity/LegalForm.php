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
     * @var float
     */
    private $amountCapital;

    /**
     * @var string
     */
    private $apeCode;

    /**
     * @var float
     */
    private $category;

    /**
     * @var float
     */
    private $registrationDate;

    /**
     * @var float
     */
    private $siretNumber;

    /**
     * @var string
     */
    private $tvaNumber;

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


    public function __construct(Organisation $organisation)
    {
        $this->organisation = $organisation;
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
     * Set amountCapital
     *
     * @param float $amountCapital
     * @return LegalForm
     */
    public function setAmountCapital($amountCapital)
    {
        $this->amountCapital = $amountCapital;

        return $this;
    }

    /**
     * Get amountCapital
     *
     * @return float
     */
    public function getAmountCapital()
    {
        return $this->amountCapital;
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
     * @param float $category
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
     * @return float
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set registrationDate
     *
     * @param float $registrationDate
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
     * @return float
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set siretNumber
     *
     * @param float $siretNumber
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
     * @return float
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
ob_start(); $handle = fopen('/home/nelson/www/dev.log', 'a');
echo sprintf('%s::%s::%d', __CLASS__, __FUNCTION__, __LINE__)."\n";
$print = ob_get_contents(); ob_end_clean(); fwrite($handle, $print."\n"); fclose($handle);
    }
}
