<?php

namespace Srm\WebsiteBundle\Form\Type\Organisation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LegalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'label', 'text', array(
                    'label' => 'form.organisation.legal.label',
                    'attr'  => array('autofocus' => 'autofocus')
                )
            )
            ->add(
                'natureCapital', 'text', array(
                    'label' => 'form.organisation.legal.nature_capital',
                )
            )
            ->add(
                'category', 'text', array(
                    'label' => 'form.organisation.legal.category',
                )
            )
            ->add(
                'registrationDate', 'date', array(
                    'label' => 'form.organisation.legal.registration_date',
                )
            )
            ->add('save', 'submit', array('label' => 'navigation.button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Srm\CoreBundle\Entity\LegalForm',
        ));
    }

    public function getName()
    {
        return 'srm_organisation_legal';
    }
}
