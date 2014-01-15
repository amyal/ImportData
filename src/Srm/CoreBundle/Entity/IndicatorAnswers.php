<?php

namespace Srm\CoreBundle\Entity;

/**
 * IndicatorAnswers
 */
class IndicatorAnswers
{
    /**
     * @var string
     */
    private $answer;

    /**
     * @var string
     */
    private $answerStatus;

    /**
     * @var \DateTime
     */
    private $updatedDate;

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
    private $indicatorAnswersId;

    /**
     * @var \Srm\CoreBundle\Entity\Indicators
     */
    private $indicators;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return IndicatorAnswers
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set answerStatus
     *
     * @param string $answerStatus
     * @return IndicatorAnswers
     */
    public function setAnswerStatus($answerStatus)
    {
        $this->answerStatus = $answerStatus;

        return $this;
    }

    /**
     * Get answerStatus
     *
     * @return string
     */
    public function getAswerStatus()
    {
        return $this->answerStatus;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return IndicatorAnswers
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
     * Get indicatorAnswersId
     *
     * @return integer
     */
    public function getIndicatorAnswersId()
    {
        return $this->indicatorAnswersId;
    }
        
    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     * @return IndicatorAnswers
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Department
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
     * @return Department
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
     * Set indicators
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicators
     * @return Indicator
     */
    public function setIndicators(Indicators $indicators = null)
    {
        $this->indicators = $indicators;

        return $this;
    }

    /**
     * Get indicators
     *
     * @return \Srm\CoreBundle\Entity\Indicators
     */
    public function getIndicators()
    {
        return $this->indicators;
    }

}
