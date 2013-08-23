<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Srm\CoreBundle\Entity\Organisation;

class OrganisationParamConverter implements ParamConverterInterface
{
    private $repo;

    public function __construct(EntityRepository $repo)
    {
        $this->repo = $repo;
    }

    public function supports(ConfigurationInterface $configuration)
    {
        return 'Srm\CoreBundle\Entity\Organisation' === $configuration->getClass();
    }

    public function apply(Request $request, ConfigurationInterface $configuration)
    {
        if (null === $identificationCode = $request->get('identificationCode', null)) {
            return false;
        }

        if (null === $organisation = $this->repo->findOneByIdentificationCode($identificationCode)) {
            $organisation = new Organisation();
            $organisation->setIdentificationCode($identificationCode);
        }

        $request->attributes->set($configuration->getName(), $organisation);

        return true;
    }
}
