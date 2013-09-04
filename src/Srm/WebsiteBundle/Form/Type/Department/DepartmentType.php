<?php

namespace Srm\WebsiteBundle\Form\Type\Department;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepartmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'label', 'text', array(
                    'label'    => 'department.label',
                    'required' => true,
                    'attr'     => array('autofocus' => 'autofocus'),
                )
            )

            ->add('subDepartments', 'srm_sub_departments', array('required' => true))

            ->add('sites', 'srm_organisation_sites', array('required' => true))

            ->add('contacts', 'srm_contacts', array('required' => true))

            ->add('enabled', 'checkbox', array('label' => 'enabled'))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Department',
        ));
    }

    public function getName()
    {
        return 'srm_department';
    }
}
