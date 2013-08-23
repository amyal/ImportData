<?php

namespace Srm\WebsiteBundle\Form\Type\Site;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Contact',
            'multiple'      => true,
            'label'         => 'site.contacts',
            'property'      => 'lastname',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')->orderBy('u.lastname', 'ASC');
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_site_contact';
    }
}
