<?php

namespace Srm\indicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RepositoryIndicatorsType extends AbstractType
{
    protected $request;
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        if (null === $this->request) {
            throw new \Exception('Organisation cannot be retrieved to build indicators list if the request is not accessible.');
        }

        $organisation   = $this->request->get('organisation');
        $indicators     = $this->em->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByRepository();

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\Indicators',
            'property' => 'label',
            'label'    => 'repositories.list.repositoryIndicators',
            'choices'  => $indicators,
            'multiple' => true,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_repositoryIndicators';
    }
}
