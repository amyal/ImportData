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

    public function findNonDeletedByReferencialType($referencialTypes)
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.referencialType IN ( :referencialType )')->setParameter('referencialType', $referencialTypes)
            ->getQuery()->getResult();
        
    }

    /*public function findNonDeletedByReferencialTypeIds($referencialTypeIds)
    {
        return $this->createQueryBuilder('r')
            ->select('c1.category1Id, c1.label', 'r')
            ->leftJoin('r.category1', 'c1')
            ->where('r.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('r.referencialType IN (:referencialType)')->setParameter('referencialType', explode(',', $referencialTypeIds))
            ->andWhere('c1.category1Id IS NOT NULL ')
            ->getQuery()->getResult();
    }*/
    
    public function findNonDeletedByCategories($categoryIds, $categoryType, $referencialTypeId)
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.referencialType = :referencialTypeId')->setParameter('referencialTypeId', $referencialTypeId);

        if ($categoryType == 1)
            $qb->andWhere('c.category1 IN (:category)')->setParameter('category', explode(',', $categoryIds));
        elseif ($categoryType == 2)
            $qb->andWhere('c.category2 IN (:category)')->setParameter('category', explode(',', $categoryIds));
        elseif ($categoryType == 3)
            $qb->andWhere('c.category3 IN (:category)')->setParameter('category', explode(',', $categoryIds));

        return $qb->getQuery()->getResult();
    }
}
