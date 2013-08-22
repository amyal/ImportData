<?php

namespace Srm\WebsiteBundle\Form\Type\Site;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CurrencyType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Currency',
            'empty_value'   => 'currency.choice',
            'label'         => 'currency',
            'property'      => 'label',
            'mapped'        => false,
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')->orderBy('u.label', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_currency';
    }
}
