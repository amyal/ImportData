<?php

namespace Srm\WebsiteBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
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

            ->add('mail', 'text', array(
                'label'    => 'email',
                'required' => true,
            ))

            ->add('contactFunction', 'text', array(
                'label'    => 'contact.function',
                'required' => 'true',
            ))

            ->add('role', 'entity', array(
                'class'    => 'Srm\UserBundle\Entity\Role',
                'property' => 'label',
                'label'    => 'contact.role',
                'empty_value' => 'Sélectionnez un rôle',
                'required' => true,
                'query_builder' => function(EntityRepository $er) use ($options) {
                    if ($options['attr']['roleUserId'] == 1)
                        return $er->createQueryBuilder('r')->where('r.roleId IN (2, 3, 4)')->orderBy('r.label', 'ASC');
                    elseif ($options['attr']['roleUserId'] == 2)
                        return $er->createQueryBuilder('r')->where('r.roleId IN (3, 4)')->orderBy('r.label', 'ASC');
                    else
                        return $er->createQueryBuilder('r')->where('r.roleId IN (4)')->orderBy('r.label', 'ASC');
                }
            ))

            ->add('departments', 'srm_organisation_departments', array('attr'=>array('multiple'=>true,'class'=>'chzn-select', 'name'=>'colors'),'required' => false))

            ->add('subDepartments', 'srm_organisation_sub_departments', array('attr'=>array('multiple'=>true,'class'=>'chzn-select', 'name'=>'colors'),'required' => false))

            ->add('officePhone', 'text', array(
                'label'    => 'phone.office',
                'required' => 'true',
            ))

            ->add('mobilePhone', 'text', array('label' => 'phone.mobile'))

            ->add('fax', 'text', array('label' => 'fax'))

            ->add('address', 'srm_address')

            //->add('shareholder', 'checkbox', array('label' => 'shareholder'))
            
            ->add('image', 'file', array('label' => 'contact.picture', 'required' => false))

            ->add('comments', 'textarea', array('label' => 'contact.comments', 'required' => false))
           
           //->add('sites',    'srm_organisation_sites',array('attr'=>array('class'=>'chzn-select', 'name'=>'colors')))
           
            ->add('isUser',  'checkbox', array('attr'=>array('class'=>'iButton-icons'),'label' => 'contact.is_user','required' => false))

            //->add('enabled', 'checkbox', array('attr'=>array('class'=>'iButton-icons'),'label' => 'contact.enabled'))
            
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
