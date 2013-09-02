<?php

namespace Srm\CoreBundle\Entity\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;

class DepartmentRepository extends EntityRepository
{
    public function findNonDeletedBySites($sites)
    {
        $departments = array();

        foreach ($sites as $site) {
            foreach ($site->getDepartments() as $department) {
                if (!$department->getDeleted()) {
                    $departments[$department->getDepartmentId()] = $department;
                }
            }
        }

        return $departments;
    }
}
