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
            ->add('natureCapital',    'text', array('label' => 'organisation.form.legal.nature_capital'))
            ->add('apeCode',          'text' ,array('label' => 'organisation.form.legal.activity_code'))
            ->add('category',         'text', array('label' => 'organisation.form.legal.category'))
            ->add('registrationDate', 'date', array(
            										'label'  => 'organisation.form.legal.registration_date',
            										'widget' => 'single_text',
													'format' => 'dd/MM/y',
													'input'  => 'datetime',
													'attr'   => array('class' => 'datepicker fill-up'),
            									))

            ->add('save', 'submit', array('label' => 'button.save')
            )
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
