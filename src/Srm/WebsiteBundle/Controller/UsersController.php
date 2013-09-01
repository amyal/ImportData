<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;

class UsersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:User:list.html.twig', array(
            'organisation' => $organisation,
            'users'        => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findNonDeletedByOrganisation($organisation),
        ));
    }
}
