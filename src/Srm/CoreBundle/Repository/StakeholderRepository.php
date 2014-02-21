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

    public function findNonDeletedByArchetype(Organisation $organisation, $archetypes)
    {
        return $this->createQueryBuilder('st')
        	->leftJoin('st.archetypes', 'a')
            ->where('st.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('st.organisation = :organisation')->setParameter('organisation', $organisation)
            ->andWhere('a.stakeholderArchetypeId IN ( :archetypes )')->setParameter('archetypes', explode(',', $archetypes))
            ->getQuery()->getResult();
        
    }

}
