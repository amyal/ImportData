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
     * @var \Srm\UserBundle\Entity\Role
     */
    private $role;

    /**
     * @var integer
     */
    protected $id;


    /**
     * Constructor
     */
    public function __construct($id = null)
    {
        parent::__construct();

        if (null !== $id) {
            $this->id = $id;
        }

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
        $this->addRole($role->getRoleType());

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
