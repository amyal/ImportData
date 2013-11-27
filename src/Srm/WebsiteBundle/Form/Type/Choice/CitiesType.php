<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CitiesType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\City',
            'empty_value'   => 'address.city.choice',
            'label'         => 'address.city',
            'property'      => 'label',
            'mapped'        => false,
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.label', 'ASC')->setMaxResults(500);
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_cities';
    }
}
