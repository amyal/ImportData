<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Contact;
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

    public function formAction(Organisation $organisation, Contact $user)
    {
        $formActionRoute = 'srm_website_users_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $contactId = $user->getContactId()) {
            $formActionRoute = 'srm_website_user_edit';
            $formActionRouteParams['contactId'] = $contactId;
        }

        $form = $this->createForm('srm_user', $user, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:User:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:User:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_users_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
