<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', 'text', array(
                'label'    => 'user.gender',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))
            ->add('lastname', 'text', array(
                'label'    => 'user.lastname',
                'required' => 'true',
            ))
            ->add('firstname', 'text', array(
                'label'    => 'user.firstname',
                'required' => 'true',
            ))
            ->add('contactFunction', 'text', array('label' => 'user.function'))
            ->add('phone', 'text', array('label' => 'phone'))
            ->add('mail', 'text', array(
                'label'    => 'email',
                'required' => true,
            ))

            ->add('role', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Role',
                'property' => 'label',
                'label'    => 'role',
                'required' => true,
            ))

            //->add('address',  'srm_address',  array('required' => true))

            ->add('picture', 'file', array('label' => 'user.picture'))
            ->add('comments', 'textarea', array('label' => 'user.comments'))

            ->add('enabled', 'checkbox', array('label' => 'enabled'))

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
        return 'srm_user';
    }
}
