<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Pole;

class PoleParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Pole' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('poleId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le pole avec le poleId
        }

        $pole = new Pole();

        $request->attributes->set($configuration->getName(), $pole);

        return true;
    }
}
