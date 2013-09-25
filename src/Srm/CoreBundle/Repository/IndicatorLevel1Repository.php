<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IndicatorLevel1Repository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('il1')
            ->where('il1.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }
}
