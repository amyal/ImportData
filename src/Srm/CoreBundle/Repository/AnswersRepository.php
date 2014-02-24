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

    public function findNonDeletedByItem($items)
    {
        return $this->createQueryBuilder('a')
            ->select('a', 'i')
            ->leftJoin('a.item', 'i')
            ->where('a.item IN (:item)')->setParameter('item', $items)
            ->getQuery()
            ->getResult()
        ;
    }
}
