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
     * @var integer
     */
    private $itemAnswersId;

    /**
     * @var \Srm\CoreBundle\Entity\AnswersStatus
     */
    private $answersStatus;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestionsLevel3
     */
    private $itemQuestionsLevel3;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestionsLevel2
     */
    private $itemQuestionsLevel2;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestionsLevel1
     */
    private $itemQuestionsLevel1;

    /**
     * @var \Srm\CoreBundle\Entity\Contact
     */
    private $contact;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestions
     */
    private $itemQuestions;

    /**
     * @var \Srm\CoreBundle\Entity\Answers
     */
    private $answers;


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
    public function setAnswersStatus(AnswersStatus $answersStatus = null)
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
     * Set itemQuestionsLevel3
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel3 $itemQuestionsLevel3
     * @return ItemAnswers
     */
    public function setItemQuestionsLevel3(ItemQuestionsLevel3 $itemQuestionsLevel3 = null)
    {
        $this->itemQuestionsLevel3 = $itemQuestionsLevel3;

        return $this;
    }

    /**
     * Get itemQuestionsLevel3
     *
     * @return \Srm\CoreBundle\Entity\ItemQuestionsLevel3
     */
    public function getItemQuestionsLevel3()
    {
        return $this->itemQuestionsLevel3;
    }

    /**
     * Set itemQuestionsLevel2
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel2 $itemQuestionsLevel2
     * @return ItemAnswers
     */
    public function setItemQuestionsLevel2(ItemQuestionsLevel2 $itemQuestionsLevel2 = null)
    {
        $this->itemQuestionsLevel2 = $itemQuestionsLevel2;

        return $this;
    }

    /**
     * Get itemQuestionsLevel2
     *
     * @return \Srm\CoreBundle\Entity\ItemQuestionsLevel2
     */
    public function getItemQuestionsLevel2()
    {
        return $this->itemQuestionsLevel2;
    }

    /**
     * Set itemQuestionsLevel1
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel1 $itemQuestionsLevel1
     * @return ItemAnswers
     */
    public function setItemQuestionsLevel1(ItemQuestionsLevel1 $itemQuestionsLevel1 = null)
    {
        $this->itemQuestionsLevel1 = $itemQuestionsLevel1;

        return $this;
    }

    /**
     * Get itemQuestionsLevel1
     *
     * @return \Srm\CoreBundle\Entity\ItemQuestionsLevel1
     */
    public function getItemQuestionsLevel1()
    {
        return $this->itemQuestionsLevel1;
    }

    /**
     * Set contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return ItemAnswers
     */
    public function setContact(Contact $contact = null)
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
     * Set itemQuestions
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestions $itemQuestions
     * @return ItemAnswers
     */
    public function setItemQuestions(ItemQuestions $itemQuestions = null)
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
     * Set answers
     *
     * @param \Srm\CoreBundle\Entity\Answers $answers
     * @return ItemAnswers
     */
    public function setAnswers(Answers $answers = null)
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
}
