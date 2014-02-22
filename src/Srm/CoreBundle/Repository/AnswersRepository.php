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
            //->select('i', 'q', 'ind', 'r')
            ->leftJoin('a.item', 'i')
            //->where('a.deleted = :deleted')->setParameter('deleted', false)
            ->where('a.item = :item')->setParameter('item', $items)
            //->andWhere('a.organisation = :organisation')->setParameter('organisation', $organisation)
            ->getQuery()
            ->getResult()
        ;
    }
}
