<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Stakeholder;

class StakeholdersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $stakeholders = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Stakeholder')->findNonDeletedByOrganisation($organisation);

        return $this->render('SrmWebsiteBundle:Stakeholder:list.html.twig', array(
            'organisation' => $organisation,
            'stakeholders' => $stakeholders,
        ));
    }

    public function showAction(Organisation $organisation, Stakeholder $stakeholders)
    {
        return $this->render('SrmWebsiteBundle:Stakeholder:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'stakeholders'           => $stakeholders,
        ));
    }

    public function disableAction(Organisation $organisation, Stakeholder $stakeholders)
    {
        $stakeholders->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($stakeholders);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_stakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Stakeholder $stakeholders)
    {
        $formActionRoute = 'srm_website_stakeholders_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $stakeholderId = $stakeholders->getStakeholderId()) {
            $formActionRoute = 'srm_website_stakeholders_edit';
            $formActionRouteParams['stakeholderId'] = $stakeholderId;
        }

        $form = $this->createForm('srm_stakeholder', $stakeholders, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Stakeholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Stakeholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($stakeholders);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_stakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
