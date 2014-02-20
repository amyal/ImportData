<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Request;
use Srm\CoreBundle\Entity\Contact;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Stakeholder;
use Srm\UserBundle\Entity\User;

class ContactsController extends Controller
{
    public function listAction(Organisation $organisation)
    { 
        if (!$this->get('security.context')->isGranted('ROLE_SU') || $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmWebsiteBundle:Contact:list.html.twig', array(
            'organisation' => $organisation,
            'contacts'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Contact $contact)
    {  
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmWebsiteBundle:Contact:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'contact'        => $contact,
        ));
    }

    public function disableAction(Organisation $organisation, Contact $contact)
    { 
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        $contact->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_contacts_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Contact $contact, $type = "")
    {  
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
          
        $request = $this->getRequest();//récupérer les ids de partie prenante et la nouvelle organisation 
        $stakeholderid = $request->query->get('stakeholderid'); 
        $org_clt = $request->query->get('org_clt');

        $formActionRoute = 'srm_website_contacts_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(),'type'=>$type,'stakeholderid'=>$stakeholderid, 'org_clt'=>$org_clt);
        $FormEdit=$contact->getContactId() ; //  if the variable equal Null -> add else edition 

        if (null !== $contactId = $contact->getContactId()) 
          {
            $formActionRoute = 'srm_website_contact_edit';
            $formActionRouteParams['contactId'] = $contactId;
          }

        $form = $this->createForm('srm_contact', $contact, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

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

        if ($type == "externe"){ // liéer le contact à la nouvelle organisation et la partie prenante
            $contact->addStakeholder($this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Stakeholder')->find($stakeholderid)); //mapping with stakeholder table
            $contact->setOrganisation($this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Organisation')->find($org_clt));
        }   

        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        if (true === $contact->getIsUser()) {
            if (null === $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->findOneById($contact->getContactId())) {
                $contactName = $contact->getFirstname().' '.$contact->getLastname();
                $user = new User($contact->getContactId(), $contactName, $contact->getMail());
                $user->setRole($this->getDoctrine()->getRepository('Srm\UserBundle\Entity\Role')->findOneByRoleType('ROLE_U'));
                $user->setContact($contact);
                $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                $password = $encoder->encodePassword('toto', $user->getSalt());
                $user->setPassword($password);

                $this->get('fos_user.user_manager')->updateUser($user);
        //      if ($contact->getParts()==Null ) { // if the user it's not a shareholder, then 
                    $message = \Swift_Message::newInstance() // we create a new instance of the Swift_Message class
                    ->setSubject('Verseo SRM') // we configure the title
                    ->setFrom('contact@verseo-consulting.com') // we configure the sender
                    ->setTo($contact->getMail()) // we configure the recipient
                    ->setBody($contact->getGender()->getLabel().' '.$contact->getFirstname().
                            ' '.$contact->getLastname() . ', votre Login est : ' .
                            $user->getUserName().' et votre Mot de passe est : toto');
                    // and we pass the $name variable to the text template which serves as a body of the message
                    $this->get('mailer')->send($message); // then we send the message.

                    //     return new Response('Email bien envoyé');
           // }
        }
        }

        if ($type == "externe"){  
            return $this->redirect($this->generateUrl('srm_website_stakeholders_list', array(
                        'organisationId' => $organisation->getOrganisationId(),
                    )));
        } else 
            return $this->redirect($this->generateUrl('srm_website_contacts_list', array(
                        'organisationId' => $organisation->getOrganisationId(), 
                    )));
        }
}
