<?php

namespace Srm\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\User;
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
    public function OrganisationByUser($user)
    {      $q= $this->createQueryBuilder('u')
               ->select('o.organisationId')
            
      ->innerJoin('u.contact', 'c')
            ->innerJoin('c.organisation', 'o')  
         ->Where('u.id = :userId')->setParameter('userId', $user->getid()) ;
   // ->andWherewhere('c.isUser=true')*/
    // $q = $this->createQueryBuilder('u')->select('u.id')->Where('u.username = :username')->setParameter('username', $userLogin) ->getQuery()->getResult() ;
               return $q->getQuery()->getSingleScalarResult();
        
    // $query = $this->_em->createQuery('SELECT o.organisationId FROM user u JOIN u.contact c JOIN c.organisation o WHERE u.id = :id');
     //$query->setParameter('id', $user);
     //return $query->getSingleResult();
    
    }
}
