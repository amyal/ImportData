<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class ContactRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('c')
            ->where('c.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('c.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('c.shareholder = :shareholder')->setParameter('shareholder', false)
            ->getQuery()
            ->getResult()
        ;
    }
}
