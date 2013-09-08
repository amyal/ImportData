<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Contact;
use Srm\CoreBundle\Entity\Organisation;

class ContactsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:Contact:list.html.twig', array(
            'organisation' => $organisation,
            'contacts'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function formAction(Organisation $organisation, Contact $contact)
    {
        $formActionRoute = 'srm_website_contacts_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $contactId = $contact->getContactId()) {
            $formActionRoute = 'srm_website_contact_edit';
            $formActionRouteParams['contactId'] = $contactId;
        }

        $form = $this->createForm('srm_contact', $contact, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Contact:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Contact:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_contacts_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
