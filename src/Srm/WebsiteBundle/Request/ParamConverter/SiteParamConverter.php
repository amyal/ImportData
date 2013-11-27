<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Site;

class SiteParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Site' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('siteId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le site avec le siteId
        }

        $site = new Site();

        if (null === $organisation = $request->get('organisation', null)) {
            throw new \Exception('Aucune organisation trouvée pour créer des sites.');
        }

        $site->setOrganisation($organisation);

        $request->attributes->set($configuration->getName(), $site);

        return true;
    }
}
