<?php

namespace Srm\CoreBundle\Entity;

/**
 * Turnover
 */
class Turnover
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
     * @var integer
     */
    private $turnoverId;


    /**
     * Set label
     *
     * @param string $label
     * @return Turnover
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
     * @return Turnover
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
     * Get turnoverId
     *
     * @return integer
     */
    public function getTurnoverId()
    {
        return $this->turnoverId;
    }
}
