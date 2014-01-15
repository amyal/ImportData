<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Shareholder;
use Srm\CoreBundle\Entity\Contact;

class ShareholderParamConverter implements ParamConverterInterface
{
    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Shareholder' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null !== $request->get('shareholderId', null)) {
            return false;   // on laisse le DoctrineParamConverter trouver l'actionnaire avec le shareholderId
        }

        $shareholder = new Shareholder();
        //$contact = new Contact();

        if (null === $organisation = $request->get('organisation', null)) {
            throw new \Exception('Aucune organisation trouvée pour créer des actionnaires.');
        }

        //$contact->setShareholder(true);

        $request->attributes->set($configuration->getName(), $shareholder);

        return true;
    }
}
