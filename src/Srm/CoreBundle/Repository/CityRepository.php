<?php

namespace Srm\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Country;

class CityRepository extends EntityRepository
{
    public function findByCountry(Country $country, $limit = 500)
    {
        return $this
            ->createQueryBuilder('c')
            ->where('c.country = :countryId')->setParameter('countryId', $country->getCountryId())
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }
}
