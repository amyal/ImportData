<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Category1Repository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('c1')
            ->where('c1.deleted = :deleted')->setParameter('deleted', false)
            //->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

}
