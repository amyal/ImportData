<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\User;

class ItemRepository extends EntityRepository
{
    public function findNonDeletedByUser(Organisation $organisation, $user)
    {
        return $this->createQueryBuilder('i')
            ->select('i', 'q', 'ind', 'r')
            ->leftJoin('i.subDepartment', 'sd')
            ->leftJoin('sd.contacts', 'c')
            ->leftJoin('i.itemQuestions', 'q')
            ->innerJoin('i.indicators', 'ind')
            ->leftJoin('ind.referencials', 'r')
            ->where('i.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('i.enabled = :enabled')->setParameter('enabled', true)
            ->andWhere('ind.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('ind.enabled = :enabled')->setParameter('enabled', true)
            ->andWhere('r.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('r.enabled = :enabled')->setParameter('enabled', true)
            ->andWhere('q.hide = :hide')->setParameter('hide', false)
            ->andWhere('c.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('r.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('c.contactId = :contactId')->setParameter('contactId', $user->getContact()->getContactId())
            ->getQuery()
            ->getResult()
        ;
    }
}
