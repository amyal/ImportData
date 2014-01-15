<?php

namespace Srm\IndicatorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IndicatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('label', 'text', array(
                'label'    => 'repository.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
                'empty_data' => ''
            ))
            //->add('label', 'number', array( 'precision' => 2, 'grouping' => \NumberFormatter::GROUPING_USED))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Indicators',
        ));
    }

    public function getName()
    {
        return 'srm_indicator';
    }
}
