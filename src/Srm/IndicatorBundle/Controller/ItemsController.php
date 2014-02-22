<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Item;
use Srm\CoreBundle\Entity\Referencial;


use Symfony\Component\HttpFoundation\Response;

class ItemsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $items = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Item')->findNonDeletedByUser($organisation, $this->getUser());
        $answers = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Answers')->findNonDeletedByItem($items);

        return $this->render('SrmIndicatorBundle:Item:list.html.twig', array(
            'organisation'  => $organisation,
            'items'         => $items,
            'unitId'        => $answers->getUnitMeasurementId()
        ));
    }

    public function showAction(Organisation $organisation, Item $item)
    {
        return $this->render('SrmIndicatorBundle:Item:show.html.twig', array(
            'organisationId'    => $organisation->getOrganisationId(),
            'indicatorId'       => $item->getIndicatorId(),
            'item'         => $item,
        ));
    }

    public function disableAction(Referencial $referencial, Item $item)
    {
        $item->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'referencialId' => $referencial->getReferencialId(),
        )));
    }

    public function formAction(Organisation $organisation, Item $item)
    {
        $formActionRoute = 'srm_indicator_indicator_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'indicatorId' => $item->getIndicatorId());

        if (null !== $indicatorId = $item->getIndicatorId()) {
            $formActionRoute = 'srm_indicator_indicator_edit';
            $formActionRouteParams['indicatorId'] = $indicatorId;
        }

        $form = $this->createForm('srm_indicator', $item, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

}