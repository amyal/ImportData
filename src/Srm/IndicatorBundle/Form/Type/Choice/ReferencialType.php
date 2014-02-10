<?php

namespace Srm\IndicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReferencialType extends AbstractType
{
    protected $request;

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        if (null === $this->request) {
            throw new \Exception('Organisation cannot be retrieved to build ReferencialType list if the request is not accessible.');
        }

        $organisation       = $this->request->get('organisation');
        //$referencialType    = $this->em->getRepository('Srm\CoreBundle\Entity\ReferencialType')->findNonDeleted($organisation);

        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\ReferencialType',
            'property'      => 'label',
            'label'         => 'indicators.list.referencialType',
            'choices'       => $organisation
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_referencialTypes';
    }
}