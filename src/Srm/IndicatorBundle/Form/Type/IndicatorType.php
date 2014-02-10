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
                'label'    => 'indicator.label',
                'read_only' => true,
                'attr'     => array('autofocus' => 'autofocus'),
                'empty_data' => ''
            ))
            ->add('code', 'text', array(
                'label'    => 'indicator.code',
                'read_only' => true,
                'attr'     => array('autofocus' => 'autofocus'),
                'empty_data' => ''
            ))
            ->add('indicatorZone', 'text', array(
                'label'    => 'indicator.indicatorZone',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
                'empty_data' => ''
            ))
            ->add('indicatorZone', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\IndicatorZone',
                'property' => 'label',
                'label'    => 'indicator.indicatorZone',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('indicatorGraph', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\IndicatorGraph',
                'property' => 'label',
                'label'    => 'indicator.indicatorGraph',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('unitMeasurement', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\UnitMeasurement',
                'property' => 'label',
                'label'    => 'indicator.unitMeasurement',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('screenPeriod', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\ScreenPeriod',
                'property' => 'label',
                'label'    => 'indicator.screenPeriod',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('publicationFrequency', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\PublicationFrequency',
                'property' => 'label',
                'label'    => 'indicator.publicationFrequency',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            ->add('publicationDelay', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\PublicationDelay',
                'property' => 'label',
                'label'    => 'indicator.publicationDelay',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            //->add('label', 'number', array( 'precision' => 2, 'grouping' => \NumberFormatter::GROUPING_USED))

            ->add('enabled', 'checkbox', array('label' => 'indicator.enabled'))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Indicator',
        ));
    }

    public function getName()
    {
        return 'srm_indicator';
    }
}
