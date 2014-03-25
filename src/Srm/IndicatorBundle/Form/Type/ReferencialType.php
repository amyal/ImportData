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
            
            ->add('referencialType', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\ReferencialType',
                'property' => 'label',
                'label'    => 'referencials.list.referencial',
                'required' => true,
                'attr'=>array('class'=>'chzn-select', 'name'=>'colors')
            ))
            /*->add('referencialType', 'srm_referencialTypes', array('required' => true))*/

            ->add('label', 'text', array(
                'label'    => 'referencial.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('description', 'textarea', array(
                'label'    => 'referencial.description',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('toGroupStakeholder', 'srm_organisation_groupStakeholder', array(
                'label'    => 'referencials.list.toGroupStakeholder',
                'empty_value' => 'Interne',
                'required' => false,
                'attr'=>array('class'=>'chzn-select')
            ))
            
            //->add('organisationReferencials', 'srm_organisation_organisationReferencials', array('required' => true))

            ->add('categories1', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Category1',
                'property' => 'label',
                'label'    => 'referencials.list.category1',
                'required' => false,
                'multiple' => true
            ))
                
            ->add('categories2', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Category2',
                'property' => 'label',
                'label'    => 'referencials.list.category2',
                'required' => false,
                'multiple' => true
            ))

            ->add('categories3', 'entity', array(
                'class'    => 'Srm\CoreBundle\Entity\Category3',
                'property' => 'label',
                'label'    => 'referencials.list.category3',
                'required' => false,
                'multiple' => true
            ))

            ->add('indicators', 'srm_organisation_referencialIndicators', array('required' => true))

            ->add('fromGroupStakeholder', 'srm_organisation_groupStakeholder', array(
                'empty_value' => 'Aucun',
                'required' => false,
                'label'    => 'referencials.list.fromGroupStakeholder'
            ))
            
            ->add('enabled', 'checkbox', array('label' => 'referencials.enabled','required' => false))

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
