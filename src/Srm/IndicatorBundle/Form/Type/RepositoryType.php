<?php

namespace Srm\IndicatorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RepositoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', 'text', array(
                'label'    => 'repository.label',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('description', 'text', array(
                'label'    => 'repository.description',
                'required' => true,
                'attr'     => array('autofocus' => 'autofocus'),
            ))

            ->add('repositoryCategories', 'srm_organisation_indicatorLevel1', array('required' => true))
            
            ->add('repositoryIndicators', 'srm_organisation_repositoryIndicators', array('required' => true))

            ->add('enabled', 'checkbox', array('label' => 'enabled'))

            ->add('save', 'submit', array('label' => 'button.save'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Repository',
        ));
    }

    public function getName()
    {
        return 'srm_repository';
    }
}
