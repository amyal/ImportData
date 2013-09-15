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
            ->add('parts', 'text', array('label' => 'shareholder.parts'))

            ->add('picture', 'file', array('label' => 'contact.picture'))
            ->add('comments', 'textarea', array('label' => 'contact.comments'))

            ->add('isUser',  'checkbox', array('label' => 'contact.is_user'))
            ->add('enabled', 'checkbox', array('label' => 'contact.enabled'))

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
