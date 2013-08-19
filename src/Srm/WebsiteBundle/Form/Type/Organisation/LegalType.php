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
                    'label' => 'organisation.form.legal.label',
                    'attr'  => array('autofocus' => 'autofocus')
                )
            )
            ->add(
                'natureCapital', 'text', array(
                    'label' => 'organisation.form.legal.nature_capital',
                )
            )
            ->add(
                'category', 'text', array(
                    'label' => 'organisation.form.legal.category',
                )
            )
            ->add(
                'registrationDate', 'date', array(
                    'label' => 'organisation.form.legal.registration_date',
                )
            )
            ->add('save', 'submit', array('attr' => array('class' => 'btn'), 'label' => 'navigation.button.save'))
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
