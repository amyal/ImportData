<?php

namespace Srm\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Srm\CoreBundle\Entity\Contact;

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


    /**
     * Constructor
     */
    public function __construct(Contact $contact = null)
    {
        parent::__construct();

        if (null !== $contact) {
            list($username, $ignored) = explode('@', $contact->getMail());

            $this->id       = $contact->getContactId();
            $this->username = $username;
            $this->email    = $contact->getMail();
            $this->password = $username;
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
}
