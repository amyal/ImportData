<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StakeholderArchetypeType extends AbstractType
{
    protected $request;

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        if (null === $this->request) {
            throw new \Exception('Organisation cannot be retrieved to build categories list if the request is not accessible.');
        }

        //$categories     = $this->em->getRepository('Srm\CoreBundle\Entity\IndicatorLevel1')->findAllNonDeleted();

        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\StakeholderArchetype',
            'property'      => 'label',
            'label'         => 'groupStakeholders.list.archetype',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('sa')->orderBy('sa.label', 'ASC');
            },
            'multiple' => true,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_stakeholderArchetypes';
    }
}