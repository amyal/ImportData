<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Contact;

class ContactParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Contact' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('contactId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver le user avec le contactId
        }

        $user = new Contact();

        if (null === $organisation = $request->get('organisation', null)) {
            throw new \Exception('Aucune organisation trouvée pour créer des users.');
        }

        $user->setOrganisation($organisation);

        $request->attributes->set($configuration->getName(), $user);

        return true;
    }
}
