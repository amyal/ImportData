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
            ->add('label')
            ->add('address', new OrganisationAddressType())
            ->add('identificationCode')
            ->add('slogan1')
            ->add('slogan2')
            ->add('slogan3')
            ->add('logo', 'file')
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
