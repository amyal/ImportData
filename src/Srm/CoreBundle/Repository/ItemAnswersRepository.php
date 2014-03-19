<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ItemAnswersRepository extends EntityRepository
{
    public function findNonDeletedByAnswers($answers)
    {
        return $this->createQueryBuilder('ia')
            //->select('a', 'i')
            ->leftJoin('ia.answers', 'a')
            ->where('ia.answers IN (:answers)')->setParameter('answers', $answers)
            ->getQuery()
            ->getResult()
        ;
    }
}
