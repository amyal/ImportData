<?php

namespace Srm\WebsiteBundle\Form\Type\Address;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CityType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            //'auto_initialize' => false,
            'class'         => 'Srm\CoreBundle\Entity\City',
            'data_class'    => 'Srm\CoreBundle\Entity\City',
            'empty_value'   => 'form.address.city.choice',
            'label'         => 'form.address.city',
            'property'      => 'label',
            'mapped'        => false,
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
