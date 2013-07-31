<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemQuestionsLevel1
 */
class ItemQuestionsLevel1
{
    /**
     * @var string
     */
    private $label;

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
    private $itemQuestionsLevel1Id;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestions
     */
    private $itemQuestions;


    /**
     * Set label
     *
     * @param string $label
     * @return ItemQuestionsLevel1
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
     * Set enabled
     *
     * @param boolean $enabled
     * @return ItemQuestionsLevel1
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
     * @return ItemQuestionsLevel1
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
     * Get itemQuestionsLevel1Id
     *
     * @return integer
     */
    public function getItemQuestionsLevel1Id()
    {
        return $this->itemQuestionsLevel1Id;
    }

    /**
     * Set itemQuestions
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestions $itemQuestions
     * @return ItemQuestionsLevel1
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
}
