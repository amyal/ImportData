<?php

namespace Srm\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class UserRepository extends EntityRepository
{
    public function findByContacts(array $contacts)
    {
        $contactIds = array();
        foreach ($contacts as $contact) {
            $contactIds[] = $contact->getContactId();
        }

        $qb = $this->createQueryBuilder('u');

        return $qb
            ->add('where', $qb->expr()->in('u.id', $contactIds))
            ->getQuery()
            ->getResult()
        ;
    }
}
