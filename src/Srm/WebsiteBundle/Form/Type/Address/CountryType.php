<?php

namespace Srm\WebsiteBundle\Form\Type\Address;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CountryType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Country',
            'data_class'    => 'Srm\CoreBundle\Entity\Country',
            'empty_value'   => 'form.address.country.choice',
            'label'         => 'form.address.country',
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
        return 'srm_country';
    }
}
