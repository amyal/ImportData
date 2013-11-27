<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Pole;

class PolesController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $sites = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation);
        $poles = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Pole')->findNonDeletedBySites($sites);

        return $this->render('SrmWebsiteBundle:Pole:list.html.twig', array(
            'organisation' => $organisation,
            'poles'        => $poles,
        ));
    }

    public function showAction(Organisation $organisation, Pole $pole)
    {
        return $this->render('SrmWebsiteBundle:Pole:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'pole'           => $pole,
        ));
    }

    public function disableAction(Organisation $organisation, Pole $pole)
    {
        $pole->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($pole);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_poles_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Pole $pole)
    {
        $formActionRoute = 'srm_website_poles_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $poleId = $pole->getPoleId()) {
            $formActionRoute = 'srm_website_pole_edit';
            $formActionRouteParams['poleId'] = $poleId;
        }

        $form = $this->createForm('srm_pole', $pole, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Pole:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Pole:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($pole);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_poles_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
