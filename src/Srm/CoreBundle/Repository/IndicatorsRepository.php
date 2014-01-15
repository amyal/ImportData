<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\ReferencialType;
use Srm\CoreBundle\Entity\Organisation;

class IndicatorsRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('r')
            ->select('r.label', 'ref', 'refType.label')
            ->leftJoin('r.referencials', 'ref')
            ->leftJoin('ref.referencialType', 'refType')
            ->where('r.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('ref.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findNonDeletedByReferencialType($referencialType)
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.referencialType = :referencialType')->setParameter('referencialType', $referencialType)
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
