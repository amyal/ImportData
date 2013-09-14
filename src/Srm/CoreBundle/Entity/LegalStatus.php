<?php

namespace Srm\CoreBundle\Entity;

/**
 * LegalStatus
 */
class LegalStatus
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
    private $legalStatusId;


    /**
     * Set label
     *
     * @param string $label
     * @return LegalStatus
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
     * @return LegalStatus
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
     * Get legalStatusId
     *
     * @return integer
     */
    public function getLegalStatusId()
    {
        return $this->legalStatusId;
    }
}
