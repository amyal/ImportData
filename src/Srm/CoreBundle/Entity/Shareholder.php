<?php

namespace Srm\CoreBundle\Entity;

/**
 * Shareholder
 */
class Shareholder
{
    /**
     * @var integer
     */
    private $contactId;

    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
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
     * @var \Srm\CoreBundle\Entity\LegalForm
     */
    private $legalForm;


    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return Shareholder
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
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
     * @param integer $parts
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
     * @return integer
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
     * Set legalForm
     *
     * @param \Srm\CoreBundle\Entity\LegalForm $legalForm
     * @return Shareholder
     */
    public function setLegalForm(LegalForm $legalForm = null)
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * Get legalForm
     *
     * @return \Srm\CoreBundle\Entity\LegalForm
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }

    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
