<?php

namespace Srm\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 */
class Department
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

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
    private $category;

    /**
     * @var integer
     */
    private $departmentId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Department
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
     * Set description
     *
     * @param string $description
     * @return Department
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Department
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
     * @return Department
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Department
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
     * @return Department
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
     * Set category
     *
     * @param string $category
     * @return Department
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get departmentId
     *
     * @return integer 
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Add site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     * @return Department
     */
    public function addSite(\Srm\CoreBundle\Entity\Site $site)
    {
        $this->site[] = $site;
    
        return $this;
    }

    /**
     * Remove site
     *
     * @param \Srm\CoreBundle\Entity\Site $site
     */
    public function removeSite(\Srm\CoreBundle\Entity\Site $site)
    {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     * @return Department
     */
    public function addContact(\Srm\CoreBundle\Entity\Contact $contact)
    {
        $this->contact[] = $contact;
    
        return $this;
    }

    /**
     * Remove contact
     *
     * @param \Srm\CoreBundle\Entity\Contact $contact
     */
    public function removeContact(\Srm\CoreBundle\Entity\Contact $contact)
    {
        $this->contact->removeElement($contact);
    }

    /**
     * Get contact
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
