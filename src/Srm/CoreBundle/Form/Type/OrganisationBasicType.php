<?php

namespace Srm\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationBasicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'text', array('label' => 'form.organisation.basic.label'))
            ->add('address', 'organisation_address')
            ->add('identificationCode', 'text', array('label' => 'form.organisation.basic.identification_code'))
            ->add('slogan1', 'text', array('label' => 'form.organisation.basic.slogan1'))
            ->add('slogan2', 'text', array('label' => 'form.organisation.basic.slogan2'))
            ->add('slogan3', 'text', array('label' => 'form.organisation.basic.slogan3'))
            ->add('logo', 'file', array('label' => 'form.organisation.basic.logo'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srm\CoreBundle\Entity\Organisation',
        ));
    }

    public function getName()
    {
        return 'organisation_basic';
    }
}
