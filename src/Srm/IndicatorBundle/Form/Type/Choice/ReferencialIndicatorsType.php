<?php

namespace Srm\indicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReferencialIndicatorsType extends AbstractType
{
    protected $request;
    protected $em;
    protected $referencialType;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        //$this->referencialType = $referencialType;
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

        $organisation       = $this->request->get('organisation');
        //$referencialType    = $this->request->get('referencialType');
        $referencialType    = $this->em->getRepository('Srm\CoreBundle\Entity\ReferencialType')->findNonDeleted();
        $indicators         = $this->em->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByReferencialType($referencialType);

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\Indicators',
            'property' => 'label',
            'label'    => 'referencials.list.referencialIndicators',
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
        return 'srm_organisation_referencialIndicators';
    }
}
