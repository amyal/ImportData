<?php

namespace Srm\CoreBundle\Entity;

class Shareholder
{
    /**
     * @var string
     */
    private $name;

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
     * @var string
     */
    private $contact;

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
    private $contact2;

    /**
     * @var \Srm\CoreBundle\Entity\LegalForm
     */
    private $legalForm;


    /**
     * Set name
     *
     * @param string $name
     * @return Shareholder
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
     * Set contact
     *
     * @param string $contact
     * @return Shareholder
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
     * Set contact2
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact2
     * @return Shareholder
     */
    public function setContact2(Contact $contact2 = null)
    {
        $this->contact2 = $contact2;

        return $this;
    }

    /**
     * Get contact2
     *
     * @return \Srm\CoreBundle\Entity\Contact
     */
    public function getContact2()
    {
        return $this->contact2;
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
}
