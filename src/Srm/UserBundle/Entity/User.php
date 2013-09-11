<?php

namespace Srm\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{
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
    private $deleted;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \Srm\UserBundle\Entity\Role
     */
    private $role;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->deleted = false;
    }

    /**
     * Set role
     *
     * @param \Srm\UserBundle\Entity\Role $role
     * @return Contact
     */
    public function setRole(Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Srm\UserBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }


    public function updateModificationDate()
    {
        $this->modificationDate = new \DateTime();
    }
}
