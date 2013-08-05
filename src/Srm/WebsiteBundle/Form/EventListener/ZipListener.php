<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Srm\CoreBundle\Entity\Address;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

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
        $address = $event->getData();

        if ($address instanceof Address) {
            if (null !== $zip = $address->getZip()) {
                $event->getForm()->get('city')->setData(array($zip->getCity()->getId()));
            }
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $code = $data['code'];

        if (null === $zip = $this->zipRepo->findOneByCode($code)) {
            throw new \Exception(sprintf('The event %s could not be found for you registration', $code));
        }
    }
}
