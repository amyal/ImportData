<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;

use Srm\CoreBundle\Entity\Country;
use Srm\CoreBundle\Entity\Zip;

class ZipListener implements EventSubscriberInterface
{
    private $factory;
    private $zipRepo;

    public function __construct(FormFactoryInterface $factory, EntityRepository $zipRepo)
    {
        $this->factory = $factory;
        $this->zipRepo = $zipRepo;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT   => 'preSubmit',
        );
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();

        if ($data instanceof Zip) {
            if (null !== $city = $data->getCity()) {
                $form = $event->getForm();
                $country = $city->getCountry();

                $this->refreshCities($form, $country);
                $this->setCountry($form, $country);
            }
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (isset($data['country'])) {
            $this->refreshCities($form, $data['country']);
        }
    }


    private function refreshCities($form, $country)
    {
        $form->add($this->factory->createNamed('city', 'srm_city', null, array(
            'query_builder' => function(EntityRepository $repository) use ($country)
            {
                $qb = $repository->createQueryBuilder('city')->innerJoin('city.country', 'country');

                if ($country instanceof Country) {
                    $qb->where('city.country = :country')->setParameter('country', $country);
                } elseif (is_numeric($country)) {
                    $qb->where('country.countryId = :country')->setParameter('country', $country);
                } else {
                    $qb->where('country.label = :country')->setParameter('country', null);
                }

                return $qb;
            }
        )));
    }

    private function setCountry($form, $country)
    {
        $form->add($this->factory->createNamed('country', 'srm_country', null, array(
            'data' => $country,
        )));
    }
}
