<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\LegalForm;
use Srm\CoreBundle\Entity\Organisation;

class OrganisationsController extends Controller
{
    public function indexAction(Organisation $organisation)
    {  
       if (!$this->get('security.context')->isGranted('ROLE_U') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {throw new AccessDeniedHttpException('Accès interdit');
          }

        return $this->render('SrmWebsiteBundle:Organisation:index.html.twig', array(
            'organisation' => $organisation
        ));
    }
	
    public function showAction(Organisation $organisation)
    {  
       if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {
          throw new AccessDeniedHttpException('Accès limité aux administrateurs');
          }
       if (!is_null($organisation->getOrganisationStatus()) && 
           $organisation->getOrganisationStatus()->getOrganisationStatusId() != 1)
          {
          throw new AccessDeniedHttpException('L\'organisation n\'est pas valide');
          }
       if (null === $legalForm = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\LegalForm')->findOneByOrganisation($organisation)) 
          {
          throw new \Exception(sprintf("Aucune information légale pour l'organisation [%s]", $organisation->getIdentificationCode()));
          }

    return $this->render('SrmWebsiteBundle:Organisation:show.html.twig', array(
           'organisation' => $organisation,
           'legalForm'    => $legalForm,));       
    }

    public function basicFormAction(Organisation $organisation)
    {   
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {throw new AccessDeniedHttpException('Accès limité aux administrateurs');
          }
          
        $form = $this->createForm('srm_organisation_basic', $organisation, array(
            'action' => $this->generateUrl('srm_website_organisation_basic', array('identificationCode' => $organisation->getIdentificationCode())),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal'/*, 'novalidate' => 'novalidate'*/),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Organisation:basic.html.twig', array(
                'identificationCode' => $organisation->getIdentificationCode(),
                'form'               => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Organisation:basic.html.twig', array(
                'identificationCode' => $organisation->getIdentificationCode(),
                'form'               => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($organisation);

        if (null === $legalForm = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\LegalForm')->findOneByOrganisation($organisation)) {
            $legalForm = new LegalForm($organisation);
            $legalForm->setLabel(sprintf('Société anonyme [%s]', $organisation->getLabel()));
            $em->persist($legalForm);
        }

        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_organisation_show', array(
            'identificationCode' => $organisation->getIdentificationCode()
        )));
    }

    public function legalFormAction(Organisation $organisation)
    {   
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {throw new AccessDeniedHttpException('Accès limité aux administrateurs');
          }
          
        if (null === $legalForm = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\LegalForm')->findOneByOrganisation($organisation)) {
            throw new \Exception(sprintf("Aucune information légale pour l'organisation [%s]", $organisation->getIdentificationCode()));
        }

        $form = $this->createForm('srm_organisation_legal', $legalForm, array(
            'action' => $this->generateUrl('srm_website_organisation_legal', array('organisationId' => $organisation->getOrganisationId())),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Organisation:legal.html.twig', array(
                'form' => $form->createView(),
                'identificationCode' => $organisation->getIdentificationCode(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Organisation:basic.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($legalForm);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_organisation_show', array(
            'identificationCode' => $organisation->getIdentificationCode()
        )));
    }
}
