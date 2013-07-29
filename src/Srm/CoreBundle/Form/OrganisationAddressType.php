<?php

namespace Srm\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationAddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'form.address.name'))

            ->add('zip', 'srm_zip')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'      => 'Srm\CoreBundle\Entity\Address',
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Address',
        ));
    }

    public function getName()
    {
        return 'srm_organisation_address';
    }
}
