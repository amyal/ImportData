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
            ->add(
                'label', 'text', array(
                    'label'    => 'site.label',
                    'required' => true,
                    //'attr'     => array('autofocus' => 'autofocus'),
                )
            )
            ->add('typeSite', 'srm_type_site', array('required' => true))

            ->add('siteActivities',    'srm_site_activity')
            ->add('subSiteActivities', 'srm_sub_site_activity')

            ->add('contacts', 'srm_site_contact')

            ->add('dangerousSubstances', 'srm_dangerous_substance')
            //->add('products', 'srm_product', array('mapped' => false))
            ->add('importance', 'text', array('label' => 'site.importance'))

            ->add('currency', 'srm_currency', array('required' => true))
            ->add('language', 'srm_language', array('required' => true))

            ->add('address',  'srm_address',  array('required' => true))

            ->add('phone', 'integer', array('label' => 'phone', 'required' => true))
            ->add('fax',   'integer', array('label' => 'fax'))
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
