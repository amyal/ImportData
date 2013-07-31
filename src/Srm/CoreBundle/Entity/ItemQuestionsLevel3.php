<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemQuestionsLevel3
 */
class ItemQuestionsLevel3
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
    private $itemQuestionsLevel3Id;

    /**
     * @var \Srm\CoreBundle\Entity\ItemQuestionsLevel2
     */
    private $itemQuestionsLevel2;


    /**
     * Set label
     *
     * @param string $label
     * @return ItemQuestionsLevel3
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
     * @return ItemQuestionsLevel3
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
     * @return ItemQuestionsLevel3
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
     * Get itemQuestionsLevel3Id
     *
     * @return integer
     */
    public function getItemQuestionsLevel3Id()
    {
        return $this->itemQuestionsLevel3Id;
    }

    /**
     * Set itemQuestionsLevel2
     *
     * @param \Srm\CoreBundle\Entity\ItemQuestionsLevel2 $itemQuestionsLevel2
     * @return ItemQuestionsLevel3
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
}
