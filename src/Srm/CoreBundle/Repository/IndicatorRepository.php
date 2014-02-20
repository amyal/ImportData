<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class IndicatorRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('i')
            //->select('i', 'ind.label as indLabel')
            ->leftJoin('i.referencials', 'ref')
            ->leftJoin('i.indicators', 'ind')
            ->leftJoin('ref.organisation', 'refInd')
            ->where('i.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('refInd.organisationId = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('ref.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }
}
