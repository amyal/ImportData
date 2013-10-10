<?php

namespace Srm\CoreBundle\Entity;

/**
 * Answers
 */
class Answers
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var boolean
     */
    private $allSites;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var integer
     */
    private $answersId;

    /**
     * @var \Srm\CoreBundle\Entity\Item
     */
    private $item;

    /**
     * @var \Srm\CoreBundle\Entity\AnswerType
     */
    private $answerType;

    /**
     * @var \Srm\CoreBundle\Entity\Periodicity
     */
    private $periodicity;

    /**
     * @var \Srm\CoreBundle\Entity\UnitClass
     */
    private $unitClass;


    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Answers
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set allSites
     *
     * @param boolean $allSites
     * @return Answers
     */
    public function setAllSites($allSites)
    {
        $this->allSites = $allSites;

        return $this;
    }

    /**
     * Get allSites
     *
     * @return boolean
     */
    public function getAllSites()
    {
        return $this->allSites;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Answers
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
     * @return Answers
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
     * Get answersId
     *
     * @return integer
     */
    public function getAnswersId()
    {
        return $this->answersId;
    }

    /**
     * Set item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     * @return Answers
     */
    public function setItem(Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \Srm\CoreBundle\Entity\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set answerType
     *
     * @param \Srm\CoreBundle\Entity\AnswerType $answerType
     * @return Answers
     */
    public function setAnswerType(AnswerType $answerType = null)
    {
        $this->answerType = $answerType;

        return $this;
    }

    /**
     * Get answerType
     *
     * @return \Srm\CoreBundle\Entity\AnswerType
     */
    public function getAnswerType()
    {
        return $this->answerType;
    }

    /**
     * Set periodicity
     *
     * @param \Srm\CoreBundle\Entity\Periodicity $periodicity
     * @return Answers
     */
    public function setPeriodicity(Periodicity $periodicity = null)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return \Srm\CoreBundle\Entity\Periodicity
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set unitClass
     *
     * @param \Srm\CoreBundle\Entity\UnitClass $unitClass
     * @return UnitMeasurement
     */
    public function setUnitClass(UnitClass $unitClass = null)
    {
        $this->unitClass = $unitClass;

        return $this;
    }

    /**
     * Get unitClass
     *
     * @return \Srm\CoreBundle\Entity\UnitClass
     */
    public function getUnitClass()
    {
        return $this->unitClass;
    }
    
    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
