<?php

namespace Srm\WebsiteBundle\Form\Type\Address;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CityType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\City',
            'empty_value'   => 'form.address.city.choice',
            'label'         => 'form.address.city',
            'property'      => 'label',
            'mapped'        => false,
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')->orderBy('u.label', 'ASC')->setMaxResults(25000);
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_city';
    }
}
