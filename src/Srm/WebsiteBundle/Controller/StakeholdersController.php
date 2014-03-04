<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\LegalForm;
use Srm\CoreBundle\Entity\Stakeholder;
use Srm\CoreBundle\Entity\Contact;
use Srm\UserBundle\Entity\User;

class StakeholdersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $stakeholders = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Stakeholder')->findNonDeletedByOrganisation($organisation);

        return $this->render('SrmWebsiteBundle:Stakeholder:list.html.twig', array(
            'organisation' => $organisation,
            'stakeholders' => $stakeholders,
        ));
    }

    public function showAction(Organisation $organisation, Stakeholder $stakeholders)
    {
         if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
       
        return $this->render('SrmWebsiteBundle:Stakeholder:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'stakeholders'           => $stakeholders,
        ));
    }

    public function disableAction(Organisation $organisation, Stakeholder $stakeholders)
    {
         if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
       
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
       if (!$this->get('security.context')->isGranted('ROLE_SU') || $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
         {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
          throw new AccessDeniedHttpException('Accès interdit');
         }

       $formActionRoute = 'srm_website_stakeholders_add';
       $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

       if (null !== $stakeholderId = $stakeholders->getStakeholderId()) {
           $formActionRoute = 'srm_website_stakeholders_edit';
           $formActionRouteParams['stakeholderId'] = $stakeholderId;
       }

       $form = $this->createForm('srm_stakeholder', $stakeholders, array(
           'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
           'method' => 'POST',
           'attr'   => array('class' => 'form-horizontal'/*, 'novalidate' => 'novalidate'*/),
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
        
       if ($formActionRoute=='srm_website_stakeholders_add')
          { 
            //if add a new stakeholder 
            $this->get('session')->getFlashBag()->set('success', 'La partie prenante "'.$stakeholders->getLabel().'" a été enregistré avec succés');

            $current_user = $this->getUser();

            $message = \Swift_Message::newInstance() // message of the Creator (Contact)
            ->setSubject('Verseo SRM, Création d\'une partie prenante') // we configure the title
            ->setFrom('contact@verseo-consulting.com') // we configure the sender
            ->setTo($current_user->getEmail()) // we configure the recipient
            ->setBody('La partie prenante "'.$stakeholders->getLabel().'" a été enregistré avec succès ');
            $this->get('mailer')->send($message); // then we send the message.

            $org_stakeholder = $em->getRepository('Srm\CoreBundle\Entity\LegalForm')->findOneBy(array('siretNumber' => $stakeholders->getSiretNumber()));

            // if the stakeholder doesn't exit as an organsiation  
          if($org_stakeholder == NULL)
            {   
            //create a new organisation 
            $org_stakeholder = new Organisation(); 
            $org_stakeholder->setLabel($stakeholders->getLabel());
            $em->persist($org_stakeholder);
            $em->flush();
            $org_stakeholder->setIdentificationCode($org_stakeholder->getOrganisationId());
            
            //create a new LegalForm
            $legalForm_stakeholder = new LegalForm($org_stakeholder);
            $legalForm_stakeholder->setLabel($stakeholders->getLabel());
            $legalForm_stakeholder->setSiretNumber($stakeholders->getSiretNumber());
            $em->persist($legalForm_stakeholder);
            $em->flush(); 

            // create a new contact
            $contact_stakeholder = new Contact() ; 
            $contact_stakeholder->addContactStakeholder($stakeholders->getLastname(),$stakeholders->getFirstname(),$stakeholders->getEmail());
            // link the new contact with the new organisation
            $contact_stakeholder->setOrganisation($org_stakeholder);
            $contact_stakeholder->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact_stakeholder);
            $em->flush();

            //create a new user
            $contactName = $contact_stakeholder->getFirstname().' '.$contact_stakeholder->getLastname();
            $user = new User($contact_stakeholder->getContactId(), $contactName, $contact_stakeholder->getMail());
            $user->setRole($this->getDoctrine()->getRepository('Srm\UserBundle\Entity\Role')->findOneByRoleType('ROLE_U'));
            $user->setContact($contact_stakeholder);
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
            $passwordNonCrypte =  uniqid($contact_stakeholder->getLastname());
            $password = $encoder->encodePassword($passwordNonCrypte, $user->getSalt());
            $user->setPassword($password);
            $this->get('fos_user.user_manager')->updateUser($user);

            if (true === $stakeholders->getConnexion()) 
                {   
                //send mail to user
                $message = \Swift_Message::newInstance()
                ->setSubject('Verseo SRM')
                ->setFrom('contact@verseo-consulting.com') 
                ->setTo($contact_stakeholder->getMail()) 
                ->setBody($contact_stakeholder->getFirstname().' '.
                          $contact_stakeholder->getLastname() . ', votre Login est : ' .
                          $user->getEmail().' et votre Mot de passe est '.$passwordNonCrypte);
                $this->get('mailer')->send($message); 
                }
            } 
          else
            {
            // if the stakeholder exists as an organisation
            if (true === $stakeholders->getConnexion())
                {
                //send mail to user
                $LegalForm_stakeholder = $em->getRepository('Srm\CoreBundle\Entity\LegalForm')->findOneBy(array('siretNumber' => $stakeholders->getSiretNumber()));
                $org_LegalForm = $em->getRepository('Srm\CoreBundle\Entity\Organisation')->findOneBy(array('identificationCode' => $LegalForm_stakeholder->getOrganisation()->getOrganisationId()));
                $user_orgs = $em->getRepository('Srm\UserBundle\Entity\User')->orgAdminByOrganisation($org_LegalForm);
               
                $message = \Swift_Message::newInstance() 
                ->setSubject('Verseo SRM') 
                ->setFrom('contact@verseo-consulting.com'); 
                foreach($user_orgs as $user_org)
                    {
                    $message->setTo($user_org->getEmail()); 
                    }
                $message->setBody('U R A STK ');
                $this->get('mailer')->send($message); 
                }
            }
     
            } // close of add a new STK   
         
       return $this->redirect($this->generateUrl('srm_website_stakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
            
        )));
    }
}