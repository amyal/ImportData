<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemQuestions
 */
class ItemQuestions
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $hide;

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
    private $itemQuestionsId;

    /**
     * @var \Srm\CoreBundle\Entity\Item
     */
    private $item;

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
     * Set label
     *
     * @param string $label
     * @return ItemQuestions
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
     * Set description
     *
     * @param string $description
     * @return ItemQuestions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hide
     *
     * @param boolean $hide
     * @return ItemQuestions
     */
    public function setHide($hide)
    {
        $this->hide = $hide;

        return $this;
    }

    /**
     * Get hide
     *
     * @return boolean
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return ItemQuestions
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
     * @return ItemQuestions
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
     * Get itemQuestionsId
     *
     * @return integer
     */
    public function getItemQuestionsId()
    {
        return $this->itemQuestionsId;
    }

    /**
     * Set item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     * @return ItemQuestions
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
     * Set itemQuestionsLevel3
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel3 $itemQuestionsLevel3
     * @return ItemQuestions
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
     * @return ItemQuestions
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
     * @return ItemQuestions
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
}
