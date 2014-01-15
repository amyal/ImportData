<?php

namespace Srm\CoreBundle\Entity;

/**
 * Shareholder
 */
class Shareholder
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $parts;

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
    private $shareholderId;

    /**
     * @var \Srm\CoreBundle\Entity\Contact
     */
    private $contact;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->enabled = true;
        $this->deleted = false;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Shareholder
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
     * Set parts
     *
     * @param string $parts
     * @return Shareholder
     */
    public function setParts($parts)
    {
        $this->parts = $parts;

        return $this;
    }

    /**
     * Get parts
     *
     * @return string
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Shareholder
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
     * @return Shareholder
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
     * @return Shareholder
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
     * @return Shareholder
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
     * Get shareholderId
     *
     * @return integer
     */
    public function getShareholderId()
    {
        return $this->shareholderId;
    }

    /**
     * Set contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Shareholder
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Srm\CoreBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    public function __toString()
    {
        return $this->getLabel();
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
