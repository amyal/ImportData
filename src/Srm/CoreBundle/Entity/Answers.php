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
    private $site;

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
     * @var \Srm\CoreBundle\Entity\AnswerType
     */
    private $answerType;

    /**
     * @var \Srm\CoreBundle\Entity\Periodicity
     */
    private $periodicity;


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
     * Set site
     *
     * @param boolean $site
     * @return Answers
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return boolean
     */
    public function getSite()
    {
        return $this->site;
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
}
