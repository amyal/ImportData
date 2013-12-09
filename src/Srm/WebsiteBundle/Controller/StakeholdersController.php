<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Stakeholder;
use Srm\UserBundle\Entity\User;

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
        
            if (true === $stakeholders->getConnexion()) { // if the user check Connexion then
            if (null === $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->findOneById($stakeholders->getStakeholderId())) {
                $user = new User($stakeholders->getStakeholderId(),$stakeholders->getEmail()); // create a new user 
                $user->setRole($this->getDoctrine()->getRepository('Srm\UserBundle\Entity\Role')->findOneByRoleType('ROLE_A')); 
                
                $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                $password = $encoder->encodePassword('toto', $user->getSalt());
                $user->setPassword($password);
                $this->get('fos_user.user_manager')->updateUser($user);
                
                $org_stakeholder = new Organisation($stakeholders->getIdentificationNumber()); //create a new organisation 
                $org_stakeholder->setLabel($stakeholders->getLabel());
                $em->persist($org_stakeholder);
                $em->flush();     
        $message = \Swift_Message::newInstance() // message of the stakeholder
        ->setSubject('Verseo SRM') // we configure the title
        ->setFrom('rachid.amyal@verseo-consulting.com') // we configure the sender
        ->setTo($stakeholders->getEmail()) // we configure the recipient
        ->setBody($stakeholders->getLabel(). ', votre Login est : ' .
                $user->getUserName().' et votre Mot de passe est : toto');
        // and we pass the $name variable to the text template which serves as a body of the message
        ;
        $this->get('mailer')->send($message); // then we send the message.

          
                }
        }
              
         $current_user = $this->getUser();
                $message = \Swift_Message::newInstance() // message of the Creator (Contact)
               ->setSubject('Verseo SRM, Création d\'une partie prenante') // we configure the title
               ->setFrom('rachid.amyal@verseo-consulting.com') // we configure the sender

               ->setTo($current_user->getUsername()) // we configure the recipient
               ->setBody('La partie prenante "'.$stakeholders->getLabel().'" a été enregistré avec succès ');
               // and we pass the $name variable to the text template which serves as a body of the message
               ;
               $this->get('mailer')->send($message); // then we send the message.
               $this->get('session')->getFlashBag()->set('success', 'La partie prenante a été enregistré avec succés');
               
       
      
        return $this->redirect($this->generateUrl('srm_website_stakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
