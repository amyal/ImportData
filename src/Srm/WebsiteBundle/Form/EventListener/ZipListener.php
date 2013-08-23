<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Srm\CoreBundle\Entity\Zip;

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
        if (null === $data = $event->getData()) {
            return;
        }

        if ($data instanceof Zip) {
            $form = $event->getForm();
            $form->get('city')->setData($data->getCity());
            $form->get('country')->setData($data->getCity()->getCountry());
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (isset($data['code'])) {
            if (null === $zip = $this->zipRepo->findOneBy(array('code' => $data['code']))) {
                $form->addError(new FormError(sprintf('Posted zip code [%d] does not match any zip in the database !!!', $data['code'])));
                return;
            }

            $form->setData($zip);
        }
    }
}
