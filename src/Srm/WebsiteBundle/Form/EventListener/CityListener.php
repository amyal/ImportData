<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;

class CityListener implements EventSubscriberInterface
{
    /**
     * @var FormFactoryInterface
     */
    private $factory;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param factory FormFactoryInterface
     */
    public function __construct(FormFactoryInterface $factory, EntityManager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT   => 'preSubmit',
            //FormEvents::PRE_SET_DATA => 'preSetData',
        );
    }

    /**
     * @param event FormEvent
     */
    public function preSetData(FormEvent $event)
    {
        $zip = $event->getData()->getZip();

        // Before SUBMITing the form, the "zip" will be null
        if (null === $zip) {
            return;
        }

        $form = $event->getForm();
        $city = $zip->getCity();

        $this->customizeForm($form, $city);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $code = $data['code'];

        if (null === $zip = $this->em->getRepository('SrmCoreBundle:Zip')->findOneByCode($code)) {
            throw new \Exception(sprintf('The event %s could not be found for you registration', $code));
        }

        $form = $event->getForm();
        $city = $zip->getCity();

        $this->customizeForm($form, $city);
    }

    protected function customizeForm($form, $city)
    {
ob_start(); $handle = fopen('/home/users/dacosta/temp/logs/dev.log', 'a');
echo sprintf('%s::%s::%d', __CLASS__, __FUNCTION__, __LINE__)."\n";
\Doctrine\Common\Util\Debug::dump($city);
$print = ob_get_contents(); ob_end_clean(); fwrite($handle, $print."\n"); fclose($handle);
        $form->add('city', 'srm_city', array('data' => $city));
    }
}
