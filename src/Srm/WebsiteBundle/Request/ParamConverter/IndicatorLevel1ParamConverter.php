<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\IndicatorLevel1;

class IndicatorLevel1ParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\IndicatorLevel1' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('indicatorLevel1Id', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver la catégorie avec le indicatorLevel1Id
        }

        $category = new IndicatorLevel1();

        $request->attributes->set($configuration->getName(), $category);

        return true;
    }
}
