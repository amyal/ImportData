<?php

namespace Srm\WebsiteBundle\Request\ParamConverter;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $identificationCode = $request->get('identificationCode');

        try {
            if (null === $organisation = $this->repo->get(sprintf('ged_api.%s_document_manager', $ged))->getInfo($list, $docId)) {
                $organisation = new Organisation($identificationCode);
            }
        } catch (\Exception $e) {
            throw new NotFoundHttpException($e->getMessage());
        }

        $request->attributes->set($configuration->getName(), $organisation);

        return true;
    }
}
