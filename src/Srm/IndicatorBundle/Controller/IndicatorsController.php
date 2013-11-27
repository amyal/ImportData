<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Repository;
use Srm\CoreBundle\Entity\Indicator;

use Symfony\Component\HttpFoundation\Response;

class IndicatorsController extends Controller
{
    public function listAction(Organisation $organisation, Repository $repository)
    {
        return $this->render('SrmIndicatorBundle:Indicator:list.html.twig', array(
            'organisation' => $organisation,
            'repository' => $repository,
            'indicators' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByRepository($repository),
        ));
    }

    public function showAction(Organisation $organisation, Indicator $indicator)
    {
        return $this->render('SrmIndicatorBundle:Indicator:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'indicator'     => $indicator,
        ));
    }

    public function disableAction(Repository $repository, Indicator $indicator)
    {
        $indicator->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'repositoryId' => $repository->getRepositoryId(),
        )));
    }

    public function formAction(Organisation $organisation, Repository $repository, Indicator $indicator)
    {
        $formActionRoute = 'srm_indicator_indicator_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'repositoryId' => $repository->getRepositoryId(), 'indicatorId' => $indicator->getIndicatorId());

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

        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 1) {
            return $this->render('SrmIndicatorBundle:Indicator:form1.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 2) {
            return $this->render('SrmIndicatorBundle:Indicator:form2.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 3) {
            return $this->render('SrmIndicatorBundle:Indicator:form3.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 4) {
            return $this->render('SrmIndicatorBundle:Indicator:form4.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 5) {
            return $this->render('SrmIndicatorBundle:Indicator:form5.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 6) {
            return $this->render('SrmIndicatorBundle:Indicator:form6.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 7) {
            return $this->render('SrmIndicatorBundle:Indicator:form7.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 8) {
            return $this->render('SrmIndicatorBundle:Indicator:form8.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 9) {
            return $this->render('SrmIndicatorBundle:Indicator:form9.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 10) {
            return $this->render('SrmIndicatorBundle:Indicator:form10.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 11) {
            return $this->render('SrmIndicatorBundle:Indicator:form11.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }
        if ('GET' === $request->getMethod() && $indicator->getIndicatorId() == 12) {
            return $this->render('SrmIndicatorBundle:Indicator:form12.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Indicator:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'repositoryId' => $repository->getRepositoryId(),
                 'indicatorId' => $indicator->getIndicatorId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($indicator);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_indicator_list', array(
            'organisationId' => $organisation->getOrganisationId(),
            'repositoryId' => $repository->getRepositoryId(),
            'indicatorId' => $indicator->getIndicatorId()
        )));
    }
}