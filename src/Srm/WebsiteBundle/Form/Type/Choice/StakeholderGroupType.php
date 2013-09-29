<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StakeholderGroupType extends AbstractType
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
            'class'         => 'Srm\CoreBundle\Entity\StakeholderGroup',
            'property'      => 'label',
            'label'         => 'groupStakeholders.list.type',
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
        return 'srm_stakeholderGroup';
    }
}