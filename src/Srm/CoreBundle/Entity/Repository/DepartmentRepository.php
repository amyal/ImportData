<?php

namespace Srm\CoreBundle\Entity\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;

class DepartmentRepository extends EntityRepository
{
    public function findBySites($sites)
    {
        $departments = array();

        foreach ($sites as $site) {
            foreach ($site->getDepartments() as $department) {
                $departments[] = $department;
            }
        }

        return $departments;
    }
}
