<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Category2Repository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('c2')
            ->where('c2.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findNonDeletedByCategory1($categoryIds)
    {
        return $this->createQueryBuilder('c2')
            ->where('c2.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c2.category1 IN (:category)')->setParameter('category', explode(',', $categoryIds))
            ->getQuery()->getResult();
    }
}
