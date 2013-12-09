<?php

namespace Srm\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Srm\CoreBundle\Entity\Contact;
use Srm\CoreBundle\Entity\Stakeholder;

class User extends BaseUser
{
    /**
     * @var \Srm\UserBundle\Entity\Role
     */
    private $role;

    /**
     * @var integer
     */
    protected $id;


    public function __construct($id,$mail)
    {
        parent::__construct();

        $this->enabled = true;

        if (null !== $id) {
            $this->id       = $id;
            $this->username = $mail;
            $this->email    = $mail;
        }
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
        $this->setRoles(array($role->getRoleType()));

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


    private function getUsernameFromEmail($email)
    {
        list($username, $ignored) = explode('@', $email);

        return $username;
    }
}
