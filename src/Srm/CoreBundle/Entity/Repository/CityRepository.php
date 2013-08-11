<?php

namespace Srm\CoreBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

use Srm\CoreBundle\Entity\Country;

class CityRepository extends EntityRepository
{
    public function findByCountry(Country $country, $limit = 500)
    {
        return $this
            ->createQueryBuilder('c')
            ->where('u.country = :countryId')->setParameter('countryId', $country->getCountryId())
            ->setMaxResults($limit)
        ;
    }
}
