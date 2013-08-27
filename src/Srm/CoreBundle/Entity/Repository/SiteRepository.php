<?php

namespace Srm\CoreBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class SiteRepository extends EntityRepository
{
    public function findAllEnabledByOrganisation(Organisation $organisation)
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.deleted != :deleted')->setParameter('deleted', true)
            ->andWhere('s.organisation = :organisation')->setParameter('organisation', $organisation)
        ;

        return $qb->getQuery()->getResult();
    }
}
