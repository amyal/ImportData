<?php

namespace Srm\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;
use Srm\UserBundle\Entity\User;
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
    
    //SELECT org.ORGANISATION_ID FROM v_organisation org JOIN v_contact con on org.ORGANISATION_ID = con.ORGANISATION_ID AND con.CONTACT_ID = 1
    public function OrganisationByUser(User $user)
    {      $q= $this->createQueryBuilder('u')
                ->select('o.organisationId')
                ->innerJoin('u.contact', 'c')
                ->innerJoin('c.organisation', 'o')  
                ->Where('u.id = :userId')->setParameter('userId', $user->getUserId());
            return $q->getQuery()->getSingleScalarResult();
    
    }
    public function orgAdminByOrganisation(Organisation $organisation)
    {      $q= $this->createQueryBuilder('u')
                ->innerJoin('u.contact', 'c')
                ->innerJoin('c.organisation', 'o')  
                ->Where('o.organisationId = :Id')->setParameter('Id', $organisation->getOrganisationId())
                ->andWhere('u.role = 2'); // OrgAdmin
           return $q->getQuery()->getResult();
   
    }
}
