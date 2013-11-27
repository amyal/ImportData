<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupStakeholderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'text', array(
                'label'    => 'groupStakeholders.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('stakeholderGroup', 'srm_stakeholderGroup', array('required' => true))

            ->add('stakeholderArchetypes', 'srm_stakeholderArchetypes', array('required' => true))

            ->add('enabled', 'checkbox', array('label' => 'enabled'))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\GroupStakeholder',
        ));
    }

    public function getName()
    {
        return 'srm_groupStakeholder';
    }
}
