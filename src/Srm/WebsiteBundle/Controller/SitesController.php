<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Site;

class SitesController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:Site:list.html.twig', array(
            'organisation' => $organisation,
            'sites'        => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation)
        ));
    }

    public function formAction(Organisation $organisation, Site $site)
    {
        $formActionRoute = 'srm_website_sites_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $siteId = $site->getSiteId()) {
            $formActionRoute = 'srm_website_sites_edit';
            $formActionRouteParams['siteId'] = $siteId;
        }

        $form = $this->createForm('srm_site', $site, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Site:form.html.twig', array(
                'form'           => $form->createView(),
                'organisationId' => $organisation->getOrganisationId(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Site:form.html.twig', array(
                'form'           => $form->createView(),
                'organisationId' => $organisation->getOrganisationId(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($site);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_sites_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
