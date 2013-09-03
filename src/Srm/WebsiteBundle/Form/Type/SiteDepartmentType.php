<?php

namespace Srm\WebsiteBundle\Form\Type;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiteDepartmentType extends AbstractType
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
        $sites       = $this->em->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation);
        $departments = $this->em->getRepository('Srm\CoreBundle\Entity\Department')->findNonDeletedBySites($sites);

        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Site',
            'multiple'      => true,
            'property'      => 'label',
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'srm_site_department';
    }
}
