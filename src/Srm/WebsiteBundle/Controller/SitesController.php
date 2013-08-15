<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;

class SitesController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $sites = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation);

        return $this->render('SrmWebsiteBundle:Site:list.html.twig', array(
            'organisation' => $organisation,
            'sites'        => $sites
        ));
    }
}
