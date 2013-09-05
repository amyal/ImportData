<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemAnswers
 */
class ItemAnswers
{
    /**
     * @var string
     */
    private $answer;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

    /**
     * @var \DateTime
     */
    private $validUntil;

    /**
     * @var integer
     */
    private $itemAnswersId;

    /**
     * @var \Srm\CoreBundle\Entity\AnswersStatus
     */
    private $answersStatus;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestions
     */
    private $itemQuestions;

    /**
     * @var \Srm\CoreBundle\Entity\Contact
     */
    private $contact;

    /**
     * @var \Srm\CoreBundle\Entity\Answers
     */
    private $answers;


    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return ItemAnswers
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return ItemAnswers
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
     * @return ItemAnswers
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
     * Set validUntil
     *
     * @param \DateTime $validUntil
     * @return ItemAnswers
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Get itemAnswersId
     *
     * @return integer
     */
    public function getItemAnswersId()
    {
        return $this->itemAnswersId;
    }

    /**
     * Set answersStatus
     *
     * @param \Srm\CoreBundle\Entity\AnswersStatus $answersStatus
     * @return ItemAnswers
     */
    public function setAnswersStatus(\Srm\CoreBundle\Entity\AnswersStatus $answersStatus = null)
    {
        $this->answersStatus = $answersStatus;

        return $this;
    }

    /**
     * Get answersStatus
     *
     * @return \Srm\CoreBundle\Entity\AnswersStatus
     */
    public function getAnswersStatus()
    {
        return $this->answersStatus;
    }

    /**
     * Set itemQuestions
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestions $itemQuestions
     * @return ItemAnswers
     */
    public function setItemQuestions(\Srm\CoreBundle\Entity\ItemQuestions $itemQuestions = null)
    {
        $this->itemQuestions = $itemQuestions;

        return $this;
    }

    /**
     * Get itemQuestions
     *
     * @return \Srm\CoreBundle\Entity\ItemQuestions
     */
    public function getItemQuestions()
    {
        return $this->itemQuestions;
    }

    /**
     * Set contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return ItemAnswers
     */
    public function setContact(\Srm\CoreBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Srm\CoreBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set answers
     *
     * @param \Srm\CoreBundle\Entity\Answers $answers
     * @return ItemAnswers
     */
    public function setAnswers(\Srm\CoreBundle\Entity\Answers $answers = null)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return \Srm\CoreBundle\Entity\Answers
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
