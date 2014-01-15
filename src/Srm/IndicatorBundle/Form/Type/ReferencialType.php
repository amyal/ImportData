<?php

namespace Srm\IndicatorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReferencialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referencialType', 'srm_referencialTypes', array('required' => true))

            ->add('label', 'text', array(
                'label'    => 'referencial.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('description', 'text', array(
                'label'    => 'referencial.description',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            //->add('referencialCategories', 'srm_organisation_indicatorLevel1', array('required' => true))
            
            ->add('referencialIndicators', 'srm_organisation_referencialIndicators', array('required' => true))

            ->add('enabled', 'checkbox', array('label' => 'enabled'))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Referencial',
        ));
    }

    public function getName()
    {
        return 'srm_referencial';
    }
}
