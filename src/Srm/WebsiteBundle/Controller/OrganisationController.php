<?php

namespace Srm\WebsiteBundle\Controller;

use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\LegalForm;
use Srm\CoreBundle\Entity\Organisation;

class OrganisationController extends Controller
{
    public function showAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:Organisation:show.html.twig', array(
            'organisation' => $organisation
        ));
    }

    public function basicAction(Organisation $organisation)
    {
        $form = $this->createForm('srm_organisation_basic', $organisation, array(
            'action' => $this->generateUrl('srm_website_organisation_basic', array('identificationCode' => $organisation->getIdentificationCode())),
            'method' => 'POST',
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Organisation:basic.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Organisation:basic.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($organisation);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_organisation_show', array(
            'identificationCode' => $organisation->getIdentificationCode()
        )));
    }

    public function legalAction(Organisation $organisation)
    {
        $form = $this->createForm('srm_organisation_legal', $organisation, array(
            'action' => $this->generateUrl('srm_website_organisation_legal', array('identificationCode' => $organisation->getIdentificationCode())),
            'method' => 'POST',
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Organisation:legal.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }
}
