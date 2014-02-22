<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationSubDepartmentsType extends AbstractType
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
            throw new \Exception('Sub departments cannot be retrieved to build sites list if the request is not accessible.');
        }

        $subDepartments  = $this->em->getRepository('Srm\CoreBundle\Entity\SubDepartment')->findAllNonDeleted();

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\SubDepartment',
            'property' => 'label',
            'label'    => 'contact.list.subDepartments',
            'choices'  => $subDepartments,
            'multiple' => true,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_sub_departments';
    }
}
