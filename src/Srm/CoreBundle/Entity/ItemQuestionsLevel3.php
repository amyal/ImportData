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
     * @var string
     */
    private $code;

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


    public function __construct()
    {
        $this->deleted = false;
    }

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
     * Set code
     *
     * @param string $code
     * @return ItemQuestionsLevel1
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
}
