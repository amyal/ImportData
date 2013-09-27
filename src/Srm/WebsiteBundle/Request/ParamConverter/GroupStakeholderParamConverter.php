<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\GroupStakeholder;

class GroupStakeholderParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\GroupStakeholder' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('groupStakeholderId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le groupe avec le groupStakeholderId
        }

        $groupStakeholder = new GroupStakeholder();

        $request->attributes->set($configuration->getName(), $groupStakeholder);

        return true;
    }
}
