<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Repository;

class RepositoryParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Repository' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('repositoryId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le repository avec le repositoryId
        }

        $repository = new Repository();

        if (null === $organisation = $request->get('organisation', null)) {
            throw new \Exception('Aucune organisation trouvée pour créer un référentiel.');
        }

        $repository->setOrganisation($organisation);

        $request->attributes->set($configuration->getName(), $repository);

        return true;
    }
}
