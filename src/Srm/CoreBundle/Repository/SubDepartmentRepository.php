<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubDepartmentRepository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('sd')
            //->where('sd.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }

}
