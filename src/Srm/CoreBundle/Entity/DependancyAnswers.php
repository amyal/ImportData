<?php

namespace Srm\CoreBundle\Entity;

/**
 * DependancyAnswers
 */
class DependancyAnswers
{
    /**
     * @var integer
     */
    private $dependancyAnswersId;

    /**
     * @var \Srm\CoreBundle\Entity\ItemAnswers
     */
    private $itemAnswers;

    /**
     * @var \Srm\CoreBundle\Entity\ItemAnswers
     */
    private $itemAnswersDependancy;


    /**
     * Get dependancyAnswersId
     *
     * @return integer
     */
    public function getDependancyAnswersId()
    {
        return $this->dependancyAnswersId;
    }

    /**
     * Set itemAnswers
     *
     * @param \Srm\CoreBundle\Entity\ItemAnswers $itemAnswers
     * @return DependancyAnswers
     */
    public function setItemAnswers(\Srm\CoreBundle\Entity\ItemAnswers $itemAnswers = null)
    {
        $this->itemAnswers = $itemAnswers;

        return $this;
    }

    /**
     * Get itemAnswers
     *
     * @return \Srm\CoreBundle\Entity\ItemAnswers
     */
    public function getItemAnswers()
    {
        return $this->itemAnswers;
    }

    /**
     * Set itemAnswersDependancy
     *
     * @param \Srm\CoreBundle\Entity\ItemAnswers $itemAnswersDependancy
     * @return DependancyAnswers
     */
    public function setItemAnswersDependancy(\Srm\CoreBundle\Entity\ItemAnswers $itemAnswersDependancy = null)
    {
        $this->itemAnswersDependancy = $itemAnswersDependancy;

        return $this;
    }

    /**
     * Get itemAnswersDependancy
     *
     * @return \Srm\CoreBundle\Entity\ItemAnswers
     */
    public function getItemAnswersDependancy()
    {
        return $this->itemAnswersDependancy;
    }
}
