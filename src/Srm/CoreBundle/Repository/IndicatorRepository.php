<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Repository;

class IndicatorRepository extends EntityRepository
{
    public function findNonDeletedByRepository()
    {

        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            //->andWhere('c.repository = :repository')->setParameter('repository', $repository)
            ->getQuery()
            ->getResult();
        
    }
    
    public function findNonDeletedByCategories($categoryIds)
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.indicatorLevel1 IN (:category)')->setParameter('category', explode(',', $categoryIds))
            ->getQuery()->getResult();
    }
}
