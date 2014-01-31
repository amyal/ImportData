<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {  
        $builder
            ->add('gender', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Gender',
                'property' => 'label',
                'label'    => 'gender',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('lastname', 'text', array(
                'label'    => 'contact.lastname',
                'required' => 'true',
            ))
            ->add('firstname', 'text', array(
                'label'    => 'contact.firstname',
                'required' => 'true',
            ))
            ->add('contactFunction', 'text', array(
                'label'    => 'contact.function',
                'required' => 'true',
            ))
            ->add('officePhone', 'text', array(
                'label'    => 'phone.office',
                'required' => 'true',
            ))
            ->add('mobilePhone', 'text', array('label' => 'phone.mobile'))
            ->add('fax', 'text', array('label' => 'fax'))
            ->add('mail', 'text', array(
                'label'    => 'email',
                'required' => true,
            ))

            ->add('address', 'srm_address')

            ->add('shareholder', 'checkbox', array('label' => 'shareholder'))
            
            //->add('picture', 'file', array('label' => 'contact.picture','required' => false))
            ->add('image', 'file', array('label' => 'contact.picture','required' => false))
            ->add('comments', 'textarea', array('label' => 'contact.comments'))
           // ->add('stakeholders', 'srm_organisation_stakeholders', array('multiple' => true))
           ->add('departments',    'srm_organisation_departments',array('attr'=>array('multiple'=>true,'class'=>'chzn-select', 'name'=>'colors')))
           ->add('sites',    'srm_organisation_sites',array('attr'=>array('class'=>'chzn-select', 'name'=>'colors')))
           
            ->add('isUser',  'checkbox', array('attr'=>array('class'=>'iButton-icons'),'label' => 'contact.is_user'))
            ->add('enabled', 'checkbox', array('attr'=>array('class'=>'iButton-icons'),'label' => 'contact.enabled'))
            
            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Contact',
        ));
    }

    public function getName()
    {
        return 'srm_contact';
    }
}
