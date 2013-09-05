<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;

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
        if (null === $data = $event->getData()) {
            return;
        }

        if ($data instanceof Zip) {
            $form = $event->getForm();

            $form->add($this->factory->createNamed('city',    'srm_cities',    $data->getCity(),               array('auto_initialize' => false)));
            $form->add($this->factory->createNamed('country', 'srm_countries', $data->getCity()->getCountry(), array('auto_initialize' => false)));
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();

        if (isset($data['code'])) {
            $form = $event->getForm();

            if (null === $zip = $this->zipRepo->findOneBy(array('code' => $data['code']))) {
                $form->addError(new FormError(sprintf('Posted zip code [%d] does not match any zip in the database !!!', $data['code'])));
                return;
            }

            $form->setData($zip);
        }
    }
}