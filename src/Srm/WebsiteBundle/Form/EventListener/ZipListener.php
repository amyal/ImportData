<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Srm\CoreBundle\Entity\Address;

class ZipListener implements EventSubscriberInterface
{
    private $zipRepo;

    public function __construct(EntityRepository $zipRepo)
    {
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
            $event->getForm()->get('city')->setData(array($data->getCity()->getCityId()));
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $code = $data['code'];

        if (null === $zip = $this->zipRepo->findOneByCode($code)) {
            throw new \Exception(sprintf('Zip code [%s] not found.', $code));
        }

        $data['city']    = $zip->getCity()->getCityId();
        $data['country'] = $zip->getCity()->getCountry()->getCountryId();

        $event->setData($data);
    }
}
