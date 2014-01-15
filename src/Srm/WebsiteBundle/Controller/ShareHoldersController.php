<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Srm\CoreBundle\Entity\Shareholder;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Stakeholder;
use Srm\UserBundle\Entity\User;

class ShareHoldersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:Shareholder:list.html.twig', array(
            'organisation' => $organisation,
            'shareholders'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Shareholder')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Shareholder $shareholder)
    {
        return $this->render('SrmWebsiteBundle:Shareholder:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'shareholder'        => $shareholder,
        ));
    }

    public function disableAction(Organisation $organisation, Shareholder $shareholder)
    {
        $shareHolder->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($shareHolder);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_shareholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Shareholder $shareholder)
    {
        $request = $this->getRequest();//récupérer les ids de partie prenante et la nouvelle organisation 
        $shareholderId = $request->query->get('shareholderId'); 
        
        $formActionRoute = 'srm_website_shareholders_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'shareholderId' => $shareholderId);
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

        $em = $this->getDoctrine()->getManager();
        $em->persist($shareholder);
        $em->flush();


        return $this->redirect($this->generateUrl('srm_website_shareholders_list', array(
                    'organisationId' => $organisation->getOrganisationId(), 
                )));
    }
        
}
