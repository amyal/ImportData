<?php

namespace Srm\CoreBundle\Entity;

/**
 * Gender
 */
class Gender
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $shortLabel;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var integer
     */
    private $genderId;


    /**
     * Set label
     *
     * @param string $label
     * @return Gender
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
     * Set shortLabel
     *
     * @param string $shortLabel
     * @return Gender
     */
    public function setShortLabel($shortLabel)
    {
        $this->shortLabel = $shortLabel;

        return $this;
    }

    /**
     * Get shortLabel
     *
     * @return string
     */
    public function getShortLabel()
    {
        return $this->shortLabel;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Gender
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
     * Get genderId
     *
     * @return integer
     */
    public function getGenderId()
    {
        return $this->genderId;
    }
}
