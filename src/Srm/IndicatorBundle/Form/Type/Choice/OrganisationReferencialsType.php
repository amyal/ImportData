<?php

namespace Srm\indicatorBundle\Form\Type\Choice;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationReferencialsType extends AbstractType
{
    protected $request;
    protected $em;
    protected $referencialType;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        //$this->referencialType = $referencialType;
    }

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        if (null === $this->request) {
            throw new \Exception('Organisation cannot be retrieved to build indicators list if the request is not accessible.');
        }

        $organisation       = $this->request->get('organisation');
        //$groupStakeholders  = $this->em->getRepository('Srm\CoreBundle\Entity\Organisation')->findNonDeletedByOrganisation($organisation);

        $resolver->setDefaults(array(
            'class'    => 'Srm\CoreBundle\Entity\Organisation',
            'property' => 'label',
            'label'    => 'referencials.list.organisationReferencials',
            'choices'  => $organisation,
            'multiple' => false,
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_organisationReferencials';
    }
}
