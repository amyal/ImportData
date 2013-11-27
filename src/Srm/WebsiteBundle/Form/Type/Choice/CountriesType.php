<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CountriesType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Country',
            'empty_value'   => 'address.country.choice',
            'label'         => 'address.country',
            'property'      => 'label',
            'mapped'        => false,
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c')->orderBy('c.label', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_countries';
    }
}
