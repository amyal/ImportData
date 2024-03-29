<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'textarea', array('label' => 'address.label'))
            ->add('additional1', 'text', array('label' => 'address.additional1','required' => false))
            ->add('additional2', 'text', array('label' => 'address.additional2','required' => false))
            ->add('zip', 'text', array('label' => 'address.zip'))
            ->add('city', 'text', array('label' => 'address.city'))
            ->add('country', 'srm_countries',array('required' => true))
            //->add('zip', 'srm_zip')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Address',
        ));
    }

    public function getName()
    {
        return 'srm_address';
    }
}
