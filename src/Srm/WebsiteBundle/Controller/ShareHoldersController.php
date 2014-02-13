<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Srm\CoreBundle\Entity\Shareholder;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Contact;
use Srm\UserBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ShareHoldersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
                
        return $this->render('SrmWebsiteBundle:Shareholder:list.html.twig', array(
            'organisation' => $organisation,
            'shareholders'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Shareholder')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Shareholder $shareholder)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        return $this->render('SrmWebsiteBundle:Shareholder:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'shareholder'        => $shareholder,
        ));
    }

    public function disableAction(Organisation $organisation, Shareholder $shareholder)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $shareholder->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($shareholder);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_shareholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Shareholder $shareholder, $type = "",Contact $contact)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $request = $this->getRequest();//récupérer les ids des actionnaires 
        $shareholderId = $request->query->get('shareholderId'); 
        
        $formActionRoute = 'srm_website_shareholders_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(),'type'=>$type, 'shareholderId' => $shareholderId);
        $FormEdit=$shareholder->getShareholderId() ; //  if the variable equal Null -> add else edition 

        if (null !== $shareholderId = $shareholder->getShareholderId()) {
            $formActionRoute = 'srm_website_shareholders_edit';
            $formActionRouteParams['shareholderId'] = $shareholderId;
        }

        $form = $this->createForm('srm_shareholder', $shareholder, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Shareholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),  
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Shareholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }
        $contact = $shareholder->getContact();
        $contact->setOrganisation($organisation);
        $contact->setShareholder(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($shareholder);
        $em->flush();


        return $this->redirect($this->generateUrl('srm_website_shareholders_list', array(
                    'organisationId' => $organisation->getOrganisationId(), 
                )));
    }
        
}
