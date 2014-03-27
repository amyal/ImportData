<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubDepartmentRepository extends EntityRepository
{
    public function findAllNonDeleted()
    {
        return $this->createQueryBuilder('sd')
            //->where('sd.deleted = :deleted')->setParameter('deleted', false)
            ->getQuery()
            ->getResult()
        ;
    }
    // return all SubDepartments that are not link with Department 
    public function getSDepartmentNotBind($org)
    {   $sites= $this->getEntityManager()->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($org);
        $departments = $this->getEntityManager()->getRepository('Srm\CoreBundle\Entity\Department')->findNonDeletedBySites($sites);
                
        $sdepartments = array();

        foreach ($departments as $department) {
            foreach ($department->getSubDepartments() as $sdepartment) {
                $sdepartments[] = $sdepartment->getLabel();
            }
        }

       $qb = $this->createQueryBuilder('sd')
             ->where('sd.label not in (:sdSelected)')->setParameter('sdSelected',$sdepartments);
       return $qb; 
    }
   
}
