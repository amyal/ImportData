<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IndicatorRepository extends EntityRepository
{
    public function findNonDeletedByRepository($repositories)
    {
        $indicators = array();

        foreach ($repositories as $repository) {
            foreach ($repository->getRepositoryIndicators() as $indicator) {
                if (!$indicator->getDeleted()) {
                    $indicators[$indicator->getIndicatorId()] = $indicator;
                }
            }
        }

        return $indicators;
    }
}
