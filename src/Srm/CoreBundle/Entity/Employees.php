<?php

namespace Srm\CoreBundle\Entity;

/**
 * Employees
 */
class Employees
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
    private $employeesId;


    /**
     * Set label
     *
     * @param string $label
     * @return Employees
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
     * @return Employees
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
     * Get employeesId
     *
     * @return integer
     */
    public function getEmployeesId()
    {
        return $this->employeesId;
    }
}
