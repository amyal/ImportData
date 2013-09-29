<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Repository;

use Symfony\Component\HttpFoundation\Response;

class RepositoriesController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmIndicatorBundle:Repository:list.html.twig', array(
            'organisation' => $organisation,
            'repositories' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Repository')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Repository $repository)
    {
        return $this->render('SrmIndicatorBundle:Repository:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'repository'     => $repository,
        ));
    }

    public function disableAction(Organisation $organisation, Repository $repository)
    {
        $repository->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($repository);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_repository_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Repository $repository)
    {
        $formActionRoute = 'srm_indicator_repository_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $repositoryId = $repository->getRepositoryId()) {
            $formActionRoute = 'srm_indicator_repository_edit';
            $formActionRouteParams['repositoryId'] = $repositoryId;
        }

        $form = $this->createForm('srm_repository', $repository, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Repository:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Repository:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($repository);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_repository_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function indicatorsByCategoriesAction()
    {
        $categoryIds = $this->getRequest()->query->get('categories_id');

        if ($categoryIds) {
            $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->findNonDeletedByCategories($categoryIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->findAll();
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