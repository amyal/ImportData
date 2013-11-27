<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SubSiteActivitiesType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\SubSiteActivity',
            'property'      => 'label',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('s')->orderBy('s.label', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_sub_site_activities';
    }
}
