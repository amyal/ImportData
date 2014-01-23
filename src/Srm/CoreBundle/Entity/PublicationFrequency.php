<?php

namespace Srm\CoreBundle\Entity;

/**
 * PublicationFrequency
 */
class PublicationFrequency
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
    private $publicationFrequencyId;


    public function __construct()
    {
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return PublicationFrequency
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
     * @return PublicationFrequency
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
     * @return PublicationFrequency
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
     * Get publicationFrequencyId
     *
     * @return integer
     */
    public function getPublicationFrequencyId()
    {
        return $this->publicationFrequencyId;
    }
}
