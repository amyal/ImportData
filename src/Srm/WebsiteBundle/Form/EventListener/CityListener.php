<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Srm\CoreBundle\Entity\Zip;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CityListener implements EventSubscriberInterface
{
    private $cityRepo;

    public function __construct(EntityRepository $cityRepo)
    {
        $this->cityRepo = $cityRepo;
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
                $event->getForm()->get('country')->setData(array($city->getCountry()->getId()));
            }
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data  = $event->getData();
        $label = $data['label'];

        if (null === $city = $this->cityRepo->findOneByCode($label)) {
            throw new \Exception(sprintf('The event %s could not be found for you registration', $label));
        }
    }
}
