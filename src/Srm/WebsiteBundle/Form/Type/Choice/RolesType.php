<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RolesType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\UserBundle\Entity\Role',
            'label'         => 'user.role',
            'property'      => 'label',
            'mapped'        => 'false',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('r')->orderBy('r.label', 'ASC');
            },  
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_roles';
    }
}
