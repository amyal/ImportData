<?php

namespace Srm\WebsiteBundle\Form\Type\Address;

use Srm\CoreBundle\Entity\City;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();

        $builder
            ->add('label', 'text', array('label' => 'form.address.city'))

            //->add('country', 'srm_country')
            ->add('country', new CountryType())

            // ->add('country', 'entity', array(
            //     'label'         => 'form.address.country',
            //     'class'         => 'Srm\CoreBundle\Entity\Country',
            //     'property'      => 'label',
            //     'empty_value'   => 'form.address.country.choice',
            //     'data_class'    => 'Srm\CoreBundle\Entity\Country',
            //     'query_builder' => function(EntityRepository $er) {
            //         return $er->createQueryBuilder('u')->orderBy('u.label', 'ASC');
            //     },
            // ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\City',
            'compound'      => true,
            'data_class'    => 'Srm\CoreBundle\Entity\City',
            'empty_value'   => 'form.address.city.choice',
            'property'      => 'label',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')->orderBy('u.label', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'srm_city';
    }
}
