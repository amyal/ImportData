<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Indicator;
use Srm\CoreBundle\Entity\Referencial;


use Symfony\Component\HttpFoundation\Response;

class DataController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmIndicatorBundle:Indicator:list.html.twig', array(
            'organisation'  => $organisation,
            'indicator'     => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Indicator $indicator)
    {
        return $this->render('SrmIndicatorBundle:Indicator:show.html.twig', array(
            'organisationId'    => $organisation->getOrganisationId(),
            'indicatorId'       => $indicator->getIndicatorId(),
            'indicator'         => $indicator,
        ));
    }

    public function disableAction(Referencial $referencial, Indicator $indicator)
    {
        $indicator->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'referencialId' => $referencial->getReferencialId(),
        )));
    }

    public function formAction(Organisation $organisation, Indicator $indicator)
    {
        $formActionRoute = 'srm_indicator_indicator_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'indicatorId' => $indicator->getIndicatorId());

        if (null !== $indicatorId = $indicator->getIndicatorId()) {
            $formActionRoute = 'srm_indicator_indicator_edit';
            $formActionRouteParams['indicatorId'] = $indicatorId;
        }

        $form = $this->createForm('srm_indicator', $indicator, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Indicator:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

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
        )));
    }

}