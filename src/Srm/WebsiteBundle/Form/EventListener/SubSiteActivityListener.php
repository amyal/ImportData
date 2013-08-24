<?php

namespace Srm\WebsiteBundle\Form\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class SubSiteActivityListener implements EventSubscriberInterface
{
    private $zipRepo;

    public function __construct(EntityRepository $zipRepo)
    {
        $this->zipRepo = $zipRepo;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT   => 'preSubmit',
        );
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
ob_start(); $handle = fopen('/home/nelson/www/dev.log', 'a');
echo sprintf('%s::%s::%d', __CLASS__, __FUNCTION__, __LINE__)."\n";
var_dump($data);
$print = ob_get_contents(); ob_end_clean(); fwrite($handle, $print."\n"); fclose($handle);
        if (isset($data['code'])) {
            if (null === $zip = $this->zipRepo->findOneBy(array('code' => $data['code']))) {
                $form->addError(new FormError(sprintf('Posted zip code [%d] does not match any zip in the database !!!', $data['code'])));
                return;
            }

            $form->setData($zip);
        }
    }
}
