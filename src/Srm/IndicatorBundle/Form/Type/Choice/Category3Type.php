<?php

namespace Srm\indicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Category3Type extends AbstractType
{
    protected $request;
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        if (null === $this->request) {
            throw new \Exception('Organisation cannot be retrieved to build categories list if the request is not accessible.');
        }

        $categories     = $this->em->getRepository('Srm\CoreBundle\Entity\Category3')->findAllNonDeleted();

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\Category3',
            'property' => 'label',
            'label'    => 'referencials.list.category3',
            'choices'  => $categories,
            'multiple' => true,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_category3';
    }
}
