<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Category3Repository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('c3')
            ->where('c3.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findNonDeletedByCategory2($categoryIds)
    {
        return $this->createQueryBuilder('c3')
            ->where('c3.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c3.category2 IN (:category)')->setParameter('category', explode(',', $categoryIds))
            ->getQuery()->getResult();
    }
}
