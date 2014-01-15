<?php

namespace Srm\CoreBundle\Entity;

/**
 * UnitMeasurement
 */
class UnitMeasurement
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
    private $unitMeasurementId;

    /**
     * @var \Srm\CoreBundle\Entity\UnitMeasurementClass
     */
    private $unitMeasurementClass;


    public function __construct()
    {
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return UnitMeasurement
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
     * @return UnitMeasurement
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
     * Get unitMeasurementId
     *
     * @return integer
     */
    public function getUnitMeasurementId()
    {
        return $this->unitMeasurementId;
    }

    /**
     * Set unitMeasurementClass
     *
     * @param \Srm\CoreBundle\Entity\UnitMeasurementClass $unitMeasurementClass
     * @return UnitMeasurement
     */
    public function setUnitMeasurementClass(UnitMeasurementClass $unitMeasurementClass = null)
    {
        $this->unitMeasurementClass = $unitMeasurementClass;

        return $this;
    }

    /**
     * Get unitMeasurementClass
     *
     * @return \Srm\CoreBundle\Entity\UnitMeasurementClass
     */
    public function getUnitMeasurementClass()
    {
        return $this->unitMeasurementClass;
    }
}
