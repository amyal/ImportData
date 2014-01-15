<?php

namespace Srm\CoreBundle\Entity;

/**
 * UnitMeasurementClass
 */
class UnitMeasurementClass
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
    private $unitMeasurementClassId;


    /**
     * Set label
     *
     * @param string $label
     * @return UnitMeasurementClass
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
     * @return UnitMeasurementClass
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
     * Get unitMeasurementClassId
     *
     * @return integer
     */
    public function getUnitMeasurementClassId()
    {
        return $this->unitMeasurementClassId;
    }
}
