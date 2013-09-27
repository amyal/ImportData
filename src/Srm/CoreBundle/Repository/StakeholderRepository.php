<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Organisation;

class StakeholderRepository extends EntityRepository
{
    public function findNonDeletedByOrganisation(Organisation $organisation)
    {
        return $this->createQueryBuilder('st')
            ->where('st.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('st.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }
}
