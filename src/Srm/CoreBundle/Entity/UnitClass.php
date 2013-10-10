<?php

namespace Srm\CoreBundle\Entity;

/**
 * UnitClass
 */
class UnitClass
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
    private $unitClassId;


    /**
     * Set label
     *
     * @param string $label
     * @return UnitClass
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
     * @return UnitClass
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
     * Get unitClassId
     *
     * @return integer
     */
    public function getUnitClassId()
    {
        return $this->unitClassId;
    }
}
