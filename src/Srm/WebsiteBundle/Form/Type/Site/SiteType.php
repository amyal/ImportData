<?php

namespace Srm\WebsiteBundle\Form\Type\Site;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'text', array(
                'label'    => 'site.label',
                'required' => true,
                //'attr'     => array('autofocus' => 'autofocus'),
            ))
            ->add('typeSite', 'srm_type_site', array('required' => true))

            ->add('siteActivities', 'srm_site_activities', array(
                'expanded' => true,
                'multiple' => true,
            ))
            ->add('subSiteActivities', 'srm_sub_site_activities', array(
                'expanded' => true,
                'multiple' => true,
            ))

            ->add('contacts', 'srm_organisation_contacts', array('multiple' => true))

            ->add('dangerousSubstances', 'srm_dangerous_substances', array(
                'expanded' => true,
                'multiple' => true,
            ))
            //->add('products', 'srm_products', array('mapped' => false))
            ->add('importance', 'text', array('label' => 'site.importance'))

            ->add('currency', 'srm_currencies', array('required' => true))
            ->add('language', 'srm_languages',  array('required' => true))

            ->add('address',  'srm_address',  array('required' => true))

            ->add('phone', 'text', array('label' => 'phone', 'required' => true))
            ->add('fax',   'text', array('label' => 'fax'))
            ->add('mail', 'email', array('label' => 'email', 'required' => true))

            ->add('enabled', 'checkbox', array('label' => 'site.enabled'))

            ->add('save', 'submit', array('label' => 'button.save')
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Site',
        ));
    }

    public function getName()
    {
        return 'srm_site';
    }
}
