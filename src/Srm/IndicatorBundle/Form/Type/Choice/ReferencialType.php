<?php

namespace Srm\IndicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
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
            throw new \Exception('Organisation cannot be retrieved to build categories list if the request is not accessible.');
        }

        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Referencial',
            'property'      => 'label',
            'label'         => 'repositories.list.referencial',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('s')->orderBy('s.referencialId', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_referencials';
    }
}