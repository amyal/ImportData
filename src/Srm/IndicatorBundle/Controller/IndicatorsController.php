<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Indicator;

use Symfony\Component\HttpFoundation\Response;

class IndicatorsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmIndicatorBundle:Indicator:list.html.twig', array(
            'organisation' => $organisation,
            'indicators' => $this->getDoctrine()->getIndicator('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Indicator $indicator)
    {
        return $this->render('SrmIndicatorBundle:Indicator:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'indicator'     => $indicator,
        ));
    }

    public function disableAction(Organisation $organisation, Indicator $indicator)
    {
        $indicator->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Indicator $indicator)
    {
        $formActionRoute = 'srm_indicator_indicator_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

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

    public function indicatorsByCategoriesAction()
    {
        $categoryIds = $this->getRequest()->query->get('categories_id');

        if ($categoryIds) {
            $indicators = $this->getDoctrine()->getIndicator('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByCategories($categoryIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getIndicator('Srm\CoreBundle\Entity\Indicator')->findAll();
            $indicators = array();
        }

        $html = '';
        foreach($indicators as $indicator) {
            if ($indicator->getIndicatorId() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $indicator->getIndicatorId(), $indicator->getLabel());
        }

        return new Response($html);
    }
}