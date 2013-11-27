<?php

namespace Srm\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadVrData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        \Nelmio\Alice\Fixtures::load(__DIR__.'/vr.yml', $manager);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
