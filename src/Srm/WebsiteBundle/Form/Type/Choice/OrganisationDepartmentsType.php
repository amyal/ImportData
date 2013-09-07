<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationDepartmentsType extends AbstractType
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
            throw new \Exception('Organisation cannot be retrieved to build sites list if the request is not accessible.');
        }

        $organisation = $this->request->get('organisation');
        $sites        = $this->em->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation);
        $departments  = $this->em->getRepository('Srm\CoreBundle\Entity\Department')->findNonDeletedBySites($sites);

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\Department',
            'property' => 'label',
            'label'    => 'poles.list.departments',
            'choices'  => $departments,
            'multiple' => true,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_departments';
    }
}
