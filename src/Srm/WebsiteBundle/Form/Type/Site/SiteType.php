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
                    'label' => 'sites.form.label',
                    'attr'  => array(
                        'autofocus'   => 'autofocus',
                        'placeholder' => 'sites.form.label',
                    )
                )
            )
            ->add('typeSite', 'srm_type_site')
            ->add('address', 'srm_address')
            ->add('dangerousSubstances', 'srm_dangerous_substance')
            ->add('save', 'submit', array('label' => 'navigation.button.save'))
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
