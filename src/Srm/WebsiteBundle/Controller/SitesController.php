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
            'sites'        => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Site')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Site $site)
    {
        return $this->render('SrmWebsiteBundle:Site:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'site'           => $site,
        ));
    }

    public function disableAction(Organisation $organisation, Site $site)
    {
        $site->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($site);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_sites_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Site $site)
    {
        $formActionRoute = 'srm_website_sites_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $siteId = $site->getSiteId()) {
            $formActionRoute = 'srm_website_site_edit';
            $formActionRouteParams['siteId'] = $siteId;
        }

        $form = $this->createForm('srm_site', $site, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Site:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
                'subActivities'  => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\SubSiteActivity')->findAllGroupedBySiteActivity(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Site:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
                'subActivities'  => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\SubSiteActivity')->findAllGroupedBySiteActivity(),
            ));
        }

        foreach ($site->getSubSiteActivities() as $subSiteActivity) {
            if (false === $site->getSiteActivities()->contains($subSiteActivity->getSiteActivity())) {
                $site->addSiteActivity($subSiteActivity->getSiteActivity());
            }
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($site);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_sites_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
