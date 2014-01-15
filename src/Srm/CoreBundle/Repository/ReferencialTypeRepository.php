<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class ReferencialTypeRepository extends EntityRepository
{
    public function findNonDeleted()
    {
        return $this->createQueryBuilder('r')
            ->where('r.deleted = :deleted')->setParameter('deleted', false)
            //->andWhere('r.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }
}
