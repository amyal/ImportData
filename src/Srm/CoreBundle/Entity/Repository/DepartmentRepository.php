<?php

namespace Srm\CoreBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class DepartmentRepository extends EntityRepository
{
    public function findBySites($sites)
    {
ob_start(); $handle = fopen('/home/nelson/www/dev.log', 'a');
echo sprintf('%s::%s::%d', __CLASS__, __FUNCTION__, __LINE__)."\n";
var_dump(count($sites));
$print = ob_get_contents(); ob_end_clean(); fwrite($handle, $print."\n"); fclose($handle);
        return $this->createQueryBuilder('d')
            ->whereIn('d.sites', $sites)
            ->getQuery()
            ->getResult()
        ;
    }
}
