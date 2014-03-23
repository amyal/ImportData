<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Indicator;
use Srm\CoreBundle\Entity\Referencial;

use Symfony\Component\HttpFoundation\Response;

class IndicatorController extends Controller
{
    public function listAction(Organisation $organisation)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Indicator:list.html.twig', array(
            'organisation'  => $organisation,
            'indicators'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Indicator $indicator)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Indicator:show.html.twig', array(
            'organisationId'    => $organisation->getOrganisationId(),
            'indicatorId'       => $indicator->getIndicatorId(),
            'indicator'         => $indicator,
        ));
    }

    public function disableAction(Organisation $organisation,  Indicator $indicator)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        $this->get('session')->getFlashBag()->set('success_indicator', 'L\'indicator "'.$indicator->getLabel().'" a été supprimé');
        $indicator->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));    
    }

    public function formAction(Organisation $organisation, Indicator $indicator)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        $formActionRoute = 'srm_indicator_indicator_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'indicatorId' => $indicator->getIndicatorId());

        if (null !== $indicatorId = $indicator->getIndicatorId()) {
            $formActionRoute = 'srm_indicator_indicator_edit';
            $formActionRouteParams['indicatorId'] = $indicatorId;
        }

        $form = $this->createForm('srm_indicator', $indicator, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal'/*, 'novalidate' => 'novalidate'*/),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Indicator:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }
        /*if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 2) {
            return $this->render('SrmIndicatorBundle:Indicator:form2.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'referencialId' => $referencial->getReferencialId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }*/
        
        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Indicator:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'organisationId' => $organisation->getOrganisationId(),
            //'referencialId' => $referencial->getReferencialId(),
            //'indicatorId' => $indicator->getIndicatorId(),
        )));
    }

    
    public function indicatorsByCategoriesAction()
    {
        $elementIds         = $this->getRequest()->query->get('elements_id');
        $elementType        = $this->getRequest()->query->get('elementType');
        $referencialTypeId  = $this->getRequest()->query->get('referencialType');

        if ($elementIds != 'null') {
            if ($elementType == 'referencialType')
                $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByReferencialType($elementIds);
            elseif ($elementType == 'category1')
                $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByCategories($elementIds, 1, $referencialTypeId);
            elseif ($elementType == 'category2')
                $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByCategories($elementIds, 2, $referencialTypeId);
            elseif ($elementType == 'category3')
                $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByCategories($elementIds, 3, $referencialTypeId);
        }
        else {
            if ($referencialTypeId != 'null')
                $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByReferencialType($referencialTypeId);
            else
                $indicators = array();
                //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findAll();
        }

        $html = '';
        foreach($indicators as $indicator) {
            if ($indicator->getIndicatorsId() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $indicator->getIndicatorsId(), $indicator->getLabel());
        }

        return new Response($html);
    }

}