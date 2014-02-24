<?php

namespace Srm\IndicatorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        

        if ($options['data']->getItemQuestions()) {
            $builder->add('label', 'text', array(
                'label'    => $options['data']->getItemQuestions()->getDescription(),
                'attr'     => array('autofocus' => 'autofocus'),
                'empty_data' => ''
            ));
        }

        $builder->add('save', 'submit', array('label' => 'button.save'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Item',
        ));
    }

    public function getName()
    {
        return 'srm_indicator_item';
    }
}
