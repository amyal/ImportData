<?php

namespace Srm\CoreBundle\Entity;

/**
 * ItemHistory
 */
class ItemHistory
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $themeDescription;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

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
    private $itemHistoryId;


    public function __construct()
    {
        $this->creationDate = new \DateTime();

        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return ItemHistory
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
     * Set themeDescription
     *
     * @param string $themeDescription
     * @return ItemHistory
     */
    public function setThemeDescription($themeDescription)
    {
        $this->themeDescription = $themeDescription;

        return $this;
    }

    /**
     * Get themeDescription
     *
     * @return string
     */
    public function getThemeDescription()
    {
        return $this->themeDescription;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return ItemHistory
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     * @return ItemHistory
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return ItemHistory
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
     * @return ItemHistory
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
     * Get itemHistoryId
     *
     * @return integer
     */
    public function getItemHistoryId()
    {
        return $this->itemHistoryId;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
