<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PoleRepository extends EntityRepository
{
    public function findNonDeletedBySites($sites)
    {
        $poles = array();

        foreach ($sites as $site) {
            foreach ($site->getPoles() as $pole) {
                if (!$pole->getDeleted()) {
                    $poles[$pole->getPoleId()] = $pole;
                }
            }
        }

        return $poles;
    }
}
