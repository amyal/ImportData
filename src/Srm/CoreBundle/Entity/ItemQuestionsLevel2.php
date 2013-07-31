<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemQuestionsLevel2
 */
class ItemQuestionsLevel2
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
    private $itemQuestionsLevel2Id;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestionsLevel1
     */
    private $itemQuestionsLevel1;


    /**
     * Set label
     *
     * @param string $label
     * @return ItemQuestionsLevel2
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
     * @return ItemQuestionsLevel2
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
     * @return ItemQuestionsLevel2
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
     * Get itemQuestionsLevel2Id
     *
     * @return integer
     */
    public function getItemQuestionsLevel2Id()
    {
        return $this->itemQuestionsLevel2Id;
    }

    /**
     * Set itemQuestionsLevel1
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel1 $itemQuestionsLevel1
     * @return ItemQuestionsLevel2
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
