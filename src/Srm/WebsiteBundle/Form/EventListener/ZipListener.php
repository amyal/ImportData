<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
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
        $form = $event->getForm();

        $form->add($this->factory->createNamed('city',    'srm_city',    null, array('auto_initialize' => false)));
        $form->add($this->factory->createNamed('country', 'srm_country', null, array('auto_initialize' => false)));

        if (null === $data) {
            return;
        }

        if ($data instanceof Zip) {
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
