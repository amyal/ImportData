<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StakeholderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'text', array(
                'label'    => 'stakeholders.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('siretNumber', 'text', array(
                'label'    => 'stakeholders.siretNumber',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('lastname', 'text', array(
                'label'    => 'stakeholders.lastname',
                'required' => 'true',
            ))

            ->add('firstname', 'text', array(
                'label'    => 'stakeholders.firstname',
                'required' => 'true',
            ))

            ->add('email', 'text', array(
                'label'    => 'stakeholders.email',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('phone', 'text', array('label' => 'phone', 'required' => true))

            ->add('fax',   'text', array('label' => 'fax'))

            ->add('address',  'srm_address',  array('required' => true))

            ->add('stakeholderGroup', 'srm_stakeholderGroup', array('required' => true))

            ->add('archetypes', 'srm_stakeholderArchetypes', array('required' => true))

        //   ->add('contacts', 'srm_organisation_stackeholders', array('multiple' => true))
            
            ->add('importance', 'text', array(
                'label'    => 'stakeholders.importance',
                'required' => false,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('connexion', 'checkbox', array(
                'label'    => 'stakeholders.connexion',
                'required' => false,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('subsidiary', 'text', array(
                'label'    => 'stakeholders.subsidiary',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('startActivity', 'date', array('label'  => 'stakeholders.startActivity',
            	'widget' => 'single_text',										'format' => 'dd/MM/y',
		        'input'  => 'datetime',
		        'attr'   => array('class' => 'datepicker fill-up'),
            ))

            ->add('turnovers', 'text', array(
                'label'    => 'stakeholders.turnovers',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('website', 'text', array(
                'label'    => 'stakeholders.website',
                'required' => false,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('enabled', 'checkbox', array('label' => 'enabled','required' => false))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Stakeholder',
        ));
    }

    public function getName()
    {
        return 'srm_stakeholder';
    }
}
