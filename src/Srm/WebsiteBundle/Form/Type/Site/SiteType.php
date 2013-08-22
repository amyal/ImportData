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
                    'label' => 'site.label',
                    'attr'  => array(
                        'autofocus'   => 'autofocus',
                        //'placeholder' => 'site.label',
                    )
                )
            )
            ->add('typeSite', 'srm_type_site')
            ->add('siteActivities', 'srm_site_activity')
            ->add('subSiteActivities', 'srm_sub_site_activity')
            ->add('contacts', 'srm_site_contact')
            ->add('dangerousSubstances', 'srm_dangerous_substance')
            ->add(
                'importance', 'choice', array(
                    'choices' => array()
                )
            )
            ->add('currency', 'srm_currency')
            ->add('language', 'srm_language')
            ->add('address', 'srm_address')
            ->add('phone', 'integer')
            ->add(
                'enabled', 'choice', array(
                    'choices' => array(
                        'site.enabled',
                        'site.disabled'
                    )
                )
            )
            ->add(
                'save', 'submit', array(
                    'attr'  => array('class' => 'btn btn-primary'),
                    'label' => 'button.save'
                )
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
