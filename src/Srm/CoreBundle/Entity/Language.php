<?php

namespace Srm\CoreBundle\Entity;

/**
 * Language
 */
class Language
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set label
     *
     * @param string $label
     * @return Language
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
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }
}
