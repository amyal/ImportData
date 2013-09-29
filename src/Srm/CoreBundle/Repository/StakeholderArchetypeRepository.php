<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class StakeholderArchetypeRepository extends EntityRepository
{
    public function findNonDeletedByType($typeId)
    {
        return $this->createQueryBuilder('sta')
            ->where('sta.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('sta.stakeholderGroup = :stakeholderGroup')->setParameter('stakeholderGroup', $typeId)
            ->getQuery()
            ->getResult()
        ;
    }
}
