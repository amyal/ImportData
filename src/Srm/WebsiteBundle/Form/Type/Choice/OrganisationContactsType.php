<?php

namespace Srm\WebsiteBundle\Form\Type\Choice;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationContactsType extends AbstractType
{
    protected $request;

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

        $resolver->setDefaults(array(
            'class'         => 'Srm\CoreBundle\Entity\Contact',
            'query_builder' => function(EntityRepository $er) use ($organisation) {
                return $er->createQueryBuilder('c')
                    ->where('c.organisation = :organisation')->setParameter('organisation', $organisation)
                    ->andWhere('c.deleted = :deleted')->setParameter('deleted', 0)
                    ->andWhere('c.shareholder = :shareholder')->setParameter('shareholder', 0)
                    ->orderBy('c.lastname', 'ASC')
                ;
            },
        ));
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'srm_organisation_contacts';
    }
}
