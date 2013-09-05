<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SubSiteActivityRepository extends EntityRepository
{
    public function findAllGroupedBySiteActivity()
    {
        $subSiteActivities = $this->createQueryBuilder('s')->orderBy('s.label', 'ASC')->getQuery()->getResult();

        $groupedSubSiteActivities = array();

        foreach ($subSiteActivities as $subSiteActivity) {
            if (!isset($groupedSubSiteActivities[$subSiteActivity->getSiteActivity()->getSiteActivityId()])) {
                $groupedSubSiteActivities[$subSiteActivity->getSiteActivity()->getSiteActivityId()] = array();
            }

            $groupedSubSiteActivities[$subSiteActivity->getSiteActivity()->getSiteActivityId()][] = $subSiteActivity->getSubSiteActivityId();
        }

        return $groupedSubSiteActivities;
    }
}
