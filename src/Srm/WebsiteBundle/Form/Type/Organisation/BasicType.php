<?php

namespace Srm\WebsiteBundle\Form\Type\Organisation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BasicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'label', 'text', array(
                    'label' => 'organisation.form.basic.label',
                    'attr'  => array('autofocus' => 'autofocus')
                )
            )
            ->add('address', 'srm_address')
            ->add(
                'identificationCode', 'text', array(
                    'label'     => 'organisation.form.basic.identification_code',
                    'read_only' => true
                )
            )
            ->add('employees', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Employees',
                'property' => 'label',
                'label'    => 'organisation.form.basic.employees',
                'required' => true,
            ))
            ->add('turnover', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Turnover',
                'property' => 'label',
                'label'    => 'organisation.form.basic.turnover',
                'required' => true,
            ))
            ->add('slogan1', 'text', array('label' => 'organisation.form.basic.slogan1'))
            ->add('slogan2', 'text', array('label' => 'organisation.form.basic.slogan2'))
            ->add('slogan3', 'text', array('label' => 'organisation.form.basic.slogan3'))

            ->add(
                'picture', 'file', array(
                    'label'    => 'organisation.form.basic.logo',
                    'required' => false
                )
            )

            ->add('save', 'submit', array('label' => 'button.save')
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Organisation',
        ));
    }

    public function getName()
    {
        return 'srm_organisation_basic';
    }
}
