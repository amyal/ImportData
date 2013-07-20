<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalForm
 */
class LegalForm
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $natureCapital;

    /**
     * @var float
     */
    private $amountCapital;

    /**
     * @var float
     */
    private $ca;

    /**
     * @var float
     */
    private $netIncome;

    /**
     * @var float
     */
    private $heritageAssets;

    /**
     * @var float
     */
    private $heritageCapital;

    /**
     * @var float
     */
    private $heritageDebt;

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
     * Set name
     *
     * @param string $name
     * @return LegalForm
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set natureCapital
     *
     * @param float $natureCapital
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
     * @return float 
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
     * Set ca
     *
     * @param float $ca
     * @return LegalForm
     */
    public function setCa($ca)
    {
        $this->ca = $ca;
    
        return $this;
    }

    /**
     * Get ca
     *
     * @return float 
     */
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * Set netIncome
     *
     * @param float $netIncome
     * @return LegalForm
     */
    public function setNetIncome($netIncome)
    {
        $this->netIncome = $netIncome;
    
        return $this;
    }

    /**
     * Get netIncome
     *
     * @return float 
     */
    public function getNetIncome()
    {
        return $this->netIncome;
    }

    /**
     * Set heritageAssets
     *
     * @param float $heritageAssets
     * @return LegalForm
     */
    public function setHeritageAssets($heritageAssets)
    {
        $this->heritageAssets = $heritageAssets;
    
        return $this;
    }

    /**
     * Get heritageAssets
     *
     * @return float 
     */
    public function getHeritageAssets()
    {
        return $this->heritageAssets;
    }

    /**
     * Set heritageCapital
     *
     * @param float $heritageCapital
     * @return LegalForm
     */
    public function setHeritageCapital($heritageCapital)
    {
        $this->heritageCapital = $heritageCapital;
    
        return $this;
    }

    /**
     * Get heritageCapital
     *
     * @return float 
     */
    public function getHeritageCapital()
    {
        return $this->heritageCapital;
    }

    /**
     * Set heritageDebt
     *
     * @param float $heritageDebt
     * @return LegalForm
     */
    public function setHeritageDebt($heritageDebt)
    {
        $this->heritageDebt = $heritageDebt;
    
        return $this;
    }

    /**
     * Get heritageDebt
     *
     * @return float 
     */
    public function getHeritageDebt()
    {
        return $this->heritageDebt;
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
}
