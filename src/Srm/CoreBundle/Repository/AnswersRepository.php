<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AnswersRepository extends EntityRepository
{
    public function findNonDeletedByItems($items)
    {
        $answers = array();

        foreach ($items as $item) {
            foreach ($item->getAnswers() as $answer) {
                if (!$answer->getDeleted()) {
                    $answers[$answer->getAnswersId()] = $answer;
                }
            }
        }

        return $answers;
    }

    public function findNonDeletedByItem(Organisation $organisation)
    {
        return $this->createQueryBuilder('i')
            ->select('i', 'q', 'ind', 'r')
            ->leftJoin('i.subDepartment', 'sd')
            ->where('i.deleted = :deleted')->setParameter('deleted', false)
            ->andWhere('r.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }
}
