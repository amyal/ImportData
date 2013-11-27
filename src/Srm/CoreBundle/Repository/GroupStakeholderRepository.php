<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class GroupStakeholderRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('s')
            ->where('s.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('s.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }
}
