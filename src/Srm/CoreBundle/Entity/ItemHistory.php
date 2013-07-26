<?php

namespace Srm\CoreBundle\Entity;

class ItemHistory
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $themeDescription;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var integer
     */
    private $itemHistoryId;


    /**
     * Set name
     *
     * @param string $name
     * @return ItemHistory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Set contact
     *
     * @param string $contact
     * @return ItemHistory
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
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
     * Get itemHistoryId
     *
     * @return integer
     */
    public function getItemHistoryId()
    {
        return $this->itemHistoryId;
    }
}
