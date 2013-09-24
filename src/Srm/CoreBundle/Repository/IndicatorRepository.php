<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IndicatorRepository extends EntityRepository
{
    public function findNonDeletedByRepository()
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }
}
