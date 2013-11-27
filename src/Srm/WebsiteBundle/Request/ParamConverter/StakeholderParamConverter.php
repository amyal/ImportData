<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Stakeholder;

class StakeholderParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Stakeholder' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('stakeholderId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le stakeholder avec le stakeholderId
        }

        $stakeholder = new Stakeholder();

        if (null === $organisation = $request->get('organisation', null)) {
            throw new \Exception('Aucune organisation trouvée pour créer une partie prenante.');
        }

        $stakeholder->setOrganisation($organisation);

        $request->attributes->set($configuration->getName(), $stakeholder);
        return true;
    }
}
