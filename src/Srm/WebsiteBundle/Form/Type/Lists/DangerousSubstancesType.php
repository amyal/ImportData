<?php

namespace Srm\WebsiteBundle\Form\Type\Lists;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DangerousSubstancesType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\DangerousSubstance',
            'property'      => 'label',
            'label'         => 'site.dangerous_substances',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('d')->orderBy('d.label', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_dangerous_substances';
    }
}
