<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ZipType extends AbstractType
{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code',    'text')
            ->add('city',    'srm_cities',array('attr'=>array('class'=>'chzn-select', 'name'=>'colors')))
            ->add('country', 'srm_countries',array('attr'=>array('class'=>'chzn-select', 'name'=>'colors')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'  => true,
            'data_class' => 'Srm\CoreBundle\Entity\Zip',
        ));
    }

    public function getName()
    {
        return 'srm_zip';
    }
}
