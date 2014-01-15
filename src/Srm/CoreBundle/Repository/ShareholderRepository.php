<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class ShareholderRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('s')
            ->select('s', 'c')
            ->leftJoin('s.contact', 'c')
            ->where('s.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('c.shareholder = :shareholder')->setParameter('shareholder', true)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findNonDeletedUsersByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('c.shareholder = :shareholder')->setParameter('shareholder', true)
            ->andWhere('c.isUser = :isUser')->setParameter('isUser', true)
            ->getQuery()
            ->getResult()
        ;
    }
}
